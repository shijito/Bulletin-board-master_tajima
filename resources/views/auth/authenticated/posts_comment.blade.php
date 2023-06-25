@extends('layouts.logout')

@section('content')

<div>
    <form>
        <div>
            <span>コメント編集画面</span>
        </div>
        <div>
            <div>
                <span>コメント</span>
            </div>
            <div>
                <!--テキストエリア-->
                <input type="text">
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