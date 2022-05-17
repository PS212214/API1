<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InsertScriptTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert_script()
    {
        $data = ["hoofdstuk_id"=>"1", "naam"=>"test1", "volgorde"=>"4"];
        $response = $this->json('POST', 'api/scripts', $data);
        $response->assertStatus(201);
        $response->assertJson(["hoofdstuk_id"=>"1","naam"=>"test1","volgorde"=>"4"]);
    }
}
