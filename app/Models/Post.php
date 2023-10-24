<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function image(): HasOne
    {
        return $this->hasOne(Image::class,'posts_id');
    }
    public function auteur(): HasOne
    {
        return $this->hasOne(Auteur::class,'posts_id');
    }
}
