<?php

namespace App\Http\Controllers;

use App\User;
use App\UserTweets;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'showSignInForm']]);
    }

    public function index()
    {
        return view('pages.index');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function profile()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $tweets = UserTweets::where('tweeter_id', $user_id)->orderBy('created_at', 'DESC')->get();
        return view('pages.profile')->with(['user' => $user, 'tweets' => $tweets]);
    }

    public function create()
    {
        return view('pages.create_tweet');
    }

    public function search(Request $request)
    {
        $searchUser = $request->input('search');
        if(empty($searchUser)){
            $users = [];
            return view('pages.search')->with('users', $users);
        } else{
            $users = User::where('username', 'like', $searchUser.'%')->get();
            return view('pages.search')->with('users', $users);
        }
    }

    public function profileEdit()
    {
        $user = User::find(auth()->user()->id);
        return view('profile.edit')->with('user', $user);
    }

    public function showSignInForm(){
        return redirect('/#signIn');
    }

}
