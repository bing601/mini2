<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        $user = User::find(1);
        $user->name='Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users',['name'=>$user->name]);
    }
}
