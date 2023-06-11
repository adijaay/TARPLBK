<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class narapidana extends Model
{
    use HasFactory;
    protected $table = 'narapidana';
    protected $primaryKey = 'id_narapidana';
    protected $fillable = [
        'no_sel',
        'name',
        'address',
        'phone',
    ];
}