<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('rolesview', compact('roles'));
    }

    public function save(RoleRequest $request){
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        return redirect('roles');
    }

    public function edit($id){
        $role = Role::find($id);
        return view('roles.editar',compact('role'));
    }

    public function update(Request $request,$id){
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        return redirect('roles');
    }

    public function delete($id){
        Role::find($id)->delete();
        return redirect('roles');
    }

}
