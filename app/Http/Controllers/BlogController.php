<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function GuzzleHttp\Promise\all;

class BlogController extends Controller
{
    
    function index(){    
        return view('blogs.index',[
            'blogs'=> Blog::latest()->filter(request(["search", "category", "username"]))
                                ->paginate(6)->withQueryString()
        ]);
    }
    function show(Blog $blog) {
        return view('blogs.show',[
            'blog'=>$blog,
            "randomBlogs"=>Blog::inRandomOrder()->take(3)->get()
        ]);
    }
    public function subscriptionHandler(Blog $blog)
    {
        if(User::find(auth()->id())->isSubscribed($blog)){
            $blog->unSubscribe();
        }else{
            $blog->subscribe();
        }
        return back();
    }
    
}
