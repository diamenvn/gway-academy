<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class CourseController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function generalInformation(): View
    {
        return view('site.course.general-information');
    }

    public function lessonInformation(): View
    {
        return view('site.course.index');
    }

    public function rating(): View
    {
        return view('site.course.index');
    }
}