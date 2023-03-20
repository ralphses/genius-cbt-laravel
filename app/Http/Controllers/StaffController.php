<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        return view('backend.staff.all', ['staffs' => User::all()]);
    }
}
