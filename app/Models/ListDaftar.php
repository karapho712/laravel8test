<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListDaftar extends Model
{
    use HasFactory;

    protected $table = 'listdaftar';

    protected $fillable = [
        'namapanjang',
        'namadepan',
        'namabelakang',
    ];
}
