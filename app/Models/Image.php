<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable = [
        'image_path', // Add this line
        'product_id', // Add this if you want to allow mass assignment for product_id as well
    ];
    public function getUrlAttribute()
    {
        // Assuming images are stored in the 'storage/app/public/images' directory
        return asset('storage/images/' . basename($this->image_path));
    }
}
