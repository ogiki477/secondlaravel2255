<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;    //@ogiki477this hash also works but jus that the downer hash throws errors but works!!
use Session;

class StudentController extends Controller
{
    public function Studentlogin(){

     return view('Students.login');

    }
    public function Register(){
        return view('Students.register');
    }
    public function registerUser(Request $request){
        $request->validate([
         'name'=>'required',
         'email'=>'required|unique:users',
         'password'=>'required|min:4|max:4'
        
        ]);
        $user = new User();
        $user->name= $request->name;
        $user->email=$request->email;
       // $user->password=$request->password;
        $user->password=Hash::make($request->password); //@ogiki477this code works but the hash shows errors?? NOT SURE WHY!!
        $result=$user->save();
        if($result){
            return back()->with('Success','you are successfully registered');
        }else{
            return back()->with('Fail','Oops!! Something is wrong ');
        }
      

    }
    public function loginUser(Request $request){
        $request->validate([
         'email'=>'required',
         'password'=>'required'
        ]);
       $user = User::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('Fail','Wrong Password');
            }
        }

    }
    public function dashBoard(Request $request){
        $data = array();
        if(Session::has('loginId')){
            $data  = User::where('id' , '=' , Session::get('loginId'))->first();
        }
         return view('Students.dashboard',compact('data'));
    }
    public function logOut(){
         if(Session::has('loginId')){
            Session::pull('loginId');
            return  redirect('login');
         }
     }
}
