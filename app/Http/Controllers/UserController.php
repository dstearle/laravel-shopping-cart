<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getSignup() {

        return view('user.signup');

    }

    //
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
}
