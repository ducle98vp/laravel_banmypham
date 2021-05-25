<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
		$categories = Category::paginate(3);

    	return view('admin.categories.index', compact('categories'));
	}

	public function edit($id)
	{
		$category = Category::findOrFail($id);

		return view('admin.categories.edit',compact('category'));
	}

	public function update(Request $request,$id)
	{
		$category = Category::findOrFail($id);
		$category->name = $request->input('name');
		$category->save();
		$request->session()->flash('success', 'Cập nhật danh mục thành công');

		return redirect()->route('categories.index');
	}

	public function create()
	{
		return view('admin.categories.create');
	}

	public function store(Request $request)
	{
		$arr_insert=[
			'name' => $request->input('name'),
		];

		$is_insert = Category::insert($arr_insert);

		if($is_insert)
        {
            $request->session()->flash('success','Thêm mới danh mục thành công');
        } else
        {
            $request->session()->flash('error','Thêm mới thất bại');
		}
		
		return redirect()->route('categories.index');
	}

	public function delete(Request $request, $id)
	{
		$category = Category::findOrFail($id);
		$category->delete();
		$request->session()->flash('success','Xóa danh mục thành công');

		return redirect()->route('categories.index');
	}

	
}
