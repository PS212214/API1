<?php

namespace Tests\Feature;

use App\Models\Script;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteCreatedScriptTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_created_script()
    {
        $script = Script::create(array('hoofdstuk_id'=>'4','naam'=>'test1','bestand'=>'/mdcdywebshop/aanmeldformulier.php')) ;
        $response = $this->delete('api/scripts/' .$script->id);
        $response->assertStatus(200);
    }
}
