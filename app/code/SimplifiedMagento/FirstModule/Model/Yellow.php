<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;


class Yellow implements Color
{

    /**
     * @return mixed
     */
    public function getColor()
    {
        return "Yellow";
    }
}