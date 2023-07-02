<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostMainCategory extends Model
{
    protected $table = 'post_main_categories';

    protected $fillable = [
        'main_category',
    ];

    public function subCategories(){
        return $this->hasMany('App\Models\Posts\PostSubCategory');// リレーションの定義、単対多（メイン対サブ）
    }
}
