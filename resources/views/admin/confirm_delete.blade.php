@extends('layout.management')



@section('content')


    <legend>確認刪除留言資料</legend>
    {{-- action導向controller method --}}
    <form method="post" action="../delete/{{$message->id}}">

        {{ csrf_field() }}
        {{--for update--}}
        <input type="hidden" name="_method" value="DELETE">

        <div class="form-group">
            <label for="exampleFormControlInput1">留言人</label>
            <input type="text" class="form-control" name="name" placeholder="name" value="{{$message->name}}" readonly="readonly">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">標題</label>
            <input type="text" class="form-control" name="title" placeholder="title" value="{{$message->title}}" readonly="readonly">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">留言內容</label>
            <textarea class="form-control" id="myTextarea" name="content" rows="7" readonly="readonly">{{$message->content}}</textarea>
        </div>

        <button type="submit" class="btn btn-outline-primary btn-block">刪除</button>
    </form>


@endsection

