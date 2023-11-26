<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        return "ini adalah halaman user method index";
    }
    public function create()
    {
        return "ini adalah halaman create";
    }
    public function read()
    {
        return "ini adalah halaman read";
    }
    public function update()
    {
        return "ini adalah halaman update";
    }
    public function delete()
    {
        return "ini adalah halaman delete";
    }
}
