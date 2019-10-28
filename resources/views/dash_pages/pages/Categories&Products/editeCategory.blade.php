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
  
 <form action="{{route('UpdateCategory',$category->id)}}" method="post" enctype="multipart/form-data" >
          @csrf
          @method('put ')
         <input type="hidden" name="id" value="{{$category->id}}" >
         <div class="form-group">
            <label for="cc-name" class="control-label mb-1">Name</label>
            <input id="cc-name"  type="text" class="form-control name" aria-required="true" aria-invalid="false" name="name" value="{{$category->name}}">
        </div>
        <div class="form-group ">
            <label for="cc-name" class="control-label mb-1">description</label>
            <input id="cc-description"  type="text" class="form-control cc-name valid description"name="description" value="{{$category->description}}" >
        </div>
         <div class="form-group">
            <label for="cc-number" class="control-label mb-1">status</label>
            <input id="cc-number"  type="text" class="form-control "name="status" value="{{$category->status}}" >
        </div>
    <div class="form-group">
       <label for="cc-image" class="control-label mb-1">Image</label>
       <input id="cc-name"  type="file" class="form-control " name="image" value="{{$category->image}}">
   </div>
        <input type="submit" class="btn btn-primary" value="Update"> 
      </form>

 </div>   
@endsection
