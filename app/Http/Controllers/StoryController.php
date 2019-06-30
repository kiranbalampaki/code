<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;
use Session;
use File;
use Auth;
use App\Pet;
use App\Channel;
use App\User;
use App\Message;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $currentuserid = Auth::user()->id;
        $pets = Pet::where('user_id','=',$currentuserid)->get();
        $messages = Message::where('sender','=',$currentuserid)->
        orWhere('receiver','=',$currentuserid)->
        groupBy('channel_id')->
        orderBy('created_at','desc')->take(4)->get();

        $users = User::all();    
        return view('stories.create', compact('users', 'messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd(request()->all());
        $request->validate([
            'title'    =>  'required',
            'story'     =>  'required',
            'image'    =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/storyimages'), $new_name);

        $story = new Story();
        $story->title = $request->title;
        $story->story = $request->story;
        $story->story_image = $new_name;
        $story->user_id = $request->user()->id;

        // $story->user_id = $request->user()->id;

        $story->save();
        // Session::flast('success','Successfully done bro.');
        return redirect()->back();
        
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
}
