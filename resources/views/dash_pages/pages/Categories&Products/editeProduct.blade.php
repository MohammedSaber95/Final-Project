@extends('layouts.dashboard.master')
 @section('content')
 
 <div class="content-wrapper">
    @if (count($errors) > 0)

    <div class="alert alert-danger">
   
        <strong>Whoops!</strong> There were some problems with your input.
   
        <ul>
   
            @foreach ($errors->all() as $error)
   
                <li>{{ $error }}</li>
   
            @endforeach
   
        </ul>
   
    </div>
   
   @endif
   @if(Session::get('sucess'))
   <div class="alert alert-success">
   <strong>
   {{Session::get('sucess')}}
   </strong>
   </div>
   @endif
 <div class="content-wrapper" style=" margin-right:100px;">
  
 <form action="{{route('UpdateProducts',$products->id)}}" method="post" enctype="multipart/form-data" >
          @csrf
          @method('put')
         <input type="hidden" name="id" value="{{$products->id}}" >
         <div class="form-group">
            <label for="cc-name" class="control-label mb-1">Name</label>
            <input id="cc-name"  type="text" class="form-control name" aria-required="true" aria-invalid="false" name="name" value="{{$products->name}}">
        </div>
        <div class="form-group ">
            <label for="cc-name" class="control-label mb-1">description</label>
            <input id="cc-description"  type="text" class="form-control cc-name valid description"name="description" value="{{$products->description}}" >
        </div>
         <div class="form-group">
            <label for="cc-number" class="control-label mb-1">image1</label>
            <input id="cc-number"   type="file" class="form-control "name="image1" value="{{$products->image1}}" >
        </div>
        <div class="form-group">
                <label for="cc-number" class="control-label mb-1">image2</label>
                <input id="cc-number"   type="file" class="form-control "name="image2" value="{{$products->image2}}" >
            </div>
            <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">image3</label>
                    <input id="cc-number"   type="file" class="form-control "name="image3" value="{{$products->image3}}" >
                </div>
        <div class="form-group">
                <label for="cc-number" class="control-label mb-1">price</label>
                <input id="cc-number"  type="text" class="form-control "name="price" value="{{$products->price}}" >
            </div>
    <div class="form-group">
       <label for="cc-image" class="control-label mb-1">color</label>
       <input id="cc-name"  type="color" class="form-control " name="color" value="{{$products->color}}">
   </div>    <div class="form-group">
        <label for="price">user_id </label><br>
        <input type="text"  name="user_id"value="{{$products->user_id}}">
        {{-- <small id="user_id" class="form-text text-muted">from 5 to 100</small> --}}
    </div>
    <div class="form-group">
        <label for="price">category_id </label><br>
        <input type="text"  name="category_id"value="{{$products->category_id}}">
        {{-- <small id="user_id" class="form-text text-muted">from 5 to 100</small> --}}
    </div>
        <input type="submit" class="btn btn-primary" value="Update"> 
      </form>

 </div>   
@endsection
