<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'product_code', 'category_id', 'color_id', 'partwear_id', 'quantity'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function partwear()
    {
        return $this->belongsTo(Partwear::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size');
    }

    public function gsms()
    {
        return $this->belongsToMany(Gsm::class, 'product_gsm');
    }
}
