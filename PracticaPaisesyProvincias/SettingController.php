<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {
        $checkedList = session('afterInsert','show movies');
        $checkedCreate = session('afterInsert','show movies');
        $afterInsert = session('afterInsert','show movies');
        if ($afterInsert == 'show movies') {
            $checkedList = 'checked';
        }else{
            $checkedCreate = 'checked';
        }
        return view('setting.index',[ 'checkedList'=>$checkedList,'checkedCreate'=>$checkedCreate]);
        
    }
    
    public function update(Request $request) {
        session(['afterInsert'=>$request ->afterInsert]);
        return back();
    }
     public function guardarSeleccion(Request $request)
    {
        $selectedCountry = $request->input('selectedCountry');
        session(['selectedCountry' => $selectedCountry]);
 
        $selectedProvince = $request->input('selectedProvince');
        session(['selectedProvince' => $selectedProvince]);

        
        return back(); // Redirigir de vuelta a la página anterior
    }
}
/*class SettingController extends Controller
{
    public function index() {
        $checkedList = session('afterInsert','show movies');
        $checkedCreate = session('afterInsert','show create form');
         $checkedCountry = session('afterInsert','Country');
        $checkedProvinces = session('afterInsert','Provinces');
        $afterInsert = session('afterInsert','show movies');
        if ($afterInsert == 'show movies') {
            $checkedList = 'checked';
        }else{
            $checkedCreate = 'checked';
        }
        return view('setting.index',[ 'checkedList'=>$checkedList,'checkedCreate'=>$checkedCreate,'checkedCountry'=>$checkedCountry,'checkedProvinces'=>$checkedProvinces]);
        
    }
    
    public function update(Request $request) {
        session(['afterInsert'=>$request ->afterInsert]);
        return back();
    }
   
}*/