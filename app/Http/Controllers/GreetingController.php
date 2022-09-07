<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function ito\greeting;

class GreetingController extends Controller
 {
    public function greeting($id) {
        //単純なあいさつ
        if ($id === 'morning') {
            $time = '朝';
            $greeting = 'おはようございます';
        }
        if ($id === 'afternoon') {
            $time = '昼';
            $greeting = 'こんにちは';
        }
        if ($id === 'evening') {
            $time = '夕方';
            $greeting = 'こんばんは';
        }
        if ($id === 'nigth') {
            $time = '夜';
            $greeting = 'おやすみ';
        }
        return view('greeting', ['time' => $time, 'greeting' => $greeting]);
    }

    //URLによってメッセージが変わる
    public function message($id) {
        return view('message', ['id' => $id]);
    }

    //ランダムなメッセージを表示する
    public function random() {
        $arr = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $index = array_rand($arr);
        return view('random', ['arr' => $arr[$index]]);
    }
}
