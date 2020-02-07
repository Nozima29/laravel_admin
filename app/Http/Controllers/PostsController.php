<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Filesystem\Filesystem;
use App\Posts;
use Auth;
use Input;


class PostsController extends Controller
{
    public function index(){
        $posts = Posts::all();
        
        return view('admin.dashboard', ['posts' => $posts]);
        
    }    
    
    public function create(Request $request){       
        
        $posts = Posts::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'address' => $request->input('address'),      
                'post_img' => $request->input('post_img'),      
                'price' => $request->input('price'),
                'created_at' => $request->input('created_at'),
            ]);
        $posts->save();                        
        return redirect()->action('PostsController@index');
    }

    public function delete($id){
        $posts = Posts::find($id);        
        $posts->delete($id);        
        
        return redirect()->back()->with('info', 'Post deleted!');
    }

    public function search($key){
        
        $key = Input::get($key);
        $posts = Posts::where('name', 'Like', '%'.$key.'%')->orWhere('description', 'Like', '%'.$key.'%')->get();
        return($posts);
        //return view('admin.dashboard', ['posts'=>$posts]);    
            
    }


    //for Api part 
    public function fetchData(){
        $posts = Posts::all();
        return response()->json($posts, 200);    
    }
    public function storeData(Request $request){
        $posts = Posts::create($request->all());
        return response()->json($posts, 201);
    }
    public function deleteData(Request $request, Posts $posts){
        $posts->delete($request->all());
        return response()->json(null, 204);
    }
    public function updateData(Request $request, Posts $posts){
        $posts->update($request->all());
        return response()->json($posts, 200);
    }
}
