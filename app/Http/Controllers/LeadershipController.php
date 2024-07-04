<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class LeadershipController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('site.leadership.index');
    }

    public function show($id): View
    {
        return view('site.leadership.detail')->with('id', $id);
    }
}