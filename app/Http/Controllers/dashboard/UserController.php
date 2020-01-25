<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
				$users=User::all();
				return view('dashboard.volunteers.index',compact('users'));
    }


    public function create()
    {
				return view('dashboard.volunteers.create');
    }

    public function store(Request $request)
    {
				$request->validate([
						'name' => ['required', 'string'],
						'email' => ['required', 'email', 'unique:users'],
						'password' => 'required',
				]);
				$data=$request->except('password');
				$data['password']=bcrypt($request->password);
		  	User::create($data);

				return redirect()->route('dashboard.users.index');
    }


    public function edit(User $user)
    {

				return view('dashboard.volunteers.edit',compact('user'));
    }


    public function update(Request $request, User $user)
    {
				$request->validate([
						'name' => ['required', 'string'],
				]);
				$user->update($request->all());
				return redirect()->route('dashboard.users.index');
    }


    public function destroy(User $user)
    {
				$user->delete();
				return redirect()->route('dashboard.users.index');
    }
}
