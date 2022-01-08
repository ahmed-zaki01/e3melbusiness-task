<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    } // end of category method

    public function setImageAttribute($image)
    {
        $image->store('courses', 'public');
        $this->attributes['image'] = $image->hashName();
    } // end of setImageAttribute method
}
