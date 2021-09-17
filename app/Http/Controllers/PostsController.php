<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Session;
use Request;
use App\User;
use App\Post;
use App\Lesson;
use Intervention\Image\Facades\Image;
use Illuminate\Routing\Redirector;

class PostsController extends Controller
{


    public function create()

    {
    	   return view('admin.conmanager.post.create_new');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function store(StorePostRequest $request)
    {
    	$data = request()->validate();

    	auth()->user()->posts()->create([
            'title' => $data['title'],
            'instruction' => $data['instruction'],
            'video_url' => $data['video_url'],
            'type' => $data['type'],
            'author'  => $data['author'],  ]);

          return redirect()->back()->with('success', 'Įrašas patalpintas sėkmingai ');

    }

     public function show($id)
    {
        $showPost = Post::findOrFail($id);
        $lessons = Lesson::all();
        $posts = Post::all();

        return view('posts.showpost', compact('showPost', 'lessons', 'posts'));
    }

    public function edit($id)
    {

        $postq = Post::findOrFail($id);

            return view('admin.conmanager.post.edit')->with('postq', $postq);
    }

    public function update(StorePostRequest $id)
    {
        $data = request()->validate();

        $postq = Post::findOrFail($id);
        $postq->update($data);

        return redirect('admin/conmanager')->with('success', 'Įrašas (' . $postq->title . ') atnaujintas sėkmingai');

    }

        public function search_id()
    {
            return view('admin.conmanager.post.search_id');
    }

        public function review()
    {

        $by_title = Post::where('title', '=', Request::input('title'))->get();

         foreach ($by_title as $value)
        {
           $value;
        }

        $postq = Post::find($value->id);
         if(empty($postq)){
            return redirect()->back()->withErrors(['Nepavyko rasti įrašo pagal jūsų pateiktą ID. Patikrinkite ar įvedėte teisingą ID ir pabandykite iš naujo.']);
         }
         else{
            return redirect()->route('post.review_id', [$postq]);

         }
    }

        public function review_id($id)
    {

        $postq = Post::findOrFail($id);

            return view('admin.conmanager.post.review')->with('postq', $postq);

    }

        public function suspend($id)
    {

                $postq = Post::findOrFail($id);
                if($postq->status == 'active')
                {
                $postq->status = 'suspended';
                $postq->save();
                }
                elseif ($postq->status == 'suspended') {
                $postq->status = 'active';
                $postq->save();
                }
                return redirect()->back()->with('success', 'Įrašo statusas pakeistas į ' . $postq->status);

    }

        public function search_lists()
    {
        return view('admin.conmanager.post.search_lists');
    }

        public function search()
    {

        $by_title = Post::where('title', '=', Request::input('title'))->get()->filter()->all();
        $by_author = Post::where('author', '=', Request::input('author'))->get()->filter()->all();
        $by_type = Post::where('type', '=', Request::input('type'))->get()->filter()->all();
        $by_created_at = Post::whereBetween('created_at',[Request::input('date_from'), Request::input('date_to')])->get()->filter()->all();
        $by_updated_at = Post::whereBetween('updated_at',[Request::input('date_from_updated'), Request::input('date_to_updated')])->get()->filter()->all();

        $results = collect([$by_created_at, $by_author, $by_type, $by_title, $by_updated_at])->filter()->all();

        return view('admin.conmanager.post.search_lists_results')->with('results', $results);

        }

    public function delete($id)
    {
        $postq = Post::findOrFail($id);

        $postq->delete();
        return redirect("admin/conmanager")->with('success', 'Įrašas (' . $postq->title . ') buvo sėkmingai ištrintas');

    }

}
