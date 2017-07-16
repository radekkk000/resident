<?php

namespace AppBundle\Map;

interface StrategyInterface {
    public function generate($pointAmount, Range $range, Point $mainPoint, $distance);
}