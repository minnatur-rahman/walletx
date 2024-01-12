<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('category.index');
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'rank' => 'required|integer|min:0',
            'description' => 'required|string|max:255'
        ],[
            'name.required' => 'name is required',
            'rank.required' => 'rank is required',
            'description.required' => 'description is required'
        ]);
    }
}
