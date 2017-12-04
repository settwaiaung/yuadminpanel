<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
        'title', 'body', 'user_id'
    ];

    public static $rules = [
        'title' => 'required|min:4',
        'body'  => 'required'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function user() {
    	return $this->belongsTo("App\User");
    }

}
