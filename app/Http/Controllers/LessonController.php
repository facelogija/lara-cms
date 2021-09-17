<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLessonRequest;
use Request;
use Exception;
use App\Lesson;
use App\Post;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;

class LessonController extends Controller
{

      public function create()
    {
            return view('admin.conmanager.lesson.create_new');
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

    public function store(StoreLessonRequest $request)
    {
    	 $lessonData = request()->validate();

    	auth()->user()->lessons()->create([
            'title' => $lessonData['title'],
            'instruction' => $lessonData['instruction'],
            'video_url' => $lessonData['video_url'],
            'type' => $lessonData['type'],
            'author'  => $lessonData['author'],  ]);

        return redirect()->back()->with('success', 'Įrašas patalpintas sėkmingai.');

    }

    public function show($id)
    {
        $showLesson = Lesson::findOrFail($id);
        $lessons = Lesson::all();
        $posts = Post::all();

         return view('lessons.showlesson', compact( 'showLesson','lessons', 'posts'));
    }

     public function edit($id)
    {
        $lessonq = Lesson::findOrFail($id);

        return view('admin.conmanager.lesson.edit')->with('lessonq', $lessonq);
    }

      public function update(StoreLessonRequest $id)
    {

        $data = request()->validate();

        $lessonq = Lesson::findOrFail($id);
        $lessonq->update($data);

        return redirect('admin/conmanager')->with('success', 'Įrašas (' . $lessonq->title . ') atnaujintas sėkmingai');
    }

    public function search_id()
    {
        return view('admin.conmanager.lesson.search_title');
    }

        public function review()
    {
         $by_title = Lesson::where('title', '=', Request::input('title'))->get();

         foreach ($by_title as $value)
        {
           $value;
        }

        $lessonq = Lesson::find($value->id);
         if(empty($lessonq)){
            return redirect()->back()->withErrors(['Nepavyko rasti įrašo pagal jūsų pateiktą ID. Patikrinkite ar įvedėte teisingą ID ir pabandykite iš naujo.']);
         }
         else{
            return redirect()->route('lesson.review_id', [$lessonq]);
         }
    }

        public function review_id($id)
    {
        $lessonq = Lesson::findOrFail($id);

        return view('admin.conmanager.lesson.review')->with('lessonq', $lessonq);
    }

        public function suspend($id)
    {

        $lessonq = Lesson::findOrFail($id);

                if($lessonq->status == 'active')
                {
                $lessonq->status = 'suspended';
                $lessonq->save();
                }
                elseif ($lessonq->status == 'suspended') {
                $lessonq->status = 'active';
                $lessonq->save();
                }
                return redirect()->back()->with('success', 'Įrašo statusas pakeistas į '. $lessonq->status);
    }

    public function search_lists()
    {
        return view('admin.conmanager.lesson.search_lists');
    }

        public function search()
    {

        $by_title = Lesson::where('title', '=', Request::input('title'))->get()->filter()->all();
        $by_author = Lesson::where('author', '=', Request::input('author'))->get()->filter()->all();
        $by_type = Lesson::where('type', '=', Request::input('type'))->get()->filter()->all();
        $by_created_at = Lesson::whereBetween('created_at',[Request::input('date_from'), Request::input('date_to')])->get()->filter()->all();
        $by_updated_at = Lesson::whereBetween('updated_at',[Request::input('date_from_updated'), Request::input('date_to_updated')])->get()->filter()->all();

        $results = collect([$by_title, $by_author, $by_type, $by_created_at, $by_updated_at])->filter()->all();


        return view('admin.conmanager.lesson.search_lists_results')->with('results', $results);

    }

    public function delete($id)
    {
        $lessonq = Lesson::findOrFail($id);

            $lessonq->delete();
            return redirect("admin/conmanager")->with('success', 'Įrašas (' . $lessonq->title . ') buvo sėkmingai ištrintas');

    }
}
