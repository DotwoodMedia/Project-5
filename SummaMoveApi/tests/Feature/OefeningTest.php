<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OefeningTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_oefening_op_id()
    {
        $response = $this->get('api/oefeningen/1');
        $response->assertStatus(200);
        $response->assertJson(['img'=>'https://calisthenicsworld.nl/wp-content/uploads/2022/02/Sit-Up-oefening-uitleg-1024x1024.png']);
    }
}
