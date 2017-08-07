<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Articles;
use App\Tags;

class LogInController extends Controller
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
        // Store data from $request to these variables
        $user_name = $request->login_username;
        $user_password = $request->login_password;

        // User validation
        if (Auth::attempt(['user_name' => request($user_name),'user_password' => bcrypt(request($user_password))], true)) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        // Searches the user records
        $current_user = User::where('user_name', $user_name)->first();

        // LogIn Session
        auth()->login($current_user, true);
        return redirect('/');
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

    /* LOG OUT */

    public function destroy()
    {      
        auth()->logout();
        return redirect('/');
    }
    
}
