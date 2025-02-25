<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;


    protected $table = 'application';

    protected $fillable = [
        'job_id',
        'user_id',
        'name',
        'email',
        'phone_number',
        'gender',
        'experince',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
