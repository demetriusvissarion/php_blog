<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // To enable migrate mass assignment:
    // protected $fileable = ['title', 'excerpt', 'body']; // declare params the user is allowed to edit
    protected $guarded = [];  // opposite of $fileable, here you declare the params the user is not allowed to edit, if empty then mass assignment is enabled for all fields

    // Eloquent relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
