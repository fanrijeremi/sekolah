<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
}


public function submit(Request $request) {
    // Proses data form
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

    // Lakukan sesuatu dengan data, seperti menyimpan ke database
    return back()->with('success', 'Data berhasil disubmit');
}
}