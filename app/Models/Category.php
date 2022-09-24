<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * @return bool
     */
    public function products()
    {
        return $this->hasMany(product::class);
    }

    public function restaurants()
    {
        return $this->belongsTo(restaurant::class);
    }

    public function parent()
    {
        return $this->belongTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->HasMany(Category::class, 'parent_id');
    }

}
