<?php

namespace App\Geometry;

interface ShapeInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return float
     */
    public function getArea(): float;

    /**
     * @return float
     */
    public function getPerimeter(): float;
}
