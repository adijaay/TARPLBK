<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asprak extends Model
{
    use HasFactory;
    protected $table = 'asprak';
    protected $primaryKey = 'id_asprak';
    protected $fillable = [
        'nama',
        'norek',
        'email',
        'modul'
    ];
}