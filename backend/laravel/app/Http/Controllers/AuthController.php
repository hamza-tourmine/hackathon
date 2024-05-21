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
            'id' => ['required'],
            'password' => ['required'],
        ]);

        // Remove extra spaces from 'id' key to ensure consistency
        $credentials['id'] = trim($credentials['id']);

        // Attempt authentication for admin role
        if (Auth::attempt(['id' => $credentials['id'], 'password' => $credentials['password'], 'role' => 'gerantCentral'])) {
            $request->session()->regenerate();
            $user = auth::user();
            session(
                [
                    'user_name' => $user->user_name,
                    'user_id' => $user->id,
                    'establishment_id' => $user->establishment_id ,
                ]
            );
            return redirect()->route('dashboardAdmin');
        }
       
        elseif (Auth::attempt(['id' => $credentials['id'], 'password' => $credentials['password'], 'role' => 'gerantrgional'])) {
            $user = Auth::user();
            if ($user->status == 'active') {
                $request->session()->regenerate();
                // store id in session
                session(['user_id' => $user->id, 'establishment_id' => $user->establishment_id]);

                return redirect()->route('dashboard_formateur');
            } else {
                return redirect()->back()->withErrors(['errors' => 'Votre compte est suspendu, veuillez contacter le directeur']);
            }
        }

        elseif (Auth::attempt(['id' => $credentials['id'], 'password' => $credentials['password'], 'role' => 'gerantlocal'])) {
            $user = Auth::user();
            if ($user->status == 'active') {
                $request->session()->regenerate();
                // store id in session
                session(['user_id' => $user->id, 'establishment_id' => $user->establishment_id]);

                return redirect()->route('dashboard_formateur');
            } else {
                return redirect()->back()->withErrors(['errors' => 'Votre compte est suspendu, veuillez contacter le directeur']);
            }
        }

        elseif (Auth::attempt(['id' => $credentials['id'], 'password' => $credentials['password'], 'role' => 'intervenant'])) {
            $user = Auth::user();
            if ($user->status == 'active') {
                $request->session()->regenerate();
                // store id in session
                session(['user_id' => $user->id, 'establishment_id' => $user->establishment_id]);

                return redirect()->route('dashboard_formateur');
            } else {
                return redirect()->back()->withErrors(['errors' => 'Votre compte est suspendu, veuillez contacter le directeur']);
            }
        }

        elseif (Auth::attempt(['id' => $credentials['id'], 'password' => $credentials['password'], 'role' => 'entreprise'])) {
            $user = Auth::user();
            if ($user->status == 'active') {
                $request->session()->regenerate();
                // store id in session
                session(['user_id' => $user->id, 'establishment_id' => $user->establishment_id]);

                return redirect()->route('dashboard_formateur');
            } else {
                return redirect()->back()->withErrors(['errors' => 'Votre compte est suspendu, veuillez contacter le directeur']);
            }
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
