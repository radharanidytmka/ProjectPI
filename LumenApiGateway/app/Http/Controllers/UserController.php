<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    //Show
    public function show()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:8003',
            'timeout' => 2.0,
        ]);

        //Mengirim request ke http://localhost:8003/user/
        $response = $client->request('GET', 'api/user/');
        return json_decode($response->getBody()->getContents());
    }

    //Show by Id
    public function showID($id){
        $client = new Client([
            'base_uri' => 'http://localhost:8003',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', '/api/user/'.$id);
        return json_decode($response->getBody()->getContents());
    }

    //Create
    public function create(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');

        $client = new Client([
            'base_uri' => 'http://localhost:8003',
            'timeout' => 2.0,
        ]);

        $response = $client->request('POST', 'api/user', [
            'form_params' => [
                'name' => $name,
                'username' => $username,
                'password' => $password
            ]
        ]);

        return response()->json(['message' => 'Successfully Created a New User!']);
    }

    //Update
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');

        $client = new Client([
            'base_uri' => 'http://localhost:8003',
            'timeout' => 2.0,
        ]);

        $response = $client->request('PUT', 'api/user/' . $id, [
            'form_params' => [
                'name' => $name,
                'username' => $username,
                'password' => $password
            ]
        ]);

        return response()->json(['message' => 'Succesfully Updated an User!']);
    }

    //Delete
    public function delete($id)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:8003',
            'timeout' => 2.0,
        ]);

        $response = $client->request('DELETE', 'api/user/' . $id);
        return response()->json(['message' => 'Succesfully Deleted an User!']);
    }
}