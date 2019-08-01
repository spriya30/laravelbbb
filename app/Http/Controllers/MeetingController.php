<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;
use App\User;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
	public function create()
	{	
		$users = User::all();
		return view('meeting.create',compact('users'));
	}

    public function store(Request $request)	
	{
		// Meeting::create($request->all());
		$meeting_data = $request->all();
		$meeting_data['meetingID'] = '12345';
		$meeting = Meeting::create($meeting_data);
		return redirect('/meeting/list')->with('message','Meeting created successfully');		
	}

	public function listMeeting()
	{
		$id = Auth::id();
		$user = User::find($id);
		$meetingsList = Meeting::all();		
		return view('meeting.list_meeting',compact('meetingsList', 'user'));
	}
}
