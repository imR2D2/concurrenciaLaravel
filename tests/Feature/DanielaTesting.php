<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DanielaTesting extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        for ($i=0; $i < 2; $i++) { 
            $data = [
                'Name' => 'Daniela'
            ];
    
            $group = new \App\Models\Groups;
            $group->Name = 'Daniela';
            $group->save();
    
            $this->assertDatabaseHas('Groups', $data);
        }
    }
}
