<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth ;
class AuthController extends Controller

{
    public function index()
    {
        return view('login');
    }

    // create an  account
    // public function create_account(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'id' => 'required',
    //         'user_name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //         'role' => 'required',
    //         'name_establishment' => 'required'
    //     ]);

    //     $user = User::create([
    //         'id' => $validatedData['id'],
    //         'user_name' => $validatedData['user_name'],
    //         'email' => $validatedData['email'],
    //         'password' => bcrypt($validatedData['password']),


    //     ]);



    //     if ($user) {
    //         return redirect()->route('login')->with('success', 'Account created successfully');
    //     } else {
    //         return redirect()->route('create-account')->with('error', 'Failed to create account');
    //     }
    // }
    // login
    public function login(Request $request)
    {
        // Validate request data
        $credentials = $request->validate([
            'password' => ['required'],
        ]);
       
        // Attempt authentication for admin role
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = auth::user();
            session(
                [
                    'user_name' => $user->user_name,
                    'user_id' => $user->id,
                   
                ]
            );
            return redirect()->route('');
        }
       
   
        // Authentication failed
        else {
            return back()->withErrors([
                'id' => 'The provided credentials do not match our records.',
            ])->onlyInput('id');
        }
    }
    // logout

    public function logout(Request $request)
    {
        Auth::logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Redirect to the home page or any other desired page
        return redirect('/');
    }
}
