<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>



    <style>
        .mt-10 {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<header>

    <div class="container mt-2">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">留言板</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">發布留言</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">查看留言</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>


<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">排行</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">內容</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">依日期排序</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">依文章長短排序</a>
                </div>
            </div>
            <div class="col-9">
                <!-- content -->
                <div class="list-group">

                    @foreach($messageObj as $obj)
                    <a href="#" class="mt-10 list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$obj->title}}</h5>
                            <h4>{{$obj->name}}</h4>
                            <small>{{$obj->create_time}}</small>
                        </div>
                        <p class="mb-1">{{$obj->content}}</p>
                        <small>5 hours ago ...</small>
                    </a>
                    @endforeach
                </div>
                <!-- page -->
                <nav class="mt-5"aria-label="Page navigation example ">
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
            </div>

        </div>

    </div>
</section>

</body>

</html>