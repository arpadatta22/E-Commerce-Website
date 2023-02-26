<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manageUser(){
        return view('admin.user.manage-user',[
            'users'=>User::all()
        ]);
    }
    public function editUser($id){
        return view('admin.user.edit-user',[
            'user'=>User::find($id)
        ]);
    }
}
