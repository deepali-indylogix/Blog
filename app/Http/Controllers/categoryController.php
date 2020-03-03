<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class categoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //fetch data
    public function index() {
        $result = Category::all();
        $result = Category::paginate(5);
        return view( 'Category/view_category', compact('result') );
    }

    //view page
    public function create()
    {
        return view('Category/add_category');
    }

    //insert data
    public function store(Request $request) {

        $request->validate([
            'category_name'=>'required',
        ]);
        $cat = new Category;
        $cat->category_name = $request->category_name;
        $cat->save();
        return redirect('/category/view')->with('success', 'Category Added!');
    }

    public function show($id) {
        echo 'show';
    }
    
    // edit data
    public function edit($id) {
        $catt = Category::find($id);
        return view('/Category/edit_category', compact('catt') );
    }

    //update data
    public function update(Request $request, $id) {
        $cat = Category::find($id);
        $cat->category_name = $request->category_name;
        $cat->save();
        return redirect('/category/view')->with('success', 'Category Updated!');
    }
    
    //delete data
    public function destroy($id) {
        Category::find($id)->delete();
        return redirect('/category/view')->with('success', 'Category deleted!');
    }

}
