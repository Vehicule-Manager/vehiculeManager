<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;

class ArticleController extends Controller
{
    /**
     * @OA\Post(
     *      path="/add/articles",
     *      operationId="articlesStore",
     *      tags={"Article"},
     *      summary="Add an article",
     *      description="Add a new article",
     *
     * @OA\Parameter(
     *      name="title",
     *      in="query",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *
     * @OA\Parameter(
     *      name="content",
     *      in="query",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="text"
     *      )
     *   ),
     *
     * @OA\Parameter(
     *      name="description",
     *      in="query",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="text"
     *      )
     *   ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function articleStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'description' => 'required|string',
        ]);
        $article = Article::create($validatedData);

        return response()->json($article, 201);
    }

    /**
     * @OA\Get(
     *      path="/articles",
     *      operationId="articleIndex",
     *      tags={"Article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function articleIndex()
    {
        $article = QueryBuilder::for(Article::class)
            ->paginate(12);

        return response()->json($article);
    }

    /**
     * @OA\Get(
     *      path="/articles/{id}",
     *      operationId="articleShow",
     *      tags={"Article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function articleShow($id)
    {
        $article = DB::table('articles')->select('title', 'content', 'description')->where('id', '=', $id)->get();

        return response()->json($article);
    }

    public function articleUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/articles/{id}",
     *      operationId="articleDestroy",
     *      tags={"Article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function articleDestroy($id)
    {
        $article = DB::table('articles')->where('id', '=', $id)->delete();

        return response()->json($article);
    }

    /**
     * @OA\Get(
     *      path="/table/articles",
     *      operationId="articleTable",
     *      tags={"Article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function articleTable()
    {
        $articles = Article::all();

        return response()->json($articles);
    }
}
