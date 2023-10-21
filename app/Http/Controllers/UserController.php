<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function role(){

        $roles=Role::paginate (5);
        return view ('backend.pages.role', compact('roles'));
    }

    public function form() {
        return view ('backend.pages.rolecreate');
    }


    public function store(Request $request) {

        $request->validate([
            'name'=>'required'

        ]);


        Role::create([
             'name'=>$request->name,
         ]);

         return redirect()->route('role')->with('msg','Role Created successfully.');

    }

    public function user(){

        $users=Role::paginate (5);
        return view ('backend.pages.role', compact('roles'));
    }




}
