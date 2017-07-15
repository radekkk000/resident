<?php

namespace AppBundle\Map;

class Icon {

    const OUT_OF_RANGE = "img/marker1.png";
    const IN_RANGE = "img/marker2.png";
    const MAIN_ICON = "img/main.png";
    private $type;

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->type;
    }

    function __construct($type)
    {
        if ($type == 'IN_RANGE') {
            $this->type = "img/marker2.png";
        }

        if ($type == 'MAIN') {
            $this->type = Icon::MAIN_ICON;
        }

        if ($type == 'OUT_OF_RANGE') {
            $this->type = Icon::OUT_OF_RANGE;
        }
    }

}