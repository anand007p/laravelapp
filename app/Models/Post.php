<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'postid'; // if your PK is named `postid`

    public $timestamps = false; // since you're using `createdate` instead of `created_at`

    protected $fillable = ['title', 'description', 'userid', 'createdate'];
}
