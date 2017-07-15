<?php

namespace AppBundle\Map;
use AppBundle\Map\Point;

class Board
{
    private $distance;
    private $startPoint;

    function __construct($distance, Point $startPoint) {
          $this->distance = $distance;
          $this->startPoint = $startPoint;
    }

    private function generateRandomFloat($min,$max) {

        return ($min+lcg_value()*(abs($max-$min)));
    }

    private function calculateDistanceBetweenPoints(Point $pointEnd, Point $startPoint, $unit) {
        $theta = $pointEnd->getLongtitude() - $startPoint->getLongtitude();
        $dist = sin(deg2rad($pointEnd->getLattitude())) * sin(deg2rad($startPoint->getLattitude())) + cos(deg2rad($pointEnd->getLattitude())) * cos(deg2rad($startPoint->getLattitude())) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } elseif ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    public function checkDistanceFromMainPoint(Point $point)
    {
        if ($this->calculateDistanceBetweenPoints($point,$this->startPoint,'K') >= $this->distance)
        {
            return 'OUT_OF_RANGE';
        }
        else
        {
            return 'IN_RANGE';
        }
    }

    public function generatePoints($pointAmount, Range $range) {
        $points[0] = array(
            'lat' => $this->startPoint->getLattitude(),
            'lng' => $this->startPoint->getLongtitude(),
            'label' => $this->startPoint->getLabel(),
            'icon' => $this->startPoint->getType(),
        );

        for($i = 1; $i < $pointAmount; $i++) {
            $lattitudeRandom = $this->generateRandomFloat($range->getLattitudeMin(), $range->getLattitudeMax());
            $longtitudeRandom = $this->generateRandomFloat($range->getLongtitudeMin(), $range->getLongtitudeMax());

            $point = new Point();
            $point->setLongtitude($longtitudeRandom);
            $point->setLattitude($lattitudeRandom);
            $point->setLabel($i);
            $point->setType($this->checkDistanceFromMainPoint($point));

            $points[$i] = array(
                'lat' => $point->getLattitude(),
                'lng' => $point->getLongtitude(),
                'label' => $point->getLabel(),
                'icon' => $point->getType(),
            );

        }

        return $points;
    }

    public function showBoard($pointAmount, $range) {
        $points = $this->generatePoints($pointAmount, $range);

        return $points;
    }


}