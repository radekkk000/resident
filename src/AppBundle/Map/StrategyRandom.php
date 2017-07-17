<?php

namespace AppBundle\Map;

class StrategyRandom implements \AppBundle\Map\StrategyInterface {

    public function generate($pointAmount, Range $range, Point $mainPoint, $distance)
    {
        for($i = 1; $i < $pointAmount; $i++) {
            $lattitudeRandom = CoordinatesCalculation::generateRandomFloat($range->getLattitudeMin(), $range->getLattitudeMax());
            $longtitudeRandom = CoordinatesCalculation::generateRandomFloat($range->getLongtitudeMin(), $range->getLongtitudeMax());

            $point = new Point();
            $point->setLongtitude($longtitudeRandom);
            $point->setLattitude($lattitudeRandom);
            $point->setLabel($i);
            $calculation = new CoordinatesCalculation($point, $mainPoint, CoordinatesCalculation::UNIT_KILOMETERS, $mainPoint);
            $point->setType($calculation->isCorrectDistance($point, $distance));

            $points[$i] = $point;
        }

        return $points;
    }

}