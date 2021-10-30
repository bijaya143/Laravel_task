<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('laravel_task.index', compact('posts'));
    }

    public function pages()
    {
        
        // $posts = new Post();
        $posts = Post::paginate(3);
        return view('laravel_task.pages.pages', compact('posts'));
    }

    public function createPage()
    {
        return view('laravel_task.pages.create');
    }

    public function uploadPage(Request $request)
    {
        $posts = new Post;
        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' =>'required',
            'description' =>'required',
            'image' => 'required|mimes:jpg, png, jpeg'
        ]);

        $image = $request->image;
        $newImageName = time(). '.' . $image->extension();

        $request->image->move(public_path('/assets/images/post'), $newImageName);

        $posts->image = $newImageName;
        $posts->title = $request->title;
        $posts->meta_title = $request->meta_title;
        $posts->meta_description = $request->meta_description;
        $posts->description = $request->description;

        $posts->save();
        return redirect()->back()->with('message', 'Pages uploaded successfully!');
    }

    public function viewPage($id)
    {
        $posts = Post::find($id);
        return view('laravel_task.pages.single_page', compact('posts'));
    }

    public function editPage($id)
    {
        $posts = Post::find($id);
        return view('laravel_task.pages.edit', compact('posts'));
    }

    public function updatePage(Request $request, $id)
    {
        $posts = Post::find($id);
        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' =>'required',
            'description' =>'required',
            'image' => 'required|mimes:jpg, png, jpeg'
        ]);

        $image = $request->image;
        $newImageName = time(). '.' . $image->extension();
        $request->image->move(public_path('/assets/images/post'), $newImageName);

        $posts->image = $newImageName;
        $posts->title = $request->title;
        $posts->meta_title = $request->meta_title;
        $posts->meta_description = $request->meta_description;
        $posts->description = $request->description;
        
        $posts->save();

        return redirect()->back()->with('message', 'Pages updated successfully!');

    }

    public function destroyPage($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->back()->with('message', 'Page deleted successfully!');
    }
}
