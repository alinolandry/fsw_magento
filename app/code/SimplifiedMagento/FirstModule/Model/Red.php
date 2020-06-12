<?php


namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Brightness;
use SimplifiedMagento\FirstModule\Api\Color;


class Red implements Color
{

    protected $brightness;

    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }
    /**
     * @return mixed
     */
    public function getColor()
    {
        return "Red";
    }
}