<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'products_id',
        'url'
    ];

    // return real url
    public function getUrlAttribute($url)
    {
        // Your IPv4 Address
        return 'http://20.20.23.170/shoeasy_backend/public' . Storage::url($url);
        // return 'http://192.168.0.101/shoeasy_backend/public' . Storage::url($url);
    }
}
