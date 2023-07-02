<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostSubCategory extends Model
{
    protected $table = 'post_sub_categories';

    protected $fillable = [
        'post_main_category_id',
        'sub_category',
    ];

    public function mainCategory(){
        return $this->belongsTo('App\Models\Posts\PostMainCategory');// リレーションの定義、多対単（サブ対メイン）
    }
}
