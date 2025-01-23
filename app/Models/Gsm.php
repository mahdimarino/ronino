<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gsm extends Model
{
    protected $fillable = ['value']; // Example: 180 GSM, 200 GSM

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_gsm');
    }
}
