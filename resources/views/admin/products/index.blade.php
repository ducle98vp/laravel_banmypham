
@extends('admin.layouts.main')
@section('title', 'Trang liệt kê')
@section('content')
@if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
<div><a href="{{route('products.create')}}" class="btn btn-primary">Thêm Mới</a></div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category_ID</th>
        <th scope="col">Price</th>
        <th scope="col">Quality</th>
        <th scope="col">Avatar</th>
        <th scope="col">Summary</th>
        <th scope="col">Content</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      {{-- //lap danh sach san pham va in ra thuoc tinh --}}
        @foreach($products AS $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->title}}</td>
        <td>
          @foreach ($categories as $category)
          {{$category->id==$product->category_id ? $category->name :""}}
        @endforeach
      </td>
        <td>{{$product->price}}</td>
        <td>{{$product->quality}}</td>
        <td><img src='{{asset("assets/uploads/$product->avatar")}}' alt="" width="80px" height="80px"></td>
        <td>{{$product->summary}}</td>
        @php
            $status='';
        @endphp
        @switch($product->status)
            @case(0)
                @php($status='Disable')
                    
                
                @break
            @case(1)
                @php($status="Enable")
                @break
            @default
                
        @endswitch
        <td>{{$status}}</td>
        <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{route('products.delete',$product->id)}}" class="btn btn-danger">Delete</a></td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  {{$products->links()}}
  
@endsection