<?php

namespace humaneye\Simplecurd\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use humaneye\Simplecurd\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::orderBy('id','DESC')->get();
        return view('curd::app',compact('categorys'));
    }

    public function create()
    {
        return view('curd::create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:categories',
        ]);

        if ($validator->fails()) {
            
            return redirect('category-add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Category::create($request->all());
        return redirect('/category')->with('message','Category add successfully');
    }

    public function edit(Request $request,$id)
    {
        $category = Category::findOrFail($id);
        return view('curd::edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ];
        Category::where('id',$id)->update($data);
        return redirect('/category')->with('message','Category updated successfully');
    }

    public function delete(Request $request)
    {
        Category::where('id',$request->category_id)->delete();
        return redirect('/category')->with('message','Category deleted successfully');
    }
}
