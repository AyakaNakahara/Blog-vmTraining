<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //一覧
    public function index()
    {
        $blogs = Blog::get();
        // dd($blogs);
        return view('home',['blogs'=>$blogs]);
    }

    //詳細
    public function blog($id)
    {
        $blog = Blog::find($id);
        return view('blog',['blog'=>$blog]);
    }

    //edit
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit',['blog'=>$blog]);
        // return redirect('/blog/'.$id);
    }
    public function editAction(Request $request)
    {
        $file_name = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public', $file_name);

        Blog::where('id',$request->id)->update([
            'title'=> $request->title,
            'photo_url'=>'storage/'.$file_name,
            'content'=> $request->content
        ]);
        return redirect('/blog/'.$request->id);
    }


    //削除
    public function delete($id)
    {
        Blog::where('id',$id)->delete();
        return redirect('home');
    }
}
