<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->where('is_enabled', '=', 1)->sortBy('created_at');
        
        return view('article.articles', ['articles' => $articles ]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        if($article['is_enabled'] == 0){
            return Redirect::to('/articles');
        }
        return view('article.article', ['article' => $article ]);
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title'   => 'required|unique:articles',
            'content' => 'required',
            'is_enabled' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('articles/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        
        $request['slug'] = str_slug($request['title'], '-');

        // dd($request->all());
       $article =  Article::create($request->except(['_token']));
        return Redirect::to('/articles/'.$article->id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.update')->with('article', $article);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
            'content' => 'required',
            'is_enabled' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('articles/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $article = Article::where('id', $id)->update($request->except(['_token', '_method']));
        return Redirect::to('/articles/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return Redirect::to('/articles');
    }
}
