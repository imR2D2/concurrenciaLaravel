<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermisosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        for ($i=0; $i < 50; $i++) { 
            $data = [
                'name' => 'ADMIN'
            ];
    
            $permission = new \App\Models\Permission;
            $permission->name = 'ADMIN';
            $permission->save();
    
            $this->assertDatabaseHas('permissions', $data);
        }
    }
}
