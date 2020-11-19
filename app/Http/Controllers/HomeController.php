<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function showCourses()
    {
        return view('courses');
    }
    public static function showLogin()
    {
        return view('login');
    }
    public static function showHelpdesk()
    {
        return view('helpdesk');
    }
    public static function showHomepage()
    {
        return view('homepage');
    }
    public static function showSignup()
    {
        return view('signup');
    }
    public static function showCourse1()
    {
        return view('course1');
    }
    public static function showAdminlogin()
    {
        return view('adminlogin');
    }
    public static function showDoubtforum()
    {
        return view('doubtforum');
    }
}

