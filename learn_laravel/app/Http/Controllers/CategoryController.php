<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    //test
    public function showList(){
        $categories = Category::orderBy('id')->get();
        return view('layouts.index',[
            'categories' => $categories,
        ]);

    }
}

