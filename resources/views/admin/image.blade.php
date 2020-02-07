@extends('layouts.master')

@section('title')
    invest2city
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <form action="/image" mothod="post" enctype="multipart/form-data">
                @csrf                
                    <div class="custom-file">
                        <input type="file" class="form-control" id="image" name="post_img">
                        <label for="image" class="form-control">Choose file</label>
                    </div>
                    <input type="submit" value="upload" class="btn btn-success">        
            </form>
        </div>
    </div>
        
    
@endsection
