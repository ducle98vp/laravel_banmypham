<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Traits\Image;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use Image;

    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(4);

        $arr=[//dua du lieu vao 1 mang
            'products'=>$products,
            'categories'=>$categories
        ];

        return view('admin.products.index',$arr);
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $rules=[
            'name'=>'bail|required|min:3|max:255',
            'price'=>'required',
            'avatar'=>'image',
            'summary'=>'bail|required|max:255',
            'quality'=>'bail|required|max:11',
            'content'=>'required'
        ];
        $messages=[
            'name.required'=>'Name ko được để trống',
            'name.min'=>'Name ít nhất 3 ký tự',
            'name.max'=>'Name không vượt quá 255 ký tự',
            'price.required'=>'Price không được để trống',
            'avatar.image'=>'avatar phải có dạng ảnh',
            'summary.required'=>'Summary không được để trống',
            'summary.max'=>'Summary ko vượt quá 255 ký tự',
            'quality.required'=>'Quality không được để trống',
            'quality.max'=>'Quality quá lớn vui lòng thử lại sau',
            'content.required'=>'Content không được để trống'
        ];
        $request->validate($rules,$messages);
        $avatar=$this->uploadImage($request->avatar);    
        $arr_insert=[
            'title'=>$request->name,
            'category_id'=>$request->category,
            'price'=>$request->price,
            'avatar'=>$avatar,
            'summary'=>$request->summary,
            'status'=>$request->status,
            'quality'=>$request->quality,
            'content'=>$request->content
        ];
        
        $is_insert=Product::insert($arr_insert);
        if($is_insert)
        {
            $request->session()->flash('success','Thêm mới sản phẩm thành công');
        }
        else
        {
            $request->session()->flash('error','Thêm mới thất bại');
        }
        
        return redirect()->route('products.index');
       
		
       
    }

    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::all();
        $arr=[
            'product'=>$product,
            'categories'=>$categories,
        ];
        
        return view('admin.products.edit',$arr);
        
    }

    public function update(Request $request ,$id)
    {
        $rules=[
            'name'=>'bail|required|min:3|max:255',
            'price'=>'required',
            'avatar'=>'image',
            'summary'=>'bail|required|max:255',
            'quality'=>'bail|required|max:11',
            'content'=>'required'
        ];

        $messages=[
            'name.required'=>'Name ko được để trống',
            'name.min'=>'Name ít nhất 3 ký tự',
            'name.max'=>'Name không vượt quá 255 ký tự',
            'price.required'=>'Price không được để trống',
            'avatar.image'=>'avatar phải có dạng ảnh',
            'summary.required'=>'Summary không được để trống',
            'summary.max'=>'Summary ko vượt quá 255 ký tự',
            'quality.required'=>'Quality không được để trống',
            'quality.max'=>'Quality quá lớn vui lòng thử lại sau',
            'content.required'=>'Content không được để trống'
        ];

        $request->validate($rules,$messages);

        $product=Product::find($id);
        if(!empty($request->avatar)) {
            $product->avatar= $this->uploadImage($request->avatar);
        }

        $product->title=$request->name;
        $product->category_id=$request->category;
        $product->price=$request->price;
        $product->summary=$request->summary;
        $product->status=$request->status;
        $product->quality=$request->quality;
        $product->content=$request->content;
        $is_update=$product->save();

        if($is_update) {
            $request->session()->flash('success','Cập nhật thành công');
        } else {
            $request->session()->flash('error','Cập nhật thất bại');
        }

        return redirect()->Route('products.index');
    }

    public function delete(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $request->session()->flash('success', 'Xóa thành công');

        return redirect()->route('products.index');
    }
}
