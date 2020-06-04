<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Auth;

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

        // Redirect to product page
        return redirect()->route('product.index');

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

            // Directs user to profile if credentials are correct
            return redirect()->route('user.profile');

        }

        // Directs user back if credentials are wrong
        return redirect()->back();

    }

}
