<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 */

class Training
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $trainer_name;

    /**
     * @ORM\Column(type="integer", length=64)
     */
    protected $training_distance;

    /**
     * @return mixed
     */
    public function getTrainingDistance()
    {
        return $this->training_distance;
    }

    /**
     * @param mixed $training_distance
     */
    public function setTrainingDistance($training_distance)
    {
        $this->training_distance = $training_distance;
    }


    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $training_district;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $training_street;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTrainerName()
    {
        return $this->trainer_name;
    }

    /**
     * @param mixed $trainer_name
     */
    public function setTrainerName($trainer_name)
    {
        $this->trainer_name = $trainer_name;
    }

    /**
     * @return mixed
     */
    public function getTrainingDistrict()
    {
        return $this->training_district;
    }

    /**
     * @param mixed $training_district
     */
    public function setTrainingDistrict($training_district)
    {
        $this->training_district = $training_district;
    }

    /**
     * @return mixed
     */
    public function getTrainingStreet()
    {
        return $this->training_street;
    }

    /**
     * @param mixed $training_street
     */
    public function setTrainingStreet($training_street)
    {
        $this->training_street = $training_street;
    }

    /**
     * @return mixed
     */
    public function getTrainingCity()
    {
        return $this->training_city;
    }

    /**
     * @param mixed $training_city
     */
    public function setTrainingCity($training_city)
    {
        $this->training_city = $training_city;
    }

    /**
     * @return mixed
     */
    public function getTrainingDate()
    {
        return $this->training_date;
    }

    /**
     * @param mixed $training_date
     */
    public function setTrainingDate($training_date)
    {
        $this->training_date = $training_date;
    }

    /**
     * @return mixed
     */
    public function getTrainingPrice()
    {
        return $this->training_price;
    }

    /**
     * @param mixed $training_price
     */
    public function setTrainingPrice($training_price)
    {
        $this->training_price = $training_price;
    }

    /**
     * @return mixed
     */
    public function getTrainingTime()
    {
        return $this->training_time;
    }

    /**
     * @param mixed $training_time
     */
    public function setTrainingTime($training_time)
    {
        $this->training_time = $training_time;
    }

    /**
     * @return mixed
     */
    public function getTrainingType()
    {
        return $this->training_type;
    }

    /**
     * @param mixed $training_type
     */
    public function setTrainingType($training_type)
    {
        $this->training_type = $training_type;
    }

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $training_city;

    /**
     * @ORM\Column(type="datetime", length=64)
     */

    protected $training_date;

    /**
    * @ORM\Column(type="integer", length=10)
    */

    protected $training_price;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    protected $training_time;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $training_type;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $training_position;

    /**
     * @return mixed
     */
    public function getTrainingPosition()
    {
        return $this->training_position;
    }

    /**
     * @param mixed $training_position
     */
    public function setTrainingPosition($training_position)
    {
        $this->training_position = $training_position;
    }

    public function getAvaibleDisciplines()
    {
        $disciplineArr[0] = 'crossfit';
        $disciplineArr[1] = 'mma';
        $disciplineArr[2] = 'power lifting';
        $disciplineArr[3] = 'boxing';
        $disciplineArr[4] = 'muay thai';
        return $disciplineArr;
    }

    public function getAvaibleDistances()
    {
        $distanceArr[0] = 5;
        $distanceArr[1] = 4;
        $distanceArr[2] = 3;
        $distanceArr[3] = 2;
        $distanceArr[4] = 1;
        return $distanceArr;
    }

    public function getTraining($post, $category)
    {
        $category = $category;
        if ($post)
        {
            $arr = $post;
            $trainName = $arr['trainer'];
            $trainType = $arr['type'];
            $distance = $arr['distance'];
            if($distance == '')
            {
                $query = $category->createQuery("select p.id, p.training_type, p.training_district, p.training_city, p.training_street, 
                p.training_price, p.training_time, p.training_distance, p.trainer_name, p.training_date from AppBundle:Training p 
                where p.training_type like '" . $trainType . "' and p.training_distance >= 0");
            }
            else
            {
                $query = $category->createQuery("select p.id, p.training_type, p.training_district, p.training_city, p.training_street, 
                p.training_price, p.training_time, p.training_distance, p.trainer_name, p.training_date from AppBundle:Training p 
                where p.training_type like '" . $trainType . "' and p.training_distance =  ".$distance );
            }
        }
        else
        {
            $query = $category->createQuery("select p.id, p.training_type, p.training_district, p.training_city, p.training_street, 
             p.training_price, p.training_time, p.training_distance, p.trainer_name, p.training_date from AppBundle:Training p 
        ");
        }
        $result = $query->getResult();
        return $result;
    }
}