<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class IntegerTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIntegerType()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertTrue($car->year='int' or 'null');
    }
}
