<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::all('name');

        return view('users.showusers', [
            'users' => $users,
        ]);
    }

    public function create(){
        return view('users.addUsers');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);
    }

    //     $pet = Pet::create([
    //         'name' => $request['name'],
    //         'specie' => $request['specie'],
    //         'color' => $request['color'],
    //         'size' => $request['size'],
    //     ]);

    //     return view('pets.show', [
    //         'pet' => $pet
    //     ]);
    // }

    // public function show(Pet $pet ){
    //     return view('pets.show', [
    //         'pet' => $pet
    //     ]);
    // }


}