<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'nameSession',
        'session',
        'lession',
        'teacher_id',
        'role_session',
        'cost',
        'titleimage'
    ];
    public function teacher()  {
        return $this->belongsTo(Teacher::class);
    }

}
