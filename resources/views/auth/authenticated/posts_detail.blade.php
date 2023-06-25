@extends('layouts.logout')

@section('content')

<div>
    <div>
        <span>掲示板詳細画面</span>
    </div>
    <div>
        <div>
            <!--選択した投稿を表示-->
        </div>
        <div>
            <!--カテゴリー-->
        </div>
        <div>
            <span></span><!--コメント数ー-->
            <span></span><!--いいね数-->
        </div>
    </div>
    <div>
        <div>
            <!--コメント投稿-->
        </div>
        <div>
            <!--テキストエリア-->
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="コメント">
        </div>
    </div>
</div>

@endsection