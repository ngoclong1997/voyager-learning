<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Country extends Model
{
    use SoftDeletes;
    protected $table = "countries";
    protected $fillable = ['country_code', 'country_name', 'code', 'created_at', 'updated_at', 'deleted_at'];

    public function vendors() {
        return $this->hasMany('App\Models\Vendor');
    }
}
