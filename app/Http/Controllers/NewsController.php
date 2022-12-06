<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller

{
    public function getNews(){
        $data = DB::table('blocks')->get();


        return view('news', ['data' => $data]);
}
}
