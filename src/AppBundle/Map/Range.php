<?php

namespace AppBundle\Map;

class Range
{
    private $lattitudeMin;

    /**
     * @return mixed
     */
    public function getLattitudeMin()
    {
        return $this->lattitudeMin;
    }

    /**
     * @param mixed $lattitudeMin
     */
    public function setLattitudeMin($lattitudeMin)
    {
        $this->lattitudeMin = $lattitudeMin;
    }


    private $lattitudeMax;

    /**
     * @return mixed
     */
    public function getLattitudeMax()
    {
        return $this->lattitudeMax;
    }


    /**
     * @param mixed $lattitudeMax
     */
    public function setLattitudeMax($lattitudeMax)
    {
        $this->lattitudeMax = $lattitudeMax;
    }

    private $longtitudeMin;

    /**
     * @return mixed
     */
    public function getLongtitudeMin()
    {
        return $this->longtitudeMin;
    }

    /**
     * @param mixed $longtitudeMin
     */
    public function setLongtitudeMin($longtitudeMin)
    {
        $this->longtitudeMin = $longtitudeMin;
    }

    private $longtitudeMax;

    /**
     * @return mixed
     */
    public function getLongtitudeMax()
    {
        return $this->longtitudeMax;
    }

    /**
     * @param mixed $longtitudeMax
     */
    public function setLongtitudeMax($longtitudeMax)
    {
        $this->longtitudeMax = $longtitudeMax;
    }



}