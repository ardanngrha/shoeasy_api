<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
        return 'http://192.168.0.101/shoeasy_backend/public'. Storage::url($url);
    }
}
