<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'isactive',
    ];
    protected $hidden = [
        'password'
    ];

    protected function casts(): array
    {
        return [
            'id' => 'string',  // 👈 This might cause issues if id is actually UUID
            'password' => 'hashed',
            'isactive' => 'boolean',
        ];
    }
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
