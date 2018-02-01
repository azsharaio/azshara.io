<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        echo 'test';
        $pdo = DB::connection() ->getPdo();
        dd($pdo);
    }
}
