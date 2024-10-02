<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;
 
class Department extends Model
{
    use HasFactory, SoftDeletes, HasTags;    
    protected $fillable = [
        'name', 'picture', 'is_active'
    ];

    public function categories() : HasMany
    {
        return $this->hasMany(Category::class);   
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
