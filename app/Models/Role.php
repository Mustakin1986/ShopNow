<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function User(){
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
