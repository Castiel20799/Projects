<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
           // $posts = Post::paginate(5);
        // $posts = Post::all();
        // $posts = Post::select('posts.*', 'users.name as author',)
        // ->join('users', 'posts.user_id', '=', 'users.id')
        // ->paginate(3);

        // $posts = DB::table('posts')->join('users','users.id', '=', 'posts.users_id')->first();
        $posts = Post::select('posts.*', 'categories.name as category',)
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            
            ->paginate(5);
        
     
        
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        if($validator->fails()){
            return redirect('/posts/create')
            ->withErrors($validator)
            ->withInput();
        }
        
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
            DB::insert('insert into category_post (post_id,category_id) values (?, ?)', [$post->id,$request->category]);
           


       

        // Post::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'user_id'=> auth()->user()->id,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        session()->flash('success','A post was created succcessfully.');

        // $request->session()->flash('success','A post was created succcessfully.');

        return redirect('/posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        if($validator->fails()){
            return redirect('/posts/edit/{$id}')
            ->withErrors($validator)
            ->withInput();
        }
        
        $post = Post::find($id);
        
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->created_at = now();
        // $post->updated_at = now();

        // $post->update([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'updated_at' => now(),
        // ]);
        
        $post->update($request->only(['title','body']));

        $post->save();
        
        // session()->flash('success','Post was edited succcessfully.');

        return redirect('/posts')->with('success','Post was edited succcessfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);
        $post = Post::where('posts.id', '=', $id)
                ->join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.name',)
                ->first();

        return view('posts.show',compact('post'));
    }

    public function destroy($id)
    {
        // posts::destroy($id);

        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('success','Post was deleted succcessfully.');
    }
}
