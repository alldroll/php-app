<?php

namespace AppTest\Geometry;

use App\Geometry\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
    public function testGetDistance()
    {
        $p1 = new Point(3, 4);
        $p2 = new Point(0, 0);
        $this->assertEquals(5, $p1->distance($p2));
    }
}
