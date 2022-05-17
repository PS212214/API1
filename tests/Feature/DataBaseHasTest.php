<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataBaseHasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $data = ["hoofdstuk_id"=>"1", "naam"=>"test1", "volgorde"=>"4"];
        $response = $this->json('POST', 'api/scripts', $data);
        $this->assertDatabaseHas('scripts',['naam'=>'test1']);
        $response->assertStatus(201);
        $response->assertJson(["hoofdstuk_id"=>"1","naam"=>"test1","volgorde"=>"4"]);
    }
}
