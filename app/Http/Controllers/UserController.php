<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getHeadPage()
    {
        return view('head');
    }

    public function getAdminPage()
    {
        $users = User::all();
        return view('view_all_users', ['users' => $users]);
    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_head']) {
            $user->roles()->attach(Role::where('name', 'Head')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}