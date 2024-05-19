<?php
namespace CodeWavePos\Config\Http\Controllers;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function dashboard()
    {
        return view("config::dashboard");
    }
}