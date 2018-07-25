<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['title','body','views'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
