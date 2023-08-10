<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'name',
        'birthday',
        'address',
        'phone',
        'roles'
    ];
    public function role()  {
        return $this->belongsTo(Role::class);
    }
}
