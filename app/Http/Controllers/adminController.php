<?php

namespace App\Http\Controllers;

use App\Models\adminDB;
use App\Models\userDB;
use Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function login()
    {
        if (!Auth::guard('admin_auth')->check()) {
            return view('admin.login');
        } else {

            return redirect('admin/home');
        }

    }

    public function check(Request $request)
    {

        $data = $request->validate([

            'mobile' => 'required',
            'password' => 'required|min:8|max:20',
        ]);

        $remember_me = $request->rem ? 'True' : 'false';
        if (Auth::guard('admin_auth')->attempt($data, $remember_me)) {

            return redirect('admin/home');
        } else {
            session()->flash('error', 'Invalied login !');
            return redirect('admin/login');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guard('admin_auth')->check()) {

            $admins = adminDB::get();
            $users = userDB::get();
            return view('admin.home', ['admins' => $admins , 'users' => $users ]);
        } else {

            return redirect('admin/login');
        }
    }

    public function logout()
    {
        Auth::guard('admin_auth')->logout();
        return redirect('admin/login');
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
