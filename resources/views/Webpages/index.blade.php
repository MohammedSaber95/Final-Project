
    @extends('layouts.master')
    @section('content')
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                @foreach ($cats as $item)
              
                <div class="single-products-catagory clearfix">
                <a href="shop\{{$item -> id}}">
                    <img src="{{$item ->image}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                        <p>From {{App\Product::where('category_id',$item -> id)->min('price')}}</p>
                            <h4>{{$item -> name}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
@endsection
   


