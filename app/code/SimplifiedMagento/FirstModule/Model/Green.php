<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;


class Green implements Color
{

    /**
     * @return mixed
     */
    public function getColor()
    {
        return "Green";
    }
}