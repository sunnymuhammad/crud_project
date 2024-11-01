<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
   function home(){
    $user=DB::table('users')->get();
    return view('pages.home',['users'=>$user]);
   }

   function form(){
      return view('pages.create');
   }

   function create(Request $request){
        $request->validate([
            'fname'=>'required|string',
            'email'=>'required|email',
             'password'=>'required|numeric'

        ],[
            'fname.required'=>'Name is requied',
            'email.required'=>'Email is required',
            'Password.required'=>'Password is required'
        ]
    );


    DB::table('users')->insert(
        ['fname'=>$request->input('fname'),
                  'lname'=>$request->input('lname'),
                  'email'=>$request->input('email'),
                  'password' => $request->input('password')
                ]
    );
    return redirect('home');
   }

   function show(Request $request){

    return view('pages.update',['user_id'=>$request->id]);
   }

   function update(Request $request){

        $request->validate([
            'fname'=>'string|nullable',
            'email'=>'email|nullable',
             'password'=>'numeric|nullable'
        ]
       );
       $user_id = $request->input('user_id');



       $data=array_filter($request->only('fname','lname','email','password'));

        DB::table('users')->where('id','=',$user_id)->update($data);

        return redirect('home');

   }

   function del(Request $request){
       DB::table('users')->where('id','=',$request->input('user_id'))->delete();
       return redirect('home');
   }

}
