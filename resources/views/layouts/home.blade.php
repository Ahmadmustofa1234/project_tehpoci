<div class="home">
        <h1 class="home-subheadline"> Atasi Dahagamu Dengan Minum Teh Poci</h1>
        <p class="home-headline">Jangan Lupa Nikmatnya teh</p>
    </div>

    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}}</p>
          <p class="card-text">{{$product->description}}</p>
          <a href="{{route('order')}}" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    @endforeach
