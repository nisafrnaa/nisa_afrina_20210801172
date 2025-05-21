<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murids';
    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'jurusan',
        
    ];

}
