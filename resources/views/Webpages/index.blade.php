
    @extends('layouts.master')
    @section('content')
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                @if(count($cats) > 0 )
                @foreach ($cats as $item)
                    @if(App\Product::where('category_id',$item -> id)->min('price') > 0)
                        <div class="single-products-catagory clearfix">
                        <a href="shop\{{$item -> id}}">
                    <img src="{{asset('img/product-img/'.$item ->image)}}" alt="">
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <div class="line"></div>
                                <p>From {{App\Product::where('category_id',$item -> id)->min('price')}}</p>
                                    <h4>{{$item -> name}}</h4>
                                </div>
                            </a>
                        </div>               
                @endif
                @endforeach
                @else
                <div class="single-products-catagory clearfix">
                    <p>There are no categories to display </p>
                </div>
                @endif
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
@endsection
   


