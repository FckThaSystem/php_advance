<?php

namespace hillel\auto;

class Engine
{
    protected $type;

    protected $capacity;

    protected $power;

    const POWER_UNIT = 'HP';

    const UNIT_CAPACITY = 'liters';

    public function __construct($type = 'gasoline', $capacity = 2.2, $power = 160)
    {
        $this->type = $type;
        $this->capacity = $capacity;
        $this->power = $power;
    }

    public function getEngineStats()
    {
        return 'Engine characteristics: fuel type - ' . $this->type . ', capacity - ' . $this->capacity . ' ' . self::UNIT_CAPACITY . ', power - ' . $this->power . ' ' . self::POWER_UNIT;
    }
}