@extends('layout.management')



@section('content')


    <fieldset>
        <legend>留言管理</legend>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">title</th>
                <th scope="col">time</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($messageObj as $obj)
                <tr>
                    <th scope="row">{{$obj->id}}</th>
                    <td>{{$obj->name}}</td>
                    <td>{{$obj->title}}</td>
                    <td>{{$obj->created_time}}</td>
                    <td>
                        <button type="button" class="btn btn-outline-success"><a href="{{route('admin.edit', $obj->id)}}">Update</a></button>
                        <button type="button" class="btn btn-outline-danger"><a href="{{route('admin.confirm_delete', $obj->id)}}">Delete</a></button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <!-- page -->
        <nav class="mt-5" aria-label="Page navigation example ">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </fieldset>











@endsection