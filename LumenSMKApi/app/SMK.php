<?php namespace App; 

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\DB;

class SMK extends Model {     
    protected $fillable = ['npsn','nama','id_akreditasi','alamat','profil'];     
    protected $dates = [];
    protected $table = 'smk';     
    public static $rules = [         
        'npsn' => 'required',         
        'nama' => 'required',         
        'id_akreditasi' => 'required',         
        'alamat' => 'required', 
        'profil' => 'required'
    ]; 

    public static function getAkreditasiSMK(){
        return DB::table('smk')
        ->select('smk.id','smk.npsn','smk.nama','akreditasi.akreditasi','smk.alamat','smk.profil','smk.created_at','smk.updated_at')
        ->join('akreditasi', 'smk.id_akreditasi', '=', 'akreditasi.id')
        ->get();
    }

    public static function getAkreditasiSMKID($id){
        return DB::table('smk')
        ->select('smk.id','smk.npsn','smk.nama','akreditasi.akreditasi','smk.alamat','smk.profil','smk.created_at','smk.updated_at')
        ->join('akreditasi', 'smk.id_akreditasi', '=', 'akreditasi.id')
        ->where('smk.id', $id)
        ->get();
    }
} 