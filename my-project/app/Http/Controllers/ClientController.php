<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientController extends Controller
{
    public function clientStore(Request $request)
    {
        return response()->json();
    }
    public function clientIndex()
    {
        $client = Client::all();
        return response()->json($client);
    }
    public function clientShow($id)
    {
        $subject = DB::table('clients')->select('civility','firstname','lastname','birthDate','address','optionalAddress','zipCode', 'city','id_users','id_creditInfos')->where('id', '=', $id)->get();
        return response()->json();
    }
    public function clientUpdate($id, Request $request)
    {
        return response()->json();
    }
    public function clientDestroy($id)
    {
        $client = DB::table('clients')->where('id', '=', $id)->delete();
        return response()->json($client);
    }
}
