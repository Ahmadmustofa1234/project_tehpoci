<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Order</title>
</head>
<body>
    <div class="container">
        <h2>
            Pemesanan
        </h2>
        <form action="{{route('orderDetails')}}" method="post">
            @csrf
            @foreach ($products as $product)
                <div class="card m-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->price}}</p>
                    <p class="card-text">{{$product->description}}</p>
                    <input type="text" name="quantity{{$product->id}}" id="quantity{{$product->id}}">
                    </div>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>