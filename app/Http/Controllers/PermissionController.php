<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Http\Requests\permissionRequest;

class PermissionController extends Controller
{
    public function index(){
        $permisos = Permission::all();
        return view('permissionview', compact('permisos'));
    }

    public function save(permissionRequest $request){
        $permisos = new Permission;
        $permisos->name = $request->name;
        $permisos->save();

        return redirect ('permisos');
    }

    public function edit($id){
        $permisos = Permission::find($id);
        return view('permisos.editar',compact('permisos'));
    }

    public function update(Request $request,$id){
        $permisos = Permission::find($id);
        $permisos->name = $request->name;
        $permisos->save();

        return redirect('permisos');
    }

    public function delete($id){
        Permission::find($id)->delete();
        return redirect('permisos');
    }

}