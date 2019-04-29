<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_name', 'description', 'event_sdate', 'event_edate', 'event_stime', 'event_etime'];
}
