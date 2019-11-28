<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SMKController extends Controller
{
    public function show(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8002',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', '/api/smk');
        return json_decode($response->getBody()->getContents());
    }

    public function showID($id){
        $client = new Client([
            'base_uri' => 'http://localhost:8002',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', '/api/smk/'.$id);
        return json_decode($response->getBody()->getContents());
    }

    public function store(Request $request){
        $client = new Client([
            'base_uri' => 'http://localhost:8002',
            'timeout'  => 2.0,
        ]);
        
        $npsn = $request->input('npsn');
        $nama = $request->input('nama');
        $id_akreditasi = $request->input('id_akreditasi');
        $alamat = $request->input('alamat');
        $profil = $request->input('profil');
        
        $response = $client->request('POST','/api/smk',[
            'form_params' => [
                'npsn' => $npsn,
                'nama' => $nama,
                'id_akreditasi' => $id_akreditasi,
                'alamat' => $alamat,
                'profil' => $profil
            ]
        ]);

        return response()->json(['message' => 'Successfull added new school data']);
    }

    public function update(Request $request, $id){
        $client = new Client([
            'base_uri' => 'http://localhost:8002',
            'timeout'  => 2.0,
        ]);

        $npsn = $request->input('npsn');
        $nama = $request->input('nama');
        $id_akreditasi = $request->input('id_akreditasi');
        $alamat = $request->input('alamat');
        $profil = $request->input('profil');

        $response = $client->request('PUT','/api/smk/'.$id,[
            'form_params' => [
                'npsn' => $npsn,
                'nama' => $nama,
                'id_akreditasi' => $id_akreditasi,
                'alamat' => $alamat,
                'profil' => $profil
            ]
        ]);

        return response()->json(['message' => 'Successfull updated school data']);
    }

    public function delete($id){
        $client = new Client([
            'base_uri' => 'http://localhost:8002',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('DELETE', '/api/smk/'.$id);
        return response()->json(['message' => 'Successfull deleted school data']);
    }
}
