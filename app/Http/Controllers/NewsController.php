<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function inicio(){
        $news = News::orderBy('id','DESC')->get()->take(6);
        return view('index', compact('news'));
    }

    public function index(){
        $news = News::all();
        return view('newsview', compact('news'));
    }

    public function save(NewsRequest $request){
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::disk('local')->putFileAs('public', $file, $filename);
        $news = new News;
        $news->title = $request->title;
        $news->key_name = Str::slug($request->title);
        $news->image = $filename;
        $news->description = $request->description;
        $news->save();

        return redirect('noticias');
    }

    public function edit($id){
        $news = News::find($id);
        return view('news.editar',compact('news'));
    }

    public function update(NewsRequest $request,$id){
        $news = News::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            Storage::disk('local')->putFileAs('public', $file, $filename);
        } 
        else{
            $filename = $news->image;
        }
         
            $news->title = $request->title;
            $news->key_name = Str::slug($request->title);
            $news->image = $filename;
            $news->description = $request->description;
            $news->save();

        return redirect('noticias');
    }

    public function delete($id){
        News::find($id)->delete();
        return redirect('noticias');
    }

}

