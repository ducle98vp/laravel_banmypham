@extends('page.layouts.main')
@section('content')

<h5>Thanh Toán thành công hàng sẽ được gửi đến địa chỉ {{$order->address}}</h5>
<h6>Số tiền cần thanh toán:{{$order->price_total}}</h6>
<h6><a href="{{Route('home.index')}}">Nhấp vào đây để tiếp tục mua hàng</a></h6>
@endsection