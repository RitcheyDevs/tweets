<?php

namespace App\Http\Controllers;

use App\UserTweets;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Crypt;
use phpDocumentor\Reflection\Types\Integer;

class UsersController extends Controller
{


    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function edit(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->name = $request->input('fullname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');

        $user->save();

        return redirect('/profile')->with('success', 'Profile Updated');
    }

    public function viewUser($id)
    {
//        Todo: Throw 404 if not found
        $user = User::find(base64_decode($id));
        $tweets = UserTweets::where('tweeter_id', base64_decode($id))->orderBy('created_at', 'DESC')->get();

        if (empty($user)) {
            abort(404, 'User not found');
        } else {
            return view('profile.view')->with(['user' => $user, 'tweets' => $tweets]);
        }
    }
}
