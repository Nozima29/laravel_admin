@extends('layouts.master')

@section('title')
    All Clients of Application
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
                <th>User_ID</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Email</th>
                <th>Password</th>                
                <th>Created at</th>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->fname }}</td>
                        <td>{{ $client->sname }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->password }}</td>                                                    
                        <td>{{ $client->created_at }}</td>                        
                    </tr>        
                    @endforeach
                
                </tbody>
            </table>

            </div>
        </div>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    
@endsection

