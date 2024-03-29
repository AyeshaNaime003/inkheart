<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\Admin;
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
        // CHECK FOR ADMIN
        // check if email is admin's
        $admin = Admin::select("admin.*")->where('email', '=', $request['email'])->get();
        if(!$admin->isEmpty()){
            $admin = $admin[0];
            // check password
            if($admin['password']==$request['password']){
                $request->session()->regenerate();
                session(['admin' => $admin]);
                return redirect(url('/admin'));
            }else{
                return back()->withErrors([
                    'password' => 'Wrong Password',
                ])->onlyInput('password');   
            }
        }
        else{
            if (Auth::attempt($credentials)) {

                // generating and storing values in session
                $request->session()->regenerate();
                $check_email = request('email');
                session(['email' => $check_email]);
    
                // adding cart for authorized user
                $cart = array();
                session(['cart' => $cart]);
                // $user = User::where('email', '=', $check_email)->get();
    
                return redirect()->route('homepage');
            }
     
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
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
