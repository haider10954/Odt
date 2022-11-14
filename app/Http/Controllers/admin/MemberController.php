<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member_listing()
    {
        $user = User::paginate(5);
        return view('admin_dashboard.member_management.member_management', compact('user'));
    }
    public function delete_user(Request $request)
    {

        $user = User::where('id', $request['id'])->delete();
        if ($user) {
            return redirect()->back()->with('removed', __('translation.User has been removed successfully '));
        } else {
            return redirect()->back()->with('error', __('translation.Something went wrong Please try again.'));
        }
    }
}
