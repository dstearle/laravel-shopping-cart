<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Auth;
use Session;

class UserController extends Controller
{
    // Sign Up Controls
    
    public function getSignup() {

        return view('user.signup');

    }

    public function postSignup(Request $request) {

        // Validation for creating a user
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        // User object to be saved
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        // Saves user to database
        $user->save();

        // Logs the user in once they have signed up
        Auth::login($user);

        // Redirect to user chosen url
        if(Session::has('oldUrl')) {

            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);

        }

        // Redirect new user to their profile
        return redirect()->route('user.profile');

    }

    // Sign In Controls

    public function getSignin() {

        return view('user.signin');

    }

    public function postSignin(Request $request) {

        // Validation for signing in
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        // Checks if credentials for signing in are correct
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

            // Redirect to user chosen url
            if(Session::has('oldUrl')) {

                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);

            }

            // Directs user to profile if credentials are correct
            return redirect()->route('user.profile');

        }

        // Directs user back if credentials are wrong
        return redirect()->back();

    }

    // User Profile Controls

    public function getProfile() {

        return view('user.profile');

    }

    public function getLogout() {

        // Logs the user out
        Auth::logout();

        // Directs user back to landing page
        return redirect()->back();

    }

}
