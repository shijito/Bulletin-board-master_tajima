@extends('layouts.logout')

@section('content')

<div>
    <form>
        <div>
            <span>投稿編集画面</span>
        </div>
        <div>
            <div>
                <span>サブカテゴリー</span>
            </div>
            <div>
                <!--セレクト-->
            </div>
        </div>
        <div>
            <div>
                <span>タイトル</span>
            </div>
            <div>
                <!--テキストエリア-->
            </div>
        </div>
        <div>
            <div>
                <span>投稿内容</span>
            </div>
            <div>
                <!--テキストエリア-->
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="更新">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="削除">
        </div>
        {{ csrf_field() }}
    </form>
</div>

@endsection