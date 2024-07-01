<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class PostController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('site.post.index');
    }

    public function show($id): View
    {
        return view('site.post.detail')->with('id', $id);
    }
}