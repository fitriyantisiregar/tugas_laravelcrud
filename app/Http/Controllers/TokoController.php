<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function show(@id) {
        $toko = toko :: findOrFail(@id);
        return view('toko.show', compact('toko'));
    }
}
