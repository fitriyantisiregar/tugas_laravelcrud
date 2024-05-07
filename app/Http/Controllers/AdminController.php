<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController

class AdminController extends Controller
{
    public function show(@id) {
        $user = User :: findOrFail(@id);
        return view('admin.show', compact('user'));
    }
}
