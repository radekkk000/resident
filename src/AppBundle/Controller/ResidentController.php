<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use AppBundle\Form\TrainingType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Entity\BusinessPartnersData;
use AppBundle\Entity\StrategyContext;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use AppBundle\Entity\Training;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

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
    public function trainerAction(Request $request)
    {
        $training = new Training();
        $training->setTrainerName('');
        $training->setTrainingDate(new \DateTime('tomorrow'));
        $form = $this->createForm(TrainingType::class, $training);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($training);
            $em->flush();
            return $this->redirectToRoute('trainer');
        }

        return $this->render(
            'Resident/trainer.html.twig',
            array('form' => $form->createView())
        );


        //ssss
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
        //0.0001 - 190 m
          //  x     - 1000 m
        // x= 1000 * 0,001 /190 = 0,005
        // 1km to zmiana o 0,005
        $userX = 51.7531912;
            $userY =9.40961;

    ///    echo $this->distance(32.9697, -96.80322, 32.96798, -96.80323, "K") . " Kilometers<br>";
        return $this->render('resident/gmap.html.twig', array( 'lat' => $userX, 'lng' => $userY ));
    }


    public function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
    return ($miles * 0.8684);
} else {
    return $miles;
}
}

    /**
     * @Route("/olxlogin")
     */
public function olxloginAction()
{
    $ch = curl_init();
    $url = 'https://www.olx.pl/konto/?ref%5B0%5D%5Bparams%5D%5Bbs%5D=homepage_adding&ref%5B0%5D%5Baction%5D=adding&ref%5B0%5D%5Bmethod%5D=index';
    curl_setopt($ch, CURLOPT_URL,$url);
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://www.olx.pl/konto/?ref%5B0%5D%5Bparams%5D%5Bbs%5D=homepage_adding&ref%5B0%5D%5Baction%5D=adding&ref%5B0%5D%5Bmethod%5D=index',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));

    $resp = curl_exec($curl);
    curl_close($curl);
    dump($resp); exit;
//
//    $ch = curl_init();
//    $url = 'https://rpt.cedexis.com/f1/_CgJqMRAUGCAiBggBEOSkASjdg-_WCTCokFs4vLj3xwVA2diNpgFKEQgDEKsBGLO1AiAAKPiNgKAEUABaCggAEAAYACAAKABgAWoTYnV0dG9uNC5hbXMuaHYucHJvZIIBEQgDEKsBGLO1AiAAKPiNgKAEiAHe_I_3AQ/0/0/15287/1/0/1224/2/0';
//    curl_setopt($ch, CURLOPT_URL,$url);
//    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, curl_setopt($ch,CURLOPT_HTTPHEADER,array('Origin:' => 'https://www.olx.pl')));
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    $server_output = curl_exec ($ch);
//    curl_close ($ch);
//    dump($server_output); exit;
}


    /**
     * @Route("/user")
     */
    public function userAction()
    {
        $training = new Training();
        $disciplineArr =  $training->getAvaibleDisciplines();
        $distanceArr = $training->getAvaibleDistances();
        $values = null;
        $post = $_POST;
        $category = $this->getDoctrine()->getEntityManager();
        $result = $training->getTraining($post, $category);

        if (!$result)
        {
            $categories = null;
        }
        else
        {
            $i = 0;
            foreach ($result as $cat)
            {
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
