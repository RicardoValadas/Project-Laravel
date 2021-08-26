<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }


    public function store(request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return redirect('register')->with('success', 'User created');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(request $request)
    {

        $validations = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', '=', $request->username)->first();

        // Check if the user exists in the DB
        if (isset($user)) {
            // Check if password matches
            if (Hash::check($request->password, $user->password)) {
                // The passwords match...
                $request->session()->put('username', $user->username);
                return redirect()->route('flowers');
            }
        } else {
            return redirect()->back()->with('status', 'Username doesnt exist');
        }
    }

    public function secret()
    {
        return view('secret');
    }
}

   /*  $login = $request->validate([
            'username' => ['required', 'exists:users,username'],
            //'password' => ['required', 'exists:users,password']
        ]);

        User::whereUsername($login['username'])->first();
        session()->flash('success', true);
        return redirect()->route('flowers');
    */ 
    
  /*   $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('login')->with('success', 'User logged in');
        }
        return redirect()->route('login')->with('superErrors', 'User not found'); */