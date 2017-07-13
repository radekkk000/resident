<?php

namespace AppBundle\Map;

class PointsRange {

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



    public function showPointsInRange() {
        //main point from which we will measure the distance
        $points[0] = array(
        'lat' => $this->mainPointLattitude,
        'lng' => $this->mainPointLongtitude,
        'label' => 'main',
        'icon' => 'img/main.png'
        );

        //sample points
        $userX = 51.751;
        $userY = 19.426;

        for($i = 1; $i < 35; $i++) {

            $userX = $this->generateRandomFloat(51.731, 51.753);
            $userY = $this->generateRandomFloat(19.416, 19.448);

            if ($this->calculateDistance($userX, $userY,$this->mainPointLattitude, $this->mainPointLongtitude, 'K') >= $this->distanceInKilometers)
            {
                $icon = 'img/marker1.png';
            }
            else
            {
                $icon = 'img/marker2.png';
            }

            $points[$i] = array(
                'lat' => $userX,
                'lng' => $userY,
                'label' => $i,
                'icon' => $icon,
            );
        }

        return $points;
    }

}