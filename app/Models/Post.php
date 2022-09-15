<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'content',
        'user_id',
        'category_id'
    ];

    public function Categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function User()
    {
        return $this->belongsToMay(User::class, 'user_id');
    }
}
