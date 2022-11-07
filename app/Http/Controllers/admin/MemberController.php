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
        return view('admin_dashboard.member_management.member_management' , compact('user'));
    }
}
