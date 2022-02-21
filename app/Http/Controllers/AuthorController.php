<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $author){
        return view('posts', [
            "title" => "Post By Author : $author->name" ,
            "active" => "author",
            'posts' => $author->posts->load('author','category'),
            
            
        ]);
    }
}
