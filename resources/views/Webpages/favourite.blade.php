
       @extends('layouts.master')
       @section('style')
        <style>
            .single-product-wrapper:nth-child(odd){
                margin-left:15px;
            }
            p{
                text-align:center;
                margin-left:125px;
            }
        </style>
       @endsection
       @section('content')
        <div class="shop_sidebar_area padding-50">
            
        </div>
        <div class="amado_product_area section-padding-100">
        
             
               
    {{-- this the beginnig of the products which display with ajax  --}}
    <div class ="row">
    <p class="lead">The high rated products according to users opinions</p>
                    <!-- Single Product Area -->
                @if(count($products) > 0)
                    @foreach($products as $product)
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6 full" >
                        <div class="single-product-wrapper"  >
                            <!-- Product Image -->
                            <div class="product-img">
                            <img src="{{$product ->image1}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img zoom" src="{{$product -> image2}}" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">${{$product -> price}}</p>
                                <a href="..\product\{{$product->id}}">
                                        <h6>{{$product -> name}}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $product->averageRating }}" data-size="xs" disabled="">

                                    </div>
                                    <div class="cart">
                                        <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="/img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <p>Adding Products Soon</p>
                        </div>
                    </div>
                    @endif



                    
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
    @endsection

