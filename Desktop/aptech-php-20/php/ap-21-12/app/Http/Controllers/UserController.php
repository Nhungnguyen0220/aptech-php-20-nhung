<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users.index', ['users' =>$users ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    if (!$_POST['name'] || !$_POST['email'] || !$_POST['password'])
                {
                    dd("Vui lòng nhập đầy đủ thông tin. Vui lòng quay Trở lại");
                }
            
            $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
            if(!preg_match($regex, $_POST['email'])) { 
               
                dd("Email này không hợp lệ. Vui lòng quay trở lại nhập email khác.") ;
        
            }

        $users = User::get();
        foreach($users as $user){
            if($user->email == $_POST['email']){
                dd('email da ton tai moi ban dang nhap lai');

            }
            else {
               
            User::insert([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);
            $users = User::get();
            return view('users.index', ['users' => $users]);

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::where('id','=', $id)->first();
        return view('users.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$_POST['name'] || !$_POST['email'] || !$_POST['password'])
        {
            dd("Vui lòng nhập đầy đủ thông tin. Vui lòng quay Trở lại");
        }
    
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
    if(!preg_match($regex, $_POST['email'])) { 
       
        dd("Email này không hợp lệ. Vui lòng quay trở lại nhập email khác.") ;

    }

    $users = User::get();
    foreach($users as $user){
        if($user->email == $_POST['email']){
            dd('email da ton tai moi ban dang nhap lai');

    }
} 
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        $users= User::get();
        return view('users.index',['users' => $users]);
    }

    public function login()
     {
       return view('users.login');
     }

     
}
