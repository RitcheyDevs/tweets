<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTweets extends Model
{
//    Table
    protected $table = 'user_tweets';
//    Primary Key
    public $primarykey = 'id';
//    Timestamps
    public $timestamps = true;
}
