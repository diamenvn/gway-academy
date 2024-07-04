<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class ContactusController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('site.contact-us.index');
    }

    public function show($id): View
    {
        return view('site.contact-us.detail')->with('id', $id);
    }
}