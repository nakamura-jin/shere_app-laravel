<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'post' => 'max:120'
    );

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function comment() {
        return $this->hasMany('App\Models\Comment');
    }

    public function like()
    {
        return $this->hasMany('App\Models\Like');
    }

}
