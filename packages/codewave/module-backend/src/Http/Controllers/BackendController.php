<?php
namespace CodeWave\Backend\Http\Controllers;
use Illuminate\Routing\Controller;

class BackendController extends Controller
{
    public function index()
    {
        return view("backend::auth.login");
    }
}