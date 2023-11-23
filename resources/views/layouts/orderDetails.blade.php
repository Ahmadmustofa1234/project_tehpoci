<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>OrderDetails</title>
</head>
<body>
    <div class="container">
        <h1>Order Details</h1>
                <form action="{{route('payment')}}">
                @csrf
                @foreach($orderDetails as $orderDetail)
                <div class="card -m3">
                    <div class="card-body">
                        <p>{{$orderDetail['name']}}</p>
                        <p>{{$orderDetail['price']}}
                        <span>
                           Quantity {{$orderDetail['quantity']}}
                        </span>
                        </p>
                        <p>
                            Total Price {{$orderDetail['subtotal']}}
                        </p>
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][id]" value="{{ $orderDetail['product_id'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][name]" value="{{ $orderDetail['name'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][price]" value="{{ $orderDetail['price'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][quantity]" value="{{ $orderDetail['quantity'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][subtotal]" value="{{ $orderDetail['subtotal'] }}">
                    </div>
                </div>
                @endforeach
                <input type="hidden" name="totalAmmount" value="{{ $totalAmmount }}">
                <button type="submit" class="btn btn-primary">Pay</button>
            </form>
    </div>
</body>
</html>