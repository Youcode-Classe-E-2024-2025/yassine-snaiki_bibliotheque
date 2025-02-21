<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','description', 'author','user_id'];
    protected $keyType = 'string'; 
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
