<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{
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
    public function getTypTreningu()
    {
        return $this->typ_treningu;
    }

    /**
     * @param mixed $typ_treningu
     */
    public function setTypTreningu($typ_treningu)
    {
        $this->typ_treningu = $typ_treningu;
    }

    /**
     * @return mixed
     */
    public function getNazwaTrenera()
    {
        return $this->nazwa_trenera;
    }

    /**
     * @param mixed $nazwa_trenera
     */
    public function setNazwaTrenera($nazwa_trenera)
    {
        $this->nazwa_trenera = $nazwa_trenera;
    }

    /**
     * @return mixed
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * @param mixed $date_and_time
     */
    public function setDateAndTime($date_and_time)
    {
        $this->date_and_time = $date_and_time;
    }
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $typ_treningu;


    /**
     *
     * @ORM\Column(type="text")
     */
    protected $nazwa_trenera;

  /**
     *
     * @ORM\Column(type="text")
     */
    protected $date_and_time;


}
