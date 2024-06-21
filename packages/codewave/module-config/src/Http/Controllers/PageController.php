<?php
namespace CodeWavePos\Config\Http\Controllers;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view("config::pages.home");
    }

    public function settings()
    {
        return view("config::pages.settings");
    }
}