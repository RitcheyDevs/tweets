<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\UserTweets;

class TweetsController extends Controller
{
    /**
     * TweetsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = UserTweets::orderBy('created_at', 'desc')->get();
        $users = [];
        foreach ($tweets as $tweet){
            $user = User::find($tweet->tweeter_id);
            array_push($users, $user);
        }
        return view('pages.home')->with(['users' => $users, 'tweets' => $tweets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'tweet' => 'required'
        ]);

        $tweet = new UserTweets;
        $tweet->tweeter_id = auth()->user()->id;
        $tweet->tweet_content = $request->input('tweet');
        $tweet->likes = 0;
        $tweet->save();

        return redirect('/home')->with('success', 'Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function like(Request $request){
        $tweet_id = $request->input('id');
        $tweet = UserTweets::find($tweet_id);
        $newTweet =  $tweet->likes + 1;
        $tweet->likes = $tweet->likes + 1;
        $tweet->save();
        return $newTweet;
    }

}
