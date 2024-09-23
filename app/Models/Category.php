<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;
 
class Category extends Model
{
    use HasFactory, SoftDeletes, HasTags;    
    protected $fillable = [
        'name', 'description' 
    ];

    public function products() : HasMany
    {
        return $this->hasMany(Product::class);   
    }
}
