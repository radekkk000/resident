<?php

namespace AppBundle\Map;
use AppBundle\Map\Point;
use AppBundle\Map\CoordinatesCalculation;

class Board
{
    private $distance;
    private $mainPoint;
    private $point;

    function __construct($distance, Point $startPoint) {
        $this->distance = $distance;
        $this->mainPoint = $startPoint;
    }

    /**
     * @return mixed
     */
    public function getPoint($i) {
        return $this->point[$i];
    }

    /**
     * @return \AppBundle\Map\Point
     */
    public function getMainPoint(): \AppBundle\Map\Point {
        return $this->mainPoint;
    }

    public function generatePoints($pointAmount, Range $range) {

        for($i = 1; $i < $pointAmount; $i++) {
            $lattitudeRandom = CoordinatesCalculation::generateRandomFloat($range->getLattitudeMin(), $range->getLattitudeMax());
            $longtitudeRandom = CoordinatesCalculation::generateRandomFloat($range->getLongtitudeMin(), $range->getLongtitudeMax());

            $point = new Point();
            $point->setLongtitude($longtitudeRandom);
            $point->setLattitude($lattitudeRandom);
            $point->setLabel($i);
            $calculation = new CoordinatesCalculation($point, $this->mainPoint, CoordinatesCalculation::UNIT_KILOMETERS, $this->mainPoint);
            $point->setType($calculation->checkIfPointIsInMainPointDistance($point, $this->distance));

            $this->point[$i] = $point;
        }
    }

    public function generateBoard($pointAmount, $range) {
        $points = $this->generatePoints($pointAmount, $range);

        return $points;
    }

}