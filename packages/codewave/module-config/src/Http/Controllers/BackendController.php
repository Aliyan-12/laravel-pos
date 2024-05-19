<?php
namespace CodeWavePos\Config\Http\Controllers;
use Illuminate\Routing\Controller;

class BackendController extends Controller
{
    public function loginForm()
    {
        return view("config::auth.login");
    }
}