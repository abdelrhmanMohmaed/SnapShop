<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasTags;    
    protected $fillable = [
        'department_id', 'name', 'picture', 'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

}
