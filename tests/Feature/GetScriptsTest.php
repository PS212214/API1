<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetScriptsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_scrript_op_id()
    {
        $response = $this->get('/api/scripts/5');

        $response->assertStatus(200);
        $response->assertJson(['id'=>'5','hoofdstuk_id'=>'1', 'volgorde'=>'5', 'naam'=>'Condities 2', 'bestand'=>'/start/conditie2.php', 'PHP-versie'=>'7.3']);
    }
}
