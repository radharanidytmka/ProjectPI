<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MapelController extends Controller
{
    public function show(){
        $client = new Client([
            'base_uri' => 'http://localhost:8001',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', '/api/mapel');
        return json_decode($response->getBody()->getContents());
    }

    public function showID($id){
        $client = new Client([
            'base_uri' => 'http://localhost:8001',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', '/api/mapel/'.$id);
        return json_decode($response->getBody()->getContents());
    }

    public function store(Request $request){
        $client = new Client([
            'base_uri' => 'http://localhost:8001',
            'timeout'  => 2.0,
        ]);
        
        $kode = $request->input('kode');
        $nama = $request->input('nama');
        $id_kelas = $request->input('id_kelas');
        $deskripsi = $request->input('deskripsi');
        
        $response = $client->request('POST','/api/mapel',[
            'form_params' => [
                'kode' => $kode,
                'nama' => $nama,
                'id_kelas' => $id_kelas,
                'deskripsi' => $deskripsi
            ]
        ]);

        return response()->json(['message' => 'Successfull added new subject']);
    }

    public function update(Request $request, $id){
        $client = new Client([
            'base_uri' => 'http://localhost:8001',
            'timeout'  => 2.0,
        ]);

        $kode = $request->input('kode');
        $nama = $request->input('nama');
        $id_kelas = $request->input('id_kelas');
        $deskripsi = $request->input('deskripsi');

        $response = $client->request('PUT','/api/mapel/'.$id,[
            'form_params' => [
                'kode' => $kode,
                'nama' => $nama,
                'id_kelas' => $id_kelas,
                'deskripsi' => $deskripsi
            ]
        ]);

        return response()->json(['message' => 'Successfull updated subject']);
    }

    public function delete($id){
        $client = new Client([
            'base_uri' => 'http://localhost:8001',
            'timeout'  => 2.0,
        ]);

        $response = $client->request('DELETE', '/api/mapel/'.$id);
        return response()->json(['message' => 'Successfull deleted subject']);
    }
}
