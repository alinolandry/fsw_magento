<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Size;


class Big implements Size
{

    /**
     * @return mixed
     */
    public function getSize()
    {
        return "Big";
    }
}