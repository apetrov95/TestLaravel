<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        $tovariv=Tovari::all();
        return view('tovariv',['tovariv'=>$tovariv]);

    }
    public function show($id){
        $tovariv=Tovari::find($id);
        return view('show',['tovariv'=>$tovariv]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Tovari::create($request->all());
        return redirect('/tovariv');
        }

    public function edit($id){
            $tovariv=Tovari::find($id);
            return view('edit',['tovariv'=>$tovariv]);
            }

    public function update(Request $request,$id){
            $tovariv=Tovari::find($id);
            $tovariv->title=$request->title;
            $tovariv->content=$request->content;
            $tovariv->save();
            return redirect('/tovariv');
            }
    public function delete($id){
            $tovariv=Article::find($id);
            $tovariv->delete();
            return redirect('/tovariv');


    }


}