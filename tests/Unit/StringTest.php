<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class StringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testString()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertTrue(is_string($car->Model));
    }
}
