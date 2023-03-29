<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('userview', compact('user'));
    }

    public function save(UserRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('usuarios');
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.editar',compact('user'));
    }

    public function update(UserRequest $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('usuarios');
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect('usuarios');
    }

}
