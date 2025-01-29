<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'product_code', 'category_id','gsm_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_details')->withPivot(['size_id', 'quantity','price']);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_details')->withPivot(['color_id', 'quantity','price']);
    }

    public function gsm()
    {
        return $this->belongsTo(Gsm::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
