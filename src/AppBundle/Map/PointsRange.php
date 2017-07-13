<?php

namespace AppBundle\Map;

class PointsRange {

    const OUT_OF_RANGE_ICON = "img/marker1.png";
    const IN_RANGE_ICON = "img/marker2.png";
    const MAIN_ICON = "img/main.png";
    private $distanceInKilometers;
    private $mainPointLattitude;
    private $mainPointLongtitude;


    function __construct($distanceInKilometers, $mainPointLattitude, $mainPointLongtitude) {
        $this->distanceInKilometers = $distanceInKilometers;
        $this->mainPointLattitude = $mainPointLattitude;
        $this->mainPointLongtitude = $mainPointLongtitude;
    }

    private function generateRandomFloat($min,$max) {

        return ($min+lcg_value()*(abs($max-$min)));
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2, $unit) {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
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

    public function checkDistanceFromMainPoint($lattitude, $longtitude)
    {
        if ($this->calculateDistance($lattitude, $longtitude,$this->mainPointLattitude, $this->mainPointLongtitude, 'K') >= $this->distanceInKilometers)
        {
            $icon = PointsRange::OUT_OF_RANGE_ICON;
        }
        else
        {
            $icon = PointsRange::IN_RANGE_ICON;
        }

        return $icon;
    }

    public function generatePoints($quantity, $latitudeRangeMin, $lattitudeRangeMax, $longtitudeRangeMin, $longtitudeRangeMax)
    {
        $points[0] = array(
            'lat' => $this->mainPointLattitude,
            'lng' => $this->mainPointLongtitude,
            'label' => 'MAIN',
            'icon' => PointsRange::MAIN_ICON,
        );

        for($i = 1; $i < $quantity; $i++) {
            $lattitude = $this->generateRandomFloat($latitudeRangeMin, $lattitudeRangeMax);
            $longtitude = $this->generateRandomFloat($longtitudeRangeMin, $longtitudeRangeMax);

            $points[$i] = array(
                'lat' => $lattitude,
                'lng' => $longtitude,
                'label' => $i,
                'icon' => $this->checkDistanceFromMainPoint($lattitude, $longtitude),
            );
        }

        return $points;
    }

    public function showPointsInRange($quantity, $latitudeRangeMin, $lattitudeRangeMax, $longtitudeRangeMin, $longtitudeRangeMax) {
        $points = $this->generatePoints($quantity, $latitudeRangeMin, $lattitudeRangeMax, $longtitudeRangeMin, $longtitudeRangeMax);

        return $points;
    }

}