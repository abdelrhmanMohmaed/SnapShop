<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Product extends Model
{
    use HasFactory, SoftDeletes, HasTags; 
    protected $fillable = [
        'category_id', 'name', 'picture', 'summary', 'description', 'unit', 'price', 'quantity', 'is_active'
    ];
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeWithActiveDiscounts($query)
    {
        return $query->where('is_active', 1)
            ->whereHas('discount', function ($q) {
                $q->where('start_date', '<=', now())
                    ->where('end_date', '>=', now());
            });
    }
    public function scopeWithOutActiveDiscounts($query)
    {
        return $query->where('is_active', 1)
            ->whereDoesntHave('discount', function ($q) {
                $q->where('start_date', '<=', now())
                ->where('end_date', '>=', now());
            });
    }

    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class);
    }
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);   
    }
}
