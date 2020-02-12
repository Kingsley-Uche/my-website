<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitor;

class userController extends Controller
{
    //
    public function insert_form(){

        return view('homepage');
    }
    
    public function insert(Request $request){
    	//print_r($request->input());
    	//echo $request['tel'];
        //dd($request->all());
    	$data = new visitor;
    	$data->name=$request->name;
    	$data->email=$request->email;
    	$data->phone=$request->tel;
    	$data->desc=$request->desc;
        //dd($data);
        $data->save();
        return redirect('/uche');
        
        


    }
}
