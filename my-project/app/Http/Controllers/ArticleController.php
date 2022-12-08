<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function brandStore(Request $request)
    {
        return response()->json();
    }

    public function brandIndex()
    {
        $article = Article::all();
        return response()->json($article);
    }

    public function brandShow($id)
    {
        $article = DB::table('articles')->select('name')->where('id', '=', $id)->get();
        return response()->json($article);
    }

    public function brandUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function brandDestroy($id)
    {
        $article = DB::table('articles')->where('id','=',$id)->delete();
        return response()->json($article);
    }
}
