<?php


namespace SimplifiedMagento\FirstModule\Model;


use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Size;


/**
 * Class Pencil
 * @package SimplifiedMagento\FirstModule\Model
 */
class Pencil implements PencilInterface
{
    /**
     * @var Color
     */
    protected $color;
    /**
     * @var Size
     */
    protected $size;

    /**
     * Pencil constructor.
     * @param Color $color
     * @param Size $size
     */
    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }


    /**
     * @return mixed|string
     */
    public function getPencilType()
    {
        return "The pencil has the color ".$this->color->getColor(). " and this siz ".$this->size->getSize();
    }
}