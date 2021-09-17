<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Lesson;
use Illuminate\Http\Request;
use Mail;

class IndexController extends Controller
{

      public function showPosts()
    { 
        $lessons = Lesson::all();
        $posts = Post::all();
        $firstpost = Post::firstpost();
        $firstlesson = Lesson::firstlesson();
          
        return view('index', compact('lessons', 'posts', 'firstpost', 'firstlesson'));
    }

    public function about()
    {
        return view('aboutus');
    }
    
    public function sentmail(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'subject' => 'required',
                'email' => 'required|email',
                'content' => 'required'
                ]);

        Mail::send('email', [
                'name' => $request->get('name'),
                'subject' => $request->get('subject'),
                'email' => $request->get('email'),
                'content' => $request->get('content') ],
                function ($message) {
                        $message->from('info@arduinopagalba.lt');
                        $message->to('info@arduinopagalba.lt', 'Sistema')
                                ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
           

    

 }
    


