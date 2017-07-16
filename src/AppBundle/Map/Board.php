<?php

namespace AppBundle\Map;
use AppBundle\Map\Point;
use AppBundle\Map\CoordinatesCalculation;

class Board
{
    const DATABASE_STRATEGY = "database_strategy";
    const RANDOM_STRATEGY = "random_strategy";
    const FILE_STRATEGY = "file_strategy";

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

    public function generatePoints($pointAmount, Range $range, $strategy) {
        $strategyContextRandom = new StrategyContext($strategy);
        $this->point = $strategyContextRandom->generatePoints($pointAmount, $range, $this->mainPoint, $this->distance);
    }

    public function generateBoard($pointAmount, $range) {
        $points = $this->generatePoints($pointAmount, $range, Board::RANDOM_STRATEGY);
        //$points = $this->generatePoints($pointAmount, $range, Board::FILE_STRATEGY);
        return $points;
    }

}