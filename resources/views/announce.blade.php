@extends('layout.home')


@section('for_js')

    <script>

        function validate_required(field,alerttxt)
        {
            with (field)
            {
                if (value==null||value=="") {
                    alert(alerttxt);
                    return false
                }
                else {
                    return true
                }
            }
        }

        function validate_form(thisform)
        {
            with (thisform)
            {
                if (validate_required(name,"name must be filled out!")==false)
                {
                    name.focus();
                    return false
                }
                if (validate_required(title,"title must be filled out!")==false)
                {
                    name.focus();
                    return false
                }
                if (validate_required(content,"content must be filled out!")==false)
                {
                    name.focus();
                    return false
                }
            }
        }
    </script>



@endsection

@section('content')


    {{-- action導向controller method --}}
    <form method="post" action="announce/data_insert" onsubmit="return validate_form(this)" >

        {{ csrf_field() }}

        <div class="form-group">
            <label for="exampleFormControlInput1">留言人</label>
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">標題</label>
            <input type="text" class="form-control" name="title" placeholder="title">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">留言內容</label>
            <textarea class="form-control" name="content" rows="7" placeholder="leave some message....."></textarea>
        </div>

        <button type="submit" class="btn btn-outline-primary btn-block">發布</button>
    </form>



@endsection