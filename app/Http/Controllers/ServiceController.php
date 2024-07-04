<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class ServiceController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('site.service.index');
    }

    public function show($id): View
    {
        return view('site.service.detail')->with('id', $id);
    }
}