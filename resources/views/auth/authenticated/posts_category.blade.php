@extends('layouts.logout')

@section('content')

<div>
    <div>
        <span>カテゴリー追加画面</span>
    </div>
    <div>
        <div><!--メインカテゴリー設定-->
            <div>
                <span>新規メインカテゴリー</span>
            </div>
            <div class="">
                <!--テキストエリア-->
                <input type="text" name="main_category_name" form="mainCategoryRequest">
                <input type="submit" class="btn btn-primary" value="登録" form="mainCategoryRequest">
            </div>
        </div>
        <div><!--サブカテゴリー設定-->
            <div>
                <div>
                    <span>メインカテゴリー</span>
                </div>
                <div>
                    <select>
                        <option selected disabled>----</option>
                        @foreach($post_main_categories as $main_category)
                        <option value="{{ $main_category->id }}" name="main_category_id">
                            {{ $main_category->main_category }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <span>新規サブカテゴリー</span>
                </div>
                <div>
                    <!--テキストエリア-->
                    <input type="text">
                    <input type="submit" class="btn btn-primary" value="登録">
                </div>
            </div>
        </div>
        <form action="{{ route('maincategory_create') }}" method="post" id="mainCategoryRequest">{{ csrf_field() }}
        </form>
        <form action="/" method="post" id="subCategoryRequest">{{ csrf_field() }}
        </form>
    </div>
    <div>
        <div>
            <span>カテゴリー一覧</span>
        </div>
        <div><!--foreachでカテゴリーを繰り返す-->
            <div></div><!--メイン-->
            <div></div><!--サブ-->
            <div>
                <input type="submit" class="btn btn-primary" value="削除">
            </div>
        </div>
    </div>
</div>

@endsection