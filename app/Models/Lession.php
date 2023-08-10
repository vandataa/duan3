<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameLession',
        'video',
        'description',
        'id_session',
    ];
    public function session()  {
        return $this->belongsTo(Session::class);
    }
}
