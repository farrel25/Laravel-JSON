<?php

namespace App\Http\Controllers;

class JsonController extends Controller
{
    public function index()
    {
        $data = file_get_contents(base_path('public/json/pizza.json'));
        $dataArr = json_decode($data, true);
        $menus = $dataArr['menu'];
        return view('index', compact('menus'));
    }

    public function showJson()
    {
        $data = file_get_contents(base_path('public/json/pizza.json'));
        return $data;
    }
}
