<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_cyril',
        'title_ru',
        'title_en',
        'video_link'
    ];
    public function category(){
        $this->belongsTo(Videocat::class,'videocat_id');
    }
}
