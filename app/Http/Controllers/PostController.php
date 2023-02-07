<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $posts = DB::statement('SELECT * FROM posts');
        //  $posts = DB::select('SELECT * FROM posts');
        //  $posts = DB::select('SELECT * FROM posts where id=2');
        //  $posts = DB::select('SELECT * FROM posts where id=?', [1]);
        //  $posts = DB::select('SELECT * FROM posts where id=:id', ['id'=> 3]);

        // Insert a row
        // $posts = DB::insert('INSERT INTO posts (title, excerpt, body, image_path,is_published, min_to_read) VALUES (?,?,?,?,?,?)', ['test', 'test','test','test', true, 1]);

        // Update a row
        // $posts = DB::update('UPDATE posts set body = ? where id = ?', [
        //     'Body 2', 103
        // ]);

        // Delete a row
        //     $posts = DB::delete('DELETE FROM posts WHERE id=?', [100]);
        // dd($posts);
        //  var_dump($posts);

        // $posts = DB::table('posts')->get();
        // $posts = DB::table('posts')->find(1);
        // ->select('title', 'id','body','is_published', 'min_to_read')
        // ->where('id', '>', 50)
        // ->where('id', 50)
        // ->value('body');
        // ->where('is_published', true)
        // ->whereBetween('min_to_read', [3,5])
        // ->whereNotBetween('min_to_read', [3,5])
        // ->whereIn('min_to_read', [3,4,5,10])
        // ->orderBy('id', 'desc')
        // ->skip(30)
        // ->take(15)
        //    ->first();
        // ->inRandomOrder()
        // ->whereNull('excerpt')
        // ->get();
        // ->find(64);
        // ->count();
        // ->min('min_to_read');
        // ->avg('min_to_read');
        // ->sum('min_to_read');



        // dd($posts);
        // return view('blog.index')->with('posts', $posts);

        // $posts = Post::all();
        // $posts = Post::get();
        // dd($posts);

        // Eloquent Queries
        // Take 10 values from the list after arrangiing into descending order based on Id
        // $posts = Post::orderBy('id', 'desc')->take(10)->get();
        // $posts = Post::where('min_to_read', '!=', 2)->get();

        // Post::chunk(25, function($posts ){
        //     foreach($posts as $post) {
        //         echo $post->title . '<br>';
        //     }
        // } );

        // $posts = Post::get()->count();
        $posts = Post::sum('min_to_read');


        dd($posts);

        // return view('blog.index', compact('posts'));
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 100)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function __invoke()
    {
        //
    }
}
