<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id', 'category_id'
    ];

    public static $rules = [
        'title' => 'required|min:4',
        'body'  => 'required'
    ];

    public function user() {
    	return $this->belongsTo("App\User");
    }

    public function category() {
    	return $this->hasOne('App\Category');
    }
}
