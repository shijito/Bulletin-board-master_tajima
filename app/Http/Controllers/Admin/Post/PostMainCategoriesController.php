<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts\PostMainCategory;//モデルをつなげる

class PostMainCategoriesController extends Controller
{
    //
    public function maincategory(Request $request){
        PostMainCategory::create(['main_category' => $request->main_category_name]);
        return redirect()->route('categoryView');
    }
}
