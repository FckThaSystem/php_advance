<?php

namespace hillel\auto;

class Body
{
    protected $color;

    protected $type;

    protected $length;

    protected $height;

    const UNIT = 'meters';

    public function __construct($color = 'white', $type = 'bus', $length = 20, $height = 4)
    {
        $this->color = $color;
        $this->type = $type;
        $this->length = $length;
        $this->height = $height;

    }
    public function getBodyStats()
    {
        return 'Car body stats: color - ' . $this->color . ', ' . 'type - ' . $this->type . ', ' . 'length - ' . $this->length . ' ' . self::UNIT . ', ' . 'height - ' . $this->height . ' ' . self::UNIT;
    }
}