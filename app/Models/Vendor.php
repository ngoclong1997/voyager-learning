<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;
    protected $table = "vendors";
    protected $fillable = ["name", "country_id", "created_at", "updated_at", "deleted_at"];

    public function country() {
        return $this->belongsTo('App\Models\Country');
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
