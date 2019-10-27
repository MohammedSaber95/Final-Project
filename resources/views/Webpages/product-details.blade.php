

    @extends('layouts.master')
    @section('style')
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap3.css')}}" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <Style>
        a:hover{text-decoration:none;}
        a:focus{text-decoration:none;}
    </style>
    @endsection
    @section('content')
    
        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image:url({{$product->image1}});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{$product->image2}});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{$product->image3}});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{$product->image1}});">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="{{$product->image3}}">
                                            <img class="d-block w-100" src="{{$product->image1}}" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="{{$product->image2}}">
                                            <img class="d-block w-100" src="{{$product->image2}}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="{{$product->image3}}">
                                            <img class="d-block w-100" src="{{$product->image3}}" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="{{$product->image1}}">
                                            <img class="d-block w-100" src="{{$product->image1}}" alt="Fourth slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">${{$product->price}}</p>
                                <a href="#" >
                                    <h6>{{$product->name}}</h6>
                                </a>
                                <!-- Ratings & Review -->
                                <form action="{{ route('ratingproduct') }}" method="POST">
                                    {{ csrf_field() }}
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                    <input id="input-1" name="rate"  class=" rating rating-loading w-100" data-min="0" data-max="5" data-step="1" value="{{ $product->averageRating }}" data-size="xs">
                                    <input type="hidden" name="id" required="" value="{{ $id }}">
                                    <button class="btn btn-success w-100 ">Submit Review</button>

                                </form>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p>{{$product->description}}</p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post">
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <script type="text/javascript">

   $("#input-id").rating();
    

</script>
  @endsection