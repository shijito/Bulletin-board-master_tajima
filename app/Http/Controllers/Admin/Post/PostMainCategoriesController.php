<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts\PostMainCategory;//モデルをつなげる
use App\Models\Posts\PostSubCategory;

class PostMainCategoriesController extends Controller
{
    //
    public function maincategorycreate(Request $request){
        PostMainCategory::create(['main_category' => $request->main_category_name]);
        return redirect()->route('categoryView');
    }
    
}
