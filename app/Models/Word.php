<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [

        'title_uz',
        'title_cyril',
        'title_ru',
        'title_en'
    ];
}
