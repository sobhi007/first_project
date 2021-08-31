<?php

namespace App\Http\Controllers;

use App\Models\userDB;
use Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        if (auth()->check()) {
            return redirect('user/home');
        } else {
            return view('user.login');
        }
    }

    public function signup()
    {
        if (auth()->check()) {
            return redirect('user/home');
        } else {
            return view('user.sign_up');
        }
    }

    public function add_new_acount(Request $request)
    {
        $data = $request->validate([

            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|max:20',
        ]);

        $data['password'] = bcrypt($request->password);

        $op = userDB::create($data);

        if ($op) {
            
            session()->flash('success','New account created successfully !! ');
            
            return redirect('user/login');
        }else {
            session()->flash('error','something went wrong please try again !! ');
            
            return redirect('user/login');
        }
    }

    public function check(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8|max:20',
        ]);

        $remember = $request->remember ? 'true' : 'false';
        if (auth()->attempt($data, $remember)) {

            return redirect('user/home');

        }
    }



    public function index()
    {

        $users = userDB::get();
        return view('user.home', ['users' => $users]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('user/home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
