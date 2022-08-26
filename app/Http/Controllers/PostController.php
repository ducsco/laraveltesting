<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
      $post = new Post([
        'title' => $request->post('title'),
        'body' => $request->post('body')
      ]);

      $post->save();

      return response()->json('success');
    }
}
