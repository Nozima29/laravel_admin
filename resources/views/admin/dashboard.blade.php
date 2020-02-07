@extends('layouts.master')

@section('title')
    invect2city
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">All Posts</h4>            
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Created at</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->address }}</td>
                            <td><img src="{{ $post->post_img }}" style="width:150px; height:100px"></td>
                            <td class="text-primary">
                                {{$post->price}}
                            </td>                            
                            <td>{{ $post->created_at }}</td>
                            <td><a href="/delete/{{$post->id}}" type='btn' class="btn btn-default">Delete</td>
                        </tr>        
                        @endforeach
                    
                    </tbody>
                </table>

                </div>
            </div>
            </div>
        </div>
        </div>
        <button class="btn btn-primary" style="float:right">
            <a href="/createForm" style="color:white"> 
                Create Posts
            </a>
        </button>        
    </div>

@endsection

@section('scripts')
    
@endsection