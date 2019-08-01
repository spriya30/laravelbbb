<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'meetingName',
        'duration',
        'meeting_subject',
        'attendee',    	
    ];
}
