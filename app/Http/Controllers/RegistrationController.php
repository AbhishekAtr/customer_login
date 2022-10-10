<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $user = Registration::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request -> session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','Paswword does not match');
            }
        }
        else{
            return back()->with('fail','This email is not register');
        }
    }

  public function register(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:5',
    ]);

    $data = Registration::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password'])
    ]);

    

    // if ($data) {
    //   return redirect("dashboard")->withSuccess('have signed-in');
    // }
  }
}
