<?php namespace App\Http\Controllers; 

use App\SMK; 
use Illuminate\Http\Request; 

class SMKController extends Controller  {     
    public function index()    {         
        $smks = SMK::all();         
        return response()->json($smks);     
    }     

    public function indexAtAkreditasi() {
        $smk = SMK::getAkreditasiSMK();
        return response()->json($smk);
    }
    
    public function store(Request $request)     {         
        SMK::create($request->all());         
        return response()->json([             
            'message' => 'Successfull added new school data'         
        ]);     
    }     
    
    public function show($id)     {         
        $smk = SMK::find($id);         
        return response()->json($smk);     
    } 
    
    public function showAkreditasi($id)     {         
        $smk = SMK::getAkreditasiSMKID($id);         
        return response()->json($smk);     
    } 
    
    public function update(Request $request, $id)     {         
        $smk = SMK::find($id);         
        $smk->update($request->all());         
        return response()->json([             
            'message' => 'Successfull update school data'         
        ]);     
    }     
    
    public function delete($id)     {         
        SMK::destroy($id);         
        return response()->json([             
            'message' => 'Successfull delete school data'         
        ]);    
    } 
} 