<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validating data on server side
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:8',
                'password_confirmation' => 'required|min:8',
                'checkbox' => 'present'
            ]
        );

        try {
            // storing data to the database using object of User Model
            $user = new User;
            $user->first_name = request('name');
            $user->last_name = request('name');
            $user->email = request('email');
            $user->password = Hash::make(request('password'));
            $user->save();

        } catch(Exception $ex){
            return back()->withError($ex->getMessage())->withInput();
        }
        return redirect()->route('login')->withSuccess("Sign Up successful!");
    }

    /**
     * Show form for updating password
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showChangePassword()
    {
        return view('/change-password');
    }

    /**
     * Update the password.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {   
        $check = $request->validate(
            [
                'prev_password' => 'required|min:8',
                'new_password' => 'required|min:8',
                'password_confirmation' => 'required|min:8|same:new_password'
            ]
        );
        $email = session()->get('email');
        $user = User::select('users.password')->where('email', '=', $email)->get();

        if (Hash::check($request['prev_password'], $user[0]['password'])){
            $user = User::where('email', '=', $email)->update(['password' => Hash::make($request['new_password'])]);
            session()->flash('pswd_msg', 'Password changed successfully!');
            return redirect()->route('homepage')->with('success', 'Password changed successfully!');
        }
        else {
            session()->flash('pswd_msg', 'Please try again!');
            return redirect()->back();
        }
    }
}
