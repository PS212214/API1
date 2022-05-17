<?php

namespace Tests\Feature;

use App\Models\Script;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataBaseMissingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database_missing()
    {
        $script = Script::create(array('hoofdstuk_id'=>'1','naam'=>'MissingTest','bestand'=>'/mywebshop/aanmeldformulier.php')) ;
        $response = $this->delete('api/scripts/' .$script->id);
        $this->assertDatabaseMissing('scripts',['naam'=>'MissingTest']);
        $response->assertStatus(200);
    }
}
