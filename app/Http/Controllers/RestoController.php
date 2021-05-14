<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurant;
use App\ resgister;
class RestoController extends Controller
{
    //
     function  index()
     {
         return view("home");
     }

     function  list()
     {
           $data= restaurant::all();
        return view("list",["data"=>$data]);
     }
     function add (Request $req)
        
     {
        //  return $req->input();
        $resto= new restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
               return redirect('list');
     }

     function delete($id)
     { 
        restaurant::find($id)->delete($id);
        
        return redirect('list');
     }
      function edit($id)
      {

        $data=restaurant::find($id);
        return view('edit',['data'=>$data]);
      }

      function register (Request $req)
      {  
        $resto= new resgister;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->password=$req->input('password');
        $resto->contact=$req->input('contact');
        $resto->save();
       
        return redirect('home');     

      }
}

