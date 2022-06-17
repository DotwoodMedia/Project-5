<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_op_id()
    {
        $response = $this->get('api/users/1');
        $response->assertStatus(200);
        $response->assertJson(['name'=>'elay']);
    }
    public function test_user_op_naam()
    {
        $response = $this->get('api/users?name=e');
        $response->assertStatus(200);
        $response->assertJsonFragment(['name'=>'elay']);
    }
}
