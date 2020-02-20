<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = "products";
    protected $fillable = ['name', 'price', 'release_year', 'vendor_id', 'category_id', 'slug', 'created_at', 'updated_at', 'deleted_at'];

    public function vendor() {
        return $this->belongsTo('App\Models\Vendor');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
