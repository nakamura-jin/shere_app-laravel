<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'post_id' => 'required'
    );


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}

