<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Facades\Voyager;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['parent_id', 'name', 'slug', 'created_at', 'updated_at', 'deleted_at'];

    public function products() {
        return $this->hasMany('App\Models\Product');
    }

//    public function posts()
//    {
//        return $this->hasMany(Voyager::modelClass('Post'))
//            ->published()
//            ->orderBy('created_at', 'DESC');
//    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
