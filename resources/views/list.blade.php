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
    <title>List Apartment</title>
</head>
<body>

<div class="container mt-5">
    <h2>List Apartment</h2>
    <div class="row justify-content-around p-3">
        @foreach($data as $obj)
            <div class="col-4 p-3">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{{$obj->thumbnail}}" alt="Card image" style="object-fit:cover;width:400px;height: 200px ">
                    <div class="card-body">
                        <h4 class="card-title">{{$obj->name}}</h4>
                        <p class="card-text">{{$obj->price}}</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <?php
            // config
            $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
            ?>

            @if ($data->lastPage() > 1)
                <ul class="pagination">
                    <li class="{{ ($data->currentPage() == 1) ? ' disabled' : '' }}">
                        <a href="{{ $data->url(1) }}">First</a>
                    </li>
                    @for ($i = 1; $i <= $data->lastPage(); $i++)
                        <?php
                        $half_total_links = floor($link_limit / 2);
                        $from = $data->currentPage() - $half_total_links;
                        $to = $data->currentPage() + $half_total_links;
                        if ($data->currentPage() < $half_total_links) {
                            $to += $half_total_links - $data->currentPage();
                        }
                        if ($data->lastPage() - $data->currentPage() < $half_total_links) {
                            $from -= $half_total_links - ($data->lastPage() - $data->currentPage()) - 1;
                        }
                        ?>
                        @if ($from < $i && $i < $to)
                            <li class="{{ ($data->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $data->url($i) }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor
                    <li class="{{ ($data->currentPage() == $data->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $data->url($data->lastPage()) }}">Last</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</div>
</body>
</html>
