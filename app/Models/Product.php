<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'price',
        // 'phone',
        // 'address',
        'stock',
        'description',
        'category',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
    public function pemesananDetails()
    {
        return $this->belongsTo(PemesananDetail::class);
    }
}
