<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthManager;
use App\User;
use Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate(request(),[
            'register_firstname' => 'required',
            'register_lastname' => 'required',
            'register_email' => 'required|email',
            'register_gender' => 'required',
            'register_username' => 'required',
            'register_password' => 'required|confirmed'
           
            ]);
    
        $user = User::create([
            'first_name' => request('register_firstname'),
            'last_name' => request('register_lastname'),
            'email' => request('register_email'),
            'gender' => request('register_gender'),
            'user_name' => request('register_username'),
            'user_password' => bcrypt(request('register_password'))

            ]);

            return view('home_template');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // REGISTER USER //

    public function registerUser(Request $request){

        $new_user = new User();
        $new_user->first_name=$request->register_firstname;
        $new_user->last_name=$request->register_lastname;
        $new_user->email=$request->register_email;
        $new_user->gender=$request->register_gender;
        $new_user->user_name=$request->register_username;
        $new_user->user_password=Hash::make($request->register_password);

        $new_user->save();
       
        // auth()->login($new_user);

        return redirect('/');

    }

    public function editProfile(){
        $user = Auth::user();
        $user_firstname = $user->first_name;
        $user_lastname = $user->last_name;
        $user_email = $user->email;
        $user_username = $user->user_name;
        $user_password = $user->user_password;

        return view('edit_profile', compact('user', 'user_firstname', 'user_lastname', 'user_email', 'user_username', 'user_password'));

    }


    public function saveEditProfile(Request $request){
        $user = Auth::user();
        $user->first_name = $request->input('edit_firstname');
        $user->last_name = $request->input('edit_lastname');
        $user->email = $request->input('edit_email');
        $user->user_name = $request->input('edit_username');
        $user->user_password = $request->input('edit_password');
        $user->save();

        return redirect('/');

    }

}
