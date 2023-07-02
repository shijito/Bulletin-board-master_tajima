@extends('layouts.logout')

@section('content')

<!-- <div>
    <span></span>
</div> -->
<div>
    <div>
        <span>掲示板投稿一覧</span>
    </div>
    <div>
        <div><!--投稿表示-->
            <div>
                <!--foreachで投稿を繰り返す-->
            </div>
        </div>
        <div><!--右側-->
            <div><!--カテゴリーを追加-->
                <!--ボタンで新規カテゴリーURL遷移-->
                <button type="button" class="btn btn-primary" >
                    <a href="{{ route('categoryView') }}">カテゴリーを追加</a>
                </button>
            </div>
            <div><!--投稿-->
                <!--ボタンで新規投稿URL遷移-->
                <button type="button" class="btn btn-primary" >
                    <a href="{{ route('createView') }}">投稿</a>
                </button>
            </div>
            <div><!--検索系-->
                <div><!--検索-->
                        <div>
                            <!--テキストエリア-->
                            <input type="text">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                </div>
                <div><!--いいね--></div>
                <div><!--自分の投稿--></div>
                <div><!--カテゴリー-->
                    <div>
                        <span>カテゴリー</span>
                    </div>
                    <div><!--foreachでカテゴリーを繰り返す-->
                        <div></div><!--メイン-->
                        <div></div><!--サブ-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection