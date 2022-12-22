<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
            'email' => 'required|email',
            'password' => 'required'
        ]);
 
        if (Auth::attempt($credentials)) {

            // generating and storing values in session
            $request->session()->regenerate();
            $check_email = request('email');
            session(['email' => $check_email]);

            // getting user id to retrieve name and email
            $id = Auth::id();
            $name = User::select('first_name')->where('user_id', '=', $id)->get();
            $user = User::where('email', '=', $check_email)->get();

            $url = "/$name";
            return redirect($url);
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle user log out.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request) {
        Auth::logout();
        session()->flush();
        return redirect()->route('homepage');
    }
}
