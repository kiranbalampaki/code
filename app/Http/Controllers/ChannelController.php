<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Channel;
use App\Message;
use App\User;

class ChannelController extends Controller
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
        // dd(request()->all());
        $request->validate([
            'first_user'    =>  'required',
            'second_user'     =>  'required',
            'pet_id'    =>  'required'
        ]);

        // if(Channel::whereColumn([
        //                         ['first_user', $request->first_user],
        //                         ['second_user', $request->second_user]
        //                     ])->orWhereColumn([
        //                         ['first_user', $request->second_user],
        //                         ['second_user', $request->first_user]
        //                     ])->doesntExist()){

        $channel = new Channel();
        $channel->first_user = $request->first_user;
        $channel->second_user = $request->second_user;
        $channel->pet_id = $request->pet_id;

        $channel->save();
        // }
        // else{
        //     $channel = Channel::whereColumn([
        //         ['first_user', '=', $request->first_user],
        //         ['second_user', '=', $request->second_user]
        //     ])->orWhereColumn([
        //         ['first_user', '=', $request->second_user],
        //         ['second_user', '=', $request->first_user]
        //     ])->get();
        // }
        
        $currentuserid = Auth::user()->id;
        $channels = Channel::where('first_user','=',$currentuserid)->
                            orWhere('second_user','=',$currentuserid)->
                            get();
        $messages= Message::where('channel_id','=',$channel->id)->orderBy('created_at')->get();
        $users = User::all();
        return view('messages.show', compact('channel','channels','messages','users'));
        
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
