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

}
