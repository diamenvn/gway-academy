<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class AppController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('site.home.index');
    }
}