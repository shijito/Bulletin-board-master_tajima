@extends('layouts.logout')

@section('content')

<div>
    <div>
        <span>カテゴリー追加画面</span>
    </div>
    <div>
        <div>
            <div>
                <span>新規メインカテゴリー</span>
            </div>
            <div>
                <!--テキストエリア-->
                <input type="text">
                <input type="submit" class="btn btn-primary" value="登録">
            </div>
        </div>
        <div>
            <div>
                <div>
                    <span>メインカテゴリー</span>
                </div>
                <div>
                    <!--セレクト-->
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