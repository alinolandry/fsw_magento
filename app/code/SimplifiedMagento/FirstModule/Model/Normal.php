<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Size;


class Normal implements Size
{

    /**
     * @return mixed
     */
    public function getSize()
    {
        return "Normal";
    }
}