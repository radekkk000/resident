<?php

namespace AppBundle\Map;

class CoordinatesCalculation {

    const UNIT_KILOMETERS = "K";
    const UNIT_MILES = "N";
    const OUT_OF_RANGE = 'OUT_OF_RANGE';
    const IN_RANGE = 'IN_RANGE';

    private $startPoint;
    private $endPoint;
    private $unit;
    private $mainPoint;

    function __construct(Point $pointEnd, Point $startPoint, $unit, $mainPoint) {
        $this->startPoint = $startPoint;
        $this->endPoint = $pointEnd;
        $this->unit = $unit;
        $this->mainPoint = $mainPoint;
    }

    public static function generateRandomFloat($min,$max) {

        return ($min+lcg_value()*(abs($max-$min)));
    }

    public function calculateDistanceBetweenStartEndPoints() {
        $theta = $this->endPoint->getLongtitude() - $this->startPoint->getLongtitude();
        $dist = sin(deg2rad($this->endPoint->getLattitude())) * sin(deg2rad($this->startPoint->getLattitude())) + cos(deg2rad($this->endPoint->getLattitude())) * cos(deg2rad($this->startPoint->getLattitude())) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($this->unit);

        if ($unit == CoordinatesCalculation::UNIT_KILOMETERS) {
            return ($miles * 1.609344);
        } elseif ($this->unit == CoordinatesCalculation::UNIT_MILES) {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    public function checkIfPointIsInMainPointDistance(Point $point, $distance) {
        if ( ($this->calculateDistanceBetweenStartEndPoints() ) >= $distance)  {
            return CoordinatesCalculation::OUT_OF_RANGE;
        }
        else  {
            return CoordinatesCalculation::IN_RANGE;
        }
    }

}