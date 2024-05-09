<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel_1',
        'tel_2',
        'tel_3',
        'address',
        'building',
        'detail',
    ];

    public function scopeCateorySearch($query, $category_id)
    {
        if (!empty($category_id))
        {
            $query->where('category_id, $cateogry_id');
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if(!empty($keyword))
        {
            $query->where('content', 'like', '%' . $keyword . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
