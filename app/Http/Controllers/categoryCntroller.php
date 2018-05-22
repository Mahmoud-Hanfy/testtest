<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
class categoryCntroller extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function show()
    {
        $categories=DB::table('categories')->get();
        return view('admin.category.show',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $categories=new Category();
        $categories->name=$request->name;
        $categories->save();
        return redirect()->route('admin.category.index');
    }
    public  function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request ,Category $category)
    {
        $category->name=$request->name;
        $category->save();

        return redirect()->route('admin.category.index');

    }
    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
