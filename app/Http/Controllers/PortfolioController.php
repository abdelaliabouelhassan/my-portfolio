<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MyWork;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //

    public function index(){
        $reviews = Review::all();
        $posts = Post::latest()->get(['title','image','summary','summary','slug']);
        $myWorks = MyWork::latest()->get(['image','title','category','slug']);
        return view('welcome',compact('reviews','posts','myWorks'));
    }


    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comments' => 'required',
        ]);
        

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->comments,
            'from' => 'portfolio',
            'subject' => $request->tele ? $request->tele : 'client contact',
        ]);

        return response()->json([
            'message' => 'Your message has been sent successfully',
            'status' => 'success'
        ],200);   
    }

    public function show($slug){
        $myWork = MyWork::where('slug',$slug)->first();
        if(!$myWork){
            return abort(404);
        }
        $next = MyWork::where('id','>',$myWork->id)->first('slug');
        $prev = MyWork::where('id','<',$myWork->id)->first('slug');
        return view('my-work',compact('myWork','next','prev'));
    }
}
