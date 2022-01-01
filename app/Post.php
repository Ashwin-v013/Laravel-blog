<?php


namespace App;


use Overtrue\LaravelFollow\Traits\CanLike;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    // use \Conner\Likeable\Likeable;


    protected $fillable = ['post_title'];
}