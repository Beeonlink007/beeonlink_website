<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(Request $request){

        return view('home.index');
    }

    public function about(Request $request){

        return view('frontend.about');

    }

    public function service(Request $request){

        return view('frontend.service');

    }

    public function service_details(Request $request){

        return view('frontend.single_service');

    }

    public function project(Request $request){

        return view('frontend.project');
    }


    public function project_details(Request $request){

        return view('frontend.single_project');
    }

    public function pricing(Request $request){

        return view('frontend.pricing');
    }

    public function error(Request $request){

        return view('frontend.error_404');
    }

    public function faq(Request $request){

        return view('frontend.faq');
    }

    public function coming_soon(Request $request){

        return view ('frontend.coming_soon');
    }

    public function terms_condition(Request $request){

        return view ('frontend.terms_condition');
    }

    public function privacy_policy(Request $request){

        return view ('frontend.privacy_policy');
    }

    public function blog_1(Request $request){

        return view ('frontend.blog_one');
    }

    public function blog_2(Request $request){

        return view ('frontend.blog_two');
    }

    public function blog_3(Request $request){

        return view ('frontend.single_blog');
    }

    public function contact(Request $request){

        return view ('frontend.contact');
    }
}
