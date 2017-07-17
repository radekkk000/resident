<?php

namespace AppBundle\Map;

class Point {

    const OUT_OF_RANGE = "OUT_OF_RANGE";
    const IN_RANGE = "IN_RANGE";
    const MAIN = "MAIN";

    private $lattitude;

    /**
     * @return mixed
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * @param mixed $lattitude
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;
    }

    private $longtitude;

    /**
     * @return mixed
     */
    public function getLongtitude()
    {
        return $this->longtitude;
    }

    /**
     * @param mixed $longtitude
     */
    public function setLongtitude($longtitude)
    {
        $this->longtitude = $longtitude;
    }


    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type //IN_RANGE, OUT_OF_RANGE, MAIN
     */
    public function setType($type)
    {
        $icon = new Icon($type);
        $this->type = $icon->getPath();
    }

    private $label;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }


}