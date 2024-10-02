<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Product extends Model
{
    use HasFactory, SoftDeletes, HasTags;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'category_id', 'name', 'picture', 'summary', 'description', 'quantity','discount_type', 'discount_value', 'is_active'
    ];
    /**
     * Summary of category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);   
    }
    /**
     * Summary of favorites
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
    /**
     * Summary of scopeActive
     * @param mixed $query
     * @return mixed
     */
    public function scopeActive($query): mixed
    {
        return $query->where('is_active', 1);
    }
}
