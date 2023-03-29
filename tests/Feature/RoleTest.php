<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        for ($i=0; $i < 50 ; $i++) { 
            $data = [
                'name' => 'Tester'
            ];
    
            $role = new \App\Models\Role;
            $role->name = 'Tester';
            $role->save();
    
            $this->assertDatabaseHas('roles', $data);
        }

    }
}
