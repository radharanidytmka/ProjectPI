<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $User = User::all();
        return response()->json($User);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');

        $data = [
            'name' => $name,
            'username' => $username,
            'password' => $password
        ];

        User::create($data);
        return response()->json(['message' => 'Successfull create new User!']);
    }

    public function show($id)
    {
        $User = User::getUserbyId($id);
        return response()->json($User);
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $User->update($request->all());
        return response()->json(['message' => 'Successfull updated User!']);
    }
    
    public function delete($id)
    {
        User::destroy($id);
        return response()->json(['message' => 'Successfull deleted User!']);
    }
}
