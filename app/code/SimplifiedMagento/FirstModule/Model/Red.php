<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;


class Red implements Color
{

    /**
     * @return mixed
     */
    public function getColor()
    {
        return "Red";
    }
}