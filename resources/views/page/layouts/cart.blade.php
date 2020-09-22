@extends('page.layouts.main')
@section('content')
<script type="text/javascript">
    function updateCart(rowId,quality)
    {
        $.get(
            "{{Route('cart.update')}}",
            {quality:quality,rowId:rowId},
            function()
            {
                location.reload();
            }
        );
    }
</script>
<!-- breadcrumbs area start -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="index.html">Home</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Shopping Cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- Shopping Table Container -->
<div class="cart-area-start">
    <div class="container">
    <form method="POST" action="{{Route('cart.update')}}">
        <!-- Shopping Cart Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Product name</th>
                                <th>Edit</th>
                                <th>Unit Price</th>
                                <th>Quality</th>
                                <th>Subtotal</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                <a href="#"><img src="/assets/uploads/{{$product->options->avatar}}" class="img-responsive" alt=""/></a>
                                </td>
                                <td>
                                <h6>{{$product->name}}</h6>
                                </td>
                                <td><a href="#">Edit</a></td>
                                <td>
                                <div class="cart-price">{{$product->price}}đ</div>
                                </td>
                                <td>
                                    
                                    <input type="number" value="{{$product->qty}}" name="quality" onchange="updateCart('{{$product->rowId}}',this.value)">
                                    
                                </td>
                                <td>
                                <div class="cart-subtotal">{{$product->price*$product->qty}}đ</div>
                                </td>
                            <td><a href="{{Route('cart.delete',$product->rowId)}}"><i class="fa fa-times"></i></a></td>
                            </tr>
                            @endforeach
                           
                            <tr>
                                <td class="actions-crt" colspan="7">
                                    <div class="">
                                        <div class="col-md-4 col-sm-4 col-xs-4 align-left"><a class="cbtn" href="#">Continue Shopping</a></div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 align-right"><a class="cbtn" href="#">CLEAR SHOPPING CART</a></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
        <!-- Shopping Cart Table -->
        <!-- Shopping Coupon -->
        <div class="row">
            <div class="col-md-12 vendee-clue">
            
                <!-- Shopping Estimate -->
                <div class="shipping coupon">
                    <form action="{{Route('cart.checkout')}}" method="POST">
                        {{ csrf_field() }}
                    <h5>Estimate Shipping and Tax</h5>
                    <p>Enter your destination to get a shipping estimate.</p>
                    
                        <div class="shippingTitle"><p>Họ Tên</p></div>
                        <div class="selectOption">
                            <input type="text" name="name">
                            @error('name')
								<p style="color: red">{{$message}}</p>
							@enderror
                        </div>
                        <div class="shippingTitle"><p>Địa chỉ</p></div>
                        <div class="selectOption">
                            <input type="text" name="address">
                            @error('address')
								<p style="color: red">{{$message}}</p>
							@enderror
                        </div>
                        <div class="shippingTitle"><p>email</p></div>
                        <div class="selectOption">
                            <input type="email" name="email">
                            @error('email')
								<p style="color: red">{{$message}}</p>
							@enderror
                        </div>
                        <div class="shippingTitle"><p>Phone</p></div>
                        <div class="selectOption">
                            <input type="text" name="phone">
                            @error('phone')
								<p style="color: red">{{$message}}</p>
							@enderror
                        </div>
                        <div class="shippingTitle"><p>Ghi chú</p></div>
                        <div class="selectOption">
                            <textarea name="note"></textarea>
                            @error('note')
								<p style="color: red">{{$message}}</p>
							@enderror
                        </div>
                        <ul>
                            <li  class="shippingTitle">Subtotal:    <span>{{cart::total(0,".","")}}đ</span></li>
                                {{-- <li class="cartSubT">Grand total:    <span>$50.00</span></li> --}}
                        </ul>
                        <div class="selectOption">
                            <input type="submit" value="Checkout">
                        </div>
                    </form>
                </div>
                <!-- Shopping Estimate -->
                {{-- <!-- Shopping Code -->
                <div class="shipping coupon hidden-sm">
                    <div class=""><h5>Discount Codes</h5></div>
                    <p>Enter your coupon code if you have one.</p>
                    
                        <input type="text" class="coupon-input">
                        <button class="pull-left" type="submit">APPLY COUPON</button>
                    
                </div>
                <!-- Shopping Code --> --}}
                <!-- Shopping Totals -->
                {{-- <div class="shipping coupon cart-totals">
                    <ul>
                    <li class="cartSubT">Subtotal:    <span>{{Cart::total()}}</span></li>
                        <li class="cartSubT">Grand total:    <span>$50.00</span></li>
                    </ul>
                    <button class="pull-left" type="submit">checkout</button>
                    
                </div> --}}
                <!-- Shopping Totals -->
                
            </div>
        </div>
        <!-- Shopping Coupon -->
    </div>	
</div>
<!-- Shopping Table Container -->
@endsection