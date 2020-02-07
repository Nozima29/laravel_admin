<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
class ClientsController extends Controller
{
    public function index(){
        $clients = Clients::all();
        return view('admin.clients')->with('clients', $clients);
    }

    public function fetchUser(){
        $users = Clients::get();
        return response()->json($users, 200);
    }

    public function storeUser(Request $request){
        $users = Clients::create($request->all());
        return response()->json($users, 201);
    }
}
