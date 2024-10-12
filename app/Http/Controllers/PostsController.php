<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\User;

use Auth;

class PostsController extends Controller
{
    public function storePost(Request $request)
    {
        // Validate the form data
        $request->validate([
            'description' => ['required','string'],
            'featured_image' => ['nullable','image','mimes:jpg,jpeg,png','max:2048'], // Optional image validation
        ]);

        // Handle file upload for the featured image
        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->storePost('images', 'public');
        }

        // Save the job to the database
        Post::create([
            'user_id' => Auth::user()->id,
            'description' => $request['description'],
            'featured_image' => $imagePath,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Posted successfully!');
        
    }


    public function indexPost()
        {
    $users = User::with('posts')->has('posts')->get();

    return view('posts', compact('users'));
    }


    //public function index()
    //{
      //  $jobs = Job::all();
       // $user = Auth::user();
       // return view('index', compact('jobs' ,'user'));
   // }
    
}
