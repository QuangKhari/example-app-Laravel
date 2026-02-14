<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'parent_id',
        'is_active',
        'is_delete'
    ];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Quan hệ con
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Scope lọc danh mục đang hoạt động
    public function scopeActive($query)
    {
        return $query->where('is_active', 1)
                     ->where('is_delete', 0);
    }
}
