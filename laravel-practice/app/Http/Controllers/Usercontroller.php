<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use app\Helpers\MyHelper;

class Usercontroller extends Controller
{
    public function uploadAvatar(Request $request){
        
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'image uploaded');
            
        }
        $request->session->flash('error','not uploaded'); 
        return redirect()->back();
        
    }

    
    
    public function index()
    {
        $info = MyHelper::Help();
        //return view('home');
        // return 'i am home';

        // DB::insert('insert into users(name,email,password)
        // values(?,?,?)', ['sunny1', 'sun1@gmail.com', 'password']);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::delete('delete from users where id=1');

        // $user= new User();
        // var_dump($user);
        // dd($user);

        // $user->name='sun1';
        // $user->email='sun1@gmail.com';
        // $user->password='pass';
        // $user->save();

        // $data=[
        //     'name'=>'elon2',
        //     'email'=>'elon2@gamil.com',
        //     'password'=>'pass',
        // ];
        // User::create($data);




    }
}
