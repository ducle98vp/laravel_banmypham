<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Support\Facades\DB;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $products=Cart::content();
        $arr=[
            'categories'=>$categories,
            'products'=>$products,
        ];
        return view('page.layouts.cart',$arr);
    }
    public function add(Request $request,$id)
    {
        $product = Product::find($id);

        Cart :: add ([ 
            'id' => $id , 
            'name' => $product->title , 
            'qty' => 1 , 
            'price' => $product->price , 
            'weight' => 0 , 
            'options' => [ 'avatar' => $product->avatar ]
        ]);

        return redirect()->Route('cart.index');
    }
    public function delete($id)
    {
        Cart::remove($id);

        return redirect()->Route('cart.index');
    }
    public function update(Request $request)
    {
        Cart::update($request->rowId,$request->quality);
    }
    public function checkout(Request $request)
    {
        $rules=[
            'name'=>'bail|required|max:255',
            'address'=>'required',
            'email'=>'bail|required|email|max:255',
            'phone'=>'bail|required',
            'note'=>'bail|required',
        ];

        $messages=[
            'name.required'=>'Họ tên ko được để trống',
            'name.max'=>'Họ Tên không vượt quá 255 ký tự',
            'address.required'=>'Địa chỉ không được để trống',
            'email.required'=>'Email không được để trống',
            'email.email'=>'Nhập đúng dịnh dạng email',
            'email.max'=>'Email ko vượt quá 255 ký tự',
            'phone.required'=>'Phone không được để trống',
            'note.required'=>'Note không được để trống'
        ];

        $request->validate($rules,$messages);
        DB::beginTransaction();
        try{
            $categories=Category::all();
            $order= new Order;
            $order->fullname=$request->name;
            $order->address=$request->address;
            $order->mobile=$request->phone;
            $order->email=$request->email;
            $order->note=$request->note;
            $order->price_total=intval(Cart::total(0,"",""));
            $order->save(); 
            
            $order_id=$order->id;
            $products = Cart::content();
            foreach($products as $product)
            {
                $order_detail= new Order_detail;
                $order_detail->order_id=$order_id;
                $order_detail->product_id=$product->id;
                $order_detail->quality=$product->qty;
                $order_detail->save();
                
            }
            DB::commit();
            Cart::destroy();
            $arr=[
                'categories'=>$categories,
                'order'=>$order,
            ];
            return view('page.layouts.successfully',$arr);
            
        }
        catch(Exception $e)
        {
            DB::rollback();
            throw $e;
        }
    }
}
