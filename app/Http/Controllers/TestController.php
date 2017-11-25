<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nayjest\Grids\Grid;


class TestController extends Controller
{

    public function examplea()
    {
        $cfg = [
            'src' => 'App\User',
            'columns' => [
                'id',
                'name',
                'email',
            ]
        ];
        $grid = Grids::make($cfg);
        $text = "<h1>Basic grid example</h1>";
        return view('demo.default', compact('grid', 'text'));
    }
}