<?php

namespace AppBundle\Map;

class StrategyFile implements \AppBundle\Map\StrategyInterface {

    public function generate($pointAmount, Range $range, Point $mainPoint, $distance)
    {
        $file = file("sample_points.txt");
        $array = explode(',',implode($file));

        $lattitudeRandom = (float)$array[0];
        $longtitudeRandom = (float)$array[1];

        $point = new Point();
        $point->setLongtitude($longtitudeRandom);
        $point->setLattitude($lattitudeRandom);
        $point->setLabel(1);
        $calculation = new CoordinatesCalculation($point, $mainPoint, CoordinatesCalculation::UNIT_KILOMETERS, $mainPoint);
        $point->setType($calculation->isCorrectDistance($point, $distance));
        $points[1] = $point;

        return $points;
    }

}