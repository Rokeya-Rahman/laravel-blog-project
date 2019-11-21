<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use App\Category;
use Session;

class RegisterController extends Controller
{
    public function singUp() {
        return view('front-end.user.sign-up', [
            'categories'    =>  Category::where('publication_status', 1)->get()
        ]);
    }

    public function newSignUp(Request $request) {
        Visitor::saveVisitorInfo($request);

        return redirect('/');
    }

    public function visitorLogout(Request $request) {
        Session::forget('visitorId');
        Session::forget('visitorName');

        return redirect('/');
    }

    public function visitorLogin() {
        return view('front-end.user.login');
    }

    public function newLogin(Request $request) {
        $visitor = Visitor::where('email_address', $request->email_address)->first();

        if ($visitor) {
            if (password_verify($request->password, $visitor->password)) {

                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->first_name.' '.$visitor->last_name);

                return redirect('/');

            } else {
                return redirect('/visitor-login')->with('massage', 'Password not valid');
            }
        } else {
            return redirect('/visitor-login')->with('massage', 'Email address not valid');
        }
    }



    /******** this is raw AJAX ********/


//    public function emailCheck($email) {
//        $visitor = Visitor::where('email_address', $email)->first();
//        if ($visitor) {
//            echo 'Email address exist';
//        } else {
//            echo 'Email address available';
//        }
//    }



    /******** this is jquery AJAX ********/

    public function emailCheck($email) {
        $visitor = Visitor::where('email_address', $email)->first();
        if ($visitor) {
            return json_encode('Email address exist');
        } else {
            return json_encode('Email address available');
        }
    }
}
