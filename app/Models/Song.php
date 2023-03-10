<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_song';
    protected$fillable = ['title', 'artist', 'genre', 'url', 'image', 'id_user'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
