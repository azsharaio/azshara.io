<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showWisdom()
    {
        $wisdoms = array(
            array('风住尘香花已尽，物是人非事事休。','宋•李清照•《武陵春•春晚》'),
            array('取次花丛懒回顾，半缘修道半缘君。','唐•元稹•《离思》'),
            array('不忘初心，方得始终','《华严经》')
        );

        $cs = rand(0,count($wisdoms)-1);
        $wisdom = $wisdoms[$cs];
        $title = $wisdom[0];
        $tail = $wisdom[1];
        return view('welcome',compact('title','tail'));
    }
}
