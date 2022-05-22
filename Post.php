<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'register';

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'angkatan',
        'departemen1',
        'alasan1',
        'departemen2',
        'alasan2',
        'pindah'
    ];

}
