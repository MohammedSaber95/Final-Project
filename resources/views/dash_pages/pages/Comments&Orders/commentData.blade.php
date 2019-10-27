@extends('layouts.dashboard.master')
@section('content')
<section class="content">
        <div class="content-wrapper">
        
                <div class="row">
                        <div class="col-12 col-lg-7">
                            
                                    <div class="col-12 col-sm-6 col-md-12 col-xl-6 full" >
                                            <div class="single-product-wrapper list" >
                                                <!-- Product Image -->
                                                <div class="product-img">
                                                <img src="{{$comments ->Product->image1}}" height=400px width=400px alt="">
                                                <!-- Product Description -->
                                                <div class="product-description d-flex align-items-center justify-content-between">
                                                    <!-- Product Meta Data -->
                                                    <div class="product-meta-data">
                                                        <div class="line"></div>
                                                        <hr>
                                                   <div>
                                                        <h4>Name of User</h4>
                                                   <a href="{{route('users')}}" ><p class="h3">{{$comments->User->name}}</p></a>
                                                </div>
                                                <div>
                                                        <h4>Name of product</h4>
                                                       <a href="{{route('product',$comments->Product->id)}}"> <p class="product-name h3">${{$comments->Product->name}}</p></a>
                                                        <br>
                                                        <h4>Price of product</h4>
                                                          <p class="product-comment h3">${{$comments->Product->price}}</p>
                                                    </div>
                                                    <div style="color:darkgreen">
                                                            <h4>Comment</h4>
                                                              <div class="h3 btn-warning" >${{$comments->description}}</div>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        
                                    </div>
                                </div>
                                      
        </div>
</section>
@endsection