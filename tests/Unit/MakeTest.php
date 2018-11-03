<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class MakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMake()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->Make,['Ford','Honda','Toyota']);
    }
}
