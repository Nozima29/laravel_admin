@extends('layouts.master')

@section('title')
    invect2city    
@endsection

@section('content')
<div class="card-header card-header-primary">
    <h4 class="card-title ">Create Posts</h4>            
</div>
    <div class="container">
            <h5 class="text-center">Fill the Post requirements</h5>
            <form class="form-group" action="/create"  method="POST"> 
               @csrf
                <br>
                <div class="form-group">
                    Name                      
                    <input type="text" class="form-control" id="email" name="name">                  
                </div>
                <br>
                <div class="form-group">
                    Description                                      
                    <input type="text" class="form-control" name="description">                  
                </div>
                <br>
                <div class="form-group">
                    Address
                    <input type="text" class="form-control" name="address">                  
                </div>
                <br>
                <div class="form-group">
                    {{-- <label for="image">Uload Image</label> --}}
                    Enter image url
                    <input type="text" class="form-control" id="image" name="post_img">                  
                </div>
                <br>
                <div class="form-group">
                    Price
                    <input type="text" class="form-control" name="price">                  
                </div>
                
                <div class="form-group" style="float:right">        
                  <div class="col-sm-offset-2 col-sm-10" >
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
    </div>
@endsection

