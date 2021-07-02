<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{asset("css/custom_apartment.css")}}">
    <title>Apartment</title>
</head>
<body>

<div class="container mx-auto mt-4">
    <div class="row">
        @foreach($apartments as $item)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$item->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->address}}</p>
                    <p class="card-text">{{$item->price}}</p>
                    <h6 class="card-subtitle mb-2 text-muted">{{$item->public_information}}</h6>
                    <p class="card-text">{{$item->detail_information}}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


</body>
</html>

