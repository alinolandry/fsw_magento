<?php


namespace SimplifiedMagento\FirstModule\NotMagento;


/**
 * Class BigPencil
 * @package SimplifiedMagento\FirstModule\NotMagento
 */
class BigPencil implements PencilInterface
{
    /**
     * @return string
     */
    public function getPencilType()
    {
        return "Big Pencil";
    }

}