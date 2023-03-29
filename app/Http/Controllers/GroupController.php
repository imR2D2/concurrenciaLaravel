<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class GroupController extends Controller
{
    public function index(){
        $grupos = Groups::all();
        return view('groupview', compact('grupos'));
    }

    public function save(){
        $grupos = new Groups;
        $grupos->Name = 'Grupo3';
        $grupos->Key_name = '3';
        $grupos->Description = 'Es el tercer grupo';
        $grupos->save();
    }
}
