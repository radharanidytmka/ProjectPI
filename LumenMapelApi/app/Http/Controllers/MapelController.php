<?php namespace App\Http\Controllers; 

use App\Mapel; 
use Illuminate\Http\Request; 

class MapelController extends Controller  {     
    public function index()    {         
        $mapels = Mapel::all();         
        return response()->json($mapels);     
    }     

    public function indexAtKelas() {
        $mapel = Mapel::getKelasMapel();
        return response()->json($mapel);
    }
    
    public function store(Request $request)     {         
        Mapel::create($request->all());         
        return response()->json([             
            'message' => 'Successfull added new subject'         
        ]);     
    }     
    
    public function show($id)     {         
        $mapel = Mapel::find($id);         
        return response()->json($mapel);     
    }     
    
    public function showAtKelas($id){
        $mapel = Mapel::getKelasMapelID($id);
        return response()->json($mapel);
    }

    public function update(Request $request, $id)     {         
        $mapel = Mapel::find($id);         
        $mapel->update($request->all());         
        return response()->json([             
            'message' => 'Successfull update subject'         
        ]);     
    }     
    
    public function delete($id)     {         
        Mapel::destroy($id);         
        return response()->json([             
            'message' => 'Successfull delete subject'         
        ]);    
    } 
} 