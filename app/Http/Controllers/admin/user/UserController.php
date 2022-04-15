<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    public function userDetails(User $user)
    {
        return view('admin.users.detiles', ['user' => $user]);
    }
    public function updateUserPage(User $user)
    {
        return view('admin.users.update', ['user' => $user]);
    }

    public function updateUser(User $user, Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        $user->update($request->all());
        return back()->with('user_update_success','user has been updated');
    }
    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with('user_deleted_success','user has been deleted');
    }
}
