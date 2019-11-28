<?php namespace App; 

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\DB;

class Mapel extends Model {     
    protected $fillable = ['kode','nama','id_kelas','deskripsi'];     
    protected $dates = [];
    protected $table = 'mapel';     
    public static $rules = [         
        'kode' => 'required',         
        'nama' => 'required',         
        'id_kelas' => 'required',         
        'deskripsi' => 'required', 
    ]; 

    public static function getKelasMapel(){
        return DB::table('mapel')
        ->select('mapel.id','mapel.kode','mapel.nama','kelas.kelas','mapel.deskripsi','mapel.created_at','mapel.updated_at')
        ->join('kelas', 'mapel.id_kelas', '=', 'kelas.id')
        ->get();
    }    

    public static function getKelasMapelID($id){
        return DB::table('mapel')
        ->select('mapel.id','mapel.kode','mapel.nama','kelas.kelas','mapel.deskripsi','mapel.created_at','mapel.updated_at')
        ->join('kelas', 'mapel.id_kelas', '=', 'kelas.id')
        ->where('mapel.id', $id)
        ->get();
    }        
} 