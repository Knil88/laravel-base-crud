<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saints;

class SaintsController extends Controller
{
public function home(){
        $saints = Saints::all();

        $data = ['saints' => $saints];
        
       
        return view('home',$data);
       
}
public function show($id){
        $saints = Saints::find($id);

        $data = ['saints' => $saints];

        return view('components.saints',$data);
}

// --- DELETE
public function saintDestroy($id) {

        $saint = Saints::find($id);
        $saint -> delete();

        return redirect() -> route('home');
    }

     // --- CREATE
  public function saintCreate() {

        return view('saintCreate');
    }

    public function saintStore(Request $request) {

        $data = $request->all();

       

        $saint = new Saints();

        $saint -> name = $data['name'];
        $saint -> city_of_birth = $data['city_of_birth'];
        $saint -> date_of_birth = $data['date_of_birth'];
        $saint -> miracles = $data['miracles'];

        $saint -> save();
        
        return redirect() -> route('home');
    }
}



 