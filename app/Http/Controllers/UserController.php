<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Poste;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // public function create(){
    //     $roles = Role::all(); 
    //     $postes = Poste::all();
    //     $genres = Genre::all();
    //     return view('admin.user.createuser', compact('roles', 'postes', 'genres')); 
    // }

    // public function store(Request $request){
    //     $user = new User(); 
    //     $user->nom = $request->nom; 
    //     $user->desciption = $request->desciption; 
    //     $user->email = $request->email; 
    //     $user->image = $request->file('image')->hashName();
    //     $request->file('image')->storePublicly('img/', 'public');
    //     $user->role_id = $request->role; 
    //     $user->poste_id = $request->poste;
    //     $user->genre_id = $request->genre;
    //     // $user->image = $request->file('image')->hashName();
    //     $user->password = Hash::make('testest');
    //     $user->save(); 

    //     return redirect()->route('user.index');
    // }
    public function edit(User $user){
        $users = User::all();
        $roles = Role::all();
        $genres = Genre::all();
        $postes = Poste::all();
        return view('admin.user.edituser', compact('users', 'user', 'roles', 'postes', 'genres'));
    }

    public function update(User $user, Request $request){
        
        if($request->file('image') != NULL){
            Storage::disk('public')->delete('img/' . $user->image);
            $request->file('image')->storePublicly('img/', 'public');
            $user->image = "img/" . $request->file('image')->hashName();
            $user->nom = $request->nom; 
            $user->email = $request->email; 
            $user->description = $request->description;
            $user->role_id = $request->role_id; 
            $user->poste_id = $request->poste_id;
            $user->save();
        }
        return redirect()->route('user.index');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index');
    }
}
