<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'description', 
        'featured_image'
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getContent()
    {
        return  $this->description;
    }

    public function getUserId()
    {
        return  $this->user_id;
    }


    
}
