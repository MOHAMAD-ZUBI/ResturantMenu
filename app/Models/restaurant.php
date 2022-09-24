<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
