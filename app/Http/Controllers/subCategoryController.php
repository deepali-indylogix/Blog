<?php

namespace App\Http\Controllers;

use App\Sub_category;
use App\Category;
use Illuminate\Http\Request;

class subCategoryController extends Controller
{
      public function index() {
            $res = Sub_category::all();
            $res = Sub_category::paginate(5);
            return view('Sub_category/view_sub_category', compact('res'));
	}

	public function create() {
            $cat_name = Category::all();
            return view('Sub_category/add_sub_category', compact('cat_name'));
	}

	public function store(Request $request) {
            $request->validate([
                  'category_name'=>'required',
                  'sub_category_name'=>'required',
              ]);
            $sub = new Sub_category;
            $sub->category_name = $request->category_name;
            $sub->sub_category_name = $request->sub_category_name;
            $sub->save();
            return redirect('/sub_category/view')->with('success','Added sub category !!');
	}

	public function show($id) {
            // echo 'show';
	}

	public function edit($id) {
            $cat_name = Category::all();
            $edit_sub = Sub_category::find($id);
            return view('Sub_category/edit_sub_category', compact('edit_sub', 'cat_name'));
	}

	public function update(Request $request, $id) {
            $up_sub = Sub_category::find($id);
            $up_sub->category_name = $request->category_name;
            $up_sub->sub_category_name = $request->sub_category_name;
            $up_sub->save();
            return redirect('/sub_category/view')->with('success', 'Updated sub category !! ');
	}

	public function destroy($id) {
            Sub_category::find($id)->delete();
            return redirect('/sub_category/view')->with('success', 'Deleted sub category !!');
	}

}
