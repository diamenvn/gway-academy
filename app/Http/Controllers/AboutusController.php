<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class AboutusController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('site.about-us.index');
    }

    public function show($id): View
    {
        return view('site.about-us.detail')->with('id', $id);
    }
}