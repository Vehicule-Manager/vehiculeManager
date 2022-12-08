<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MediaController extends Controller
{
    public function mediaStore(Request $request)
    {
        return response()->json();
    }

    public function mediaIndex()
    {
        $media = Media::all();
        return response()->json($media);
    }

    public function mediaShow($id)
    {
        $media = DB::table('medias')->select('link','name','type','id_clients','id_vehicules')->where('id', '=', $id)->get();
        return response()->json($media);
    }

    public function mediaUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function mediaDestroy($id)
    {
        $media = DB::table('medias')->where('id', '=', $id)->delete();
        return response()->json($media);
    }
}
