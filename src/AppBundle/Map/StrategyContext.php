<?php

namespace AppBundle\Map;

class StrategyContext {

    const DATABASE_STRATEGY = "database_strategy";
    const RANDOM_STRATEGY = "random_strategy";
    const FILE_STRATEGY = "file_strategy";

    private $strategy = NULL;

    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case StrategyContext::DATABASE_STRATEGY:
                $this->strategy = new StrategyDatabase();
                break;
            case StrategyContext::RANDOM_STRATEGY:
                $this->strategy = new StrategyRandom();
                break;
            case StrategyContext::FILE_STRATEGY:
                $this->strategy = new StrategyFile();
                break;
        }
    }
    public function generatePoints($pointAmount, Range $range,Point $mainPoint, $distance) {
        return $this->strategy->generate($pointAmount, $range, $mainPoint, $distance);
    }
}