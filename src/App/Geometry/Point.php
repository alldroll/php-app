<?php

namespace App\Geometry;

class Point
{
    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @return float
     */
    public function distance(Point $other): float
    {
        return sqrt(
            pow($this->x - $other->getX(), 2) + pow($this->y - $other->getY(), 2)
        );
    }
}
