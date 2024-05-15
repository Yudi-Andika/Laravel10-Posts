<?php

namespace App\Http\Controllers;

// Import Model "Post"
use App\Models\Post;

// return type View
use Illuminate\View\View;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(): View
   {
      // get posts
      $posts = Post::latest()->paginate(5);

      // render view with posts
      return view('posts.index', compact('posts'));
   }

   public function create(): View
   {
      return view('posts.create');
   }

   public function store(Request $request): RedirectResponse
   {
      //validate form
      $this->validate($request, [
         'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
         'title' => 'required|min:1',
         'content' => 'required|min:1'
      ]);
      
      //upload image
      $image = $request->file('image');
      $image->storeAs('public/posts', $image->hashName());

      //create post
      Post::create([
         'image' => $image->hashName(),
         'title' => $request->title,
         'content' => $request->content
      ]);

      //redirect to index
      return redirect()->route('posts.index')->with(['success' => 'DataBerhasil Disimpan!']);
   }

   public function show(string $id): View
   {
      //get post by Id
      $post = Post::findOrFail($id);

      //render view with post
      return view('posts.show', compact('post'));
   }

   public function destroy($id): RedirectResponse
   {
      //get post by id 
      $post = Post::findOrFail($id);

      //delete img
      Storage::delete('public/posts/' . $post->image);

      //delte post
      $post->delete();

      //redirect to index 
      return redirect()->route('posts.index')->with(['succes' => 'Data Berhasil Dihapus!']);
   }
   public function edit(string $id): View
   {
      //get post by Id
      $post = Post::findOrFail($id);

      //render view with post
      return view('posts.edit', compact('post'));
   }

   public function update(Request $request, $id): RedirectResponse
   {
      //validate form
      $this->validate($request, [
         'image' => 'image|mimes:jpeg,jpg,png|max:2048',
         'title' => 'required|min:5',
         'content' => 'required|min:10'
      ]);
      //get post by ID
      $post = Post::findOrFail($id);
      //check if image is uploaded
      if ($request->hasFile('image')) {
         //upload new image
         $image = $request->file('image');
         $image->storeAs('public/posts', $image->hashName());
         //delete old image 
         Storage::delete('public/posts/' . $post->image);
         //update post with new image
         $post->update([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
         ]);
      } else {
         //update post without image
         $post->update([
            'title' => $request->title,
            'content' => $request->content
         ]);
      }
      //redirect to index
      return redirect()->route('posts.index')->with(['success' => 'Data 
Berhasil Diubah!']);
   }
}
