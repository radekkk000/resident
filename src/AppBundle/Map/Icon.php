<?php

namespace AppBundle\Map;

class Icon {

    const OUT_OF_RANGE_ICON = "img/marker1.png";
    const IN_RANGE_ICON = "img/marker2.png";
    const MAIN_ICON = "img/main.png";

    const OUT_OF_RANGE = "OUT_OF_RANGE";
    const IN_RANGE = "IN_RANGE";
    const MAIN = "MAIN";

    private $path;


    function __construct($type)
    {
        if ($type == Icon::IN_RANGE) {
            $this->path = Icon::IN_RANGE_ICON;
        }

        elseif ($type == Icon::MAIN) {
            $this->path = Icon::MAIN_ICON;
        }

        elseif ($type == Icon::OUT_OF_RANGE) {
            $this->path = Icon::OUT_OF_RANGE_ICON;
        }
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }



}