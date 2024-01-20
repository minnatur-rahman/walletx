<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::orderBy('rank')->get();
        return view('category.index', compact('categories'));
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
        try{
            Category::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'description' => $request->description,
                'rank' => $request->rank
            ]);
            return redirect(route('categories'))->with('success', 'Category create success');

        }catch(Exception $e){
            return back()->with('error', 'Category create error');
        }
    }
}
