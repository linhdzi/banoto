@extends ('layouts.app')

@section ('content')

<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/shop.css">
        <div class="container">
        
            <div class="main">
                <div class="row gy-3 row g-1 ">
                    @foreach($products as $p)    
                        <div class="col-md-3">
                            <div class="card">
                                <img style="width: 253px; height: 170px; " src="{{$p -> pic}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$p ->name}}</h5>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="card-text">{{$p -> price}}</p>
                                    <a href="#" class="btn btn-light">View More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>    

@endsection