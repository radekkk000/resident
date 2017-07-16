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

    function __construct($distance, Point $start) {
        $this->distance = $distance;
        $this->mainPoint = $start;
    }

    /**
     * @return mixed
     */
    public function getPoint($point) {
        return $this->point[$point];
    }

    /**
     * @return \AppBundle\Map\Point
     */
    public function getMainPoint(): \AppBundle\Map\Point {
        return $this->mainPoint;
    }

    public function generatePoints($pointAmount, Range $range, $strategy) {
        $context = new StrategyContext($strategy);
        $this->point = $context->generatePoints($pointAmount, $range, $this->mainPoint, $this->distance);
    }

    public function generateBoard($pointAmount, $range) {
        $points = $this->generatePoints($pointAmount, $range, Board::RANDOM_STRATEGY);
        //$points = $this->generatePoints($pointAmount, $range, Board::FILE_STRATEGY);
        return $points;
    }

}
