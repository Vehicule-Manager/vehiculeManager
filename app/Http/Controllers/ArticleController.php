<?php

namespace App\Http\Controllers;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function articleStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/articles",
     *      operationId="articleIndex",
     *      tags={"article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
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
     *      tags={"article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
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
        $article = DB::table('articles')->select('title', 'content')->where('id', '=', $id)->get();
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
     *      tags={"article"},

     *      summary="Get Of Article",
     *      description="Returns the article",
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
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

    public function brandDestroy($id)
    {
        $article = DB::table('articles')->where('id', '=', $id)->delete();
        return response()->json($article);
    }
}
