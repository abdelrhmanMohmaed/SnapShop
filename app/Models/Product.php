<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Product extends Model
{
    use HasFactory, SoftDeletes, HasTags; 
    protected $fillable = [
        'category_id', 'text', 'picture', 'summary', 'description', 'quantity','discount_type', 'discount_value' 
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);   
    }
}
