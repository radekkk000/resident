<?php

namespace AppBundle\Controller;

use AppBundle\Map\PointsRange;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use AppBundle\Form\TrainingType;
use AppBundle\Entity\StrategyContext;
use AppBundle\Entity\Training;
use AppBundle\Entity\Map;


class ResidentController extends Controller
{

    public function savePhrase($phrase, $algo)
    {
        $product = new Product();
        $product->setName($phrase);
        $product->setDescription($algo);
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response($product->getId());
    }

    /**
     * @Route("/trainer", name="trainer")
     */

    public function trainerAction(Request $request) {
        $training = new Training();
        $training->setTrainerName('');
        $training->setTrainingDate(new \DateTime('tomorrow'));
        $form = $this->createForm(TrainingType::class, $training);

        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($training);
            $em->flush();

            return $this->redirectToRoute('trainer');
        }

        return $this->render(
            'Resident/trainer.html.twig',
            array('form' => $form->createView())
        );
    }


    /**
     * @Route("/")
     */

    public function homepageAction()
    {
        return $this->render('resident/index.html.twig');
    }

    /**
     * @Route("/gmap")
     */

    public function gmapAction()
    {
        $distanceInKilometers = 0.5;
        $startPointLattitude = 51.741;
        $startPointLongtitude = 19.431;

        $point = new PointsRange($distanceInKilometers, $startPointLattitude, $startPointLongtitude);
        $points = $point->showPointsInRange();

        return $this->render('resident/gmap.html.twig', array('points' => $points));
    }

    /**
     * @Route("/user")
     */

    public function userAction()
    {
        $training = new Training();
        $disciplineArr = $training->getAvaibleDisciplines();
        $distanceArr = $training->getAvaibleDistances();
        $values = null;
        $post = $_POST;
        $category = $this->getDoctrine()->getEntityManager();
        $result = $training->getTraining($post, $category);

        if (!$result) {
            $categories = null;
        } else {
            $i = 0;
            foreach ($result as $cat) {
                $categories[$i] = array(
                    'id' => $cat['id'],
                    'training_type' => $cat['training_type'],
                    'trainer_name' => $cat['trainer_name'],
                    'training_price' => $cat['training_price'],
                    'training_time' => $cat['training_time'],
                    'training_street' => $cat['training_street'],
                    'training_district' => $cat['training_district'],
                    'training_distance' => $cat['training_distance'],
                    'training_city' => $cat['training_city'],
                    'training_date' => $cat['training_date']
                );
                $i++;
            }
        }

        $html = $this->container->get('templating')->render('Resident/user.html.twig', array('categories' => $categories,
            'trainer' => $values['trainer'], 'distanceValues' => $distanceArr, 'distance' => $values['distance'], 'disciplineValues' => $disciplineArr,
            'type' => $values['type']
        ));

        return new Response($html);
    }
}
