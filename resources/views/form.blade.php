<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-6 form-group">
                Name
                <input class="form-control" type="text" name="name" value="{{$data ? $data->name : ''}}">
            </div>
            <div class="col-6">
                Address
                <input class="form-control" type="text" name="address" value="{{$data ? $data->address : ''}}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                Price
                <input type="text" class="form-control" name="price" value="{{$data ? $data->price : ''}}">
            </div>
            <div class="col-6">
                Thumbnail
                <input type="text" class="form-control" name="thumbnail" value="{{$data ? $data->thumbnail : ''}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-7">
                Description
                <textarea class="form-control" name="description" id="" rows="2">{{$data ? $data->description : ''}}</textarea>
            </div>
            <div class="form-group col-5 p-4">
                <select class="form-control" name="status" id="">
                    @foreach(\App\Enums\ApartmentStatus::getValues() as $type)
                        <option {{$data && $data->status === $type ? 'selected' : ''}} value="{{$type}}">{{$type}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                Detail
                <textarea class="form-control" name="detail" id="" rows="2">{{$data ? $data->detail : ''}}</textarea>
            </div>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
