@extends('admin.layout.admin')
@section('content')
    <h3>Products</h3>
   <ul>
       @forelse($products as $product)
       <li>
           <h4>Product Name:{{$product->name}}</h4>
           <h4>Category:{{count($product->category)?$product->category->name:"Not Available"}}</h4>
           <form action="{{route('product.destroy',$product->id)}}" method="POST">
                {{csrf_field()}}
               {{method_field('DELETE')}}
               <input type="submit" value="Delete" class="btn btn-sm btn-danger">
           </form>
       </li>
           @empty
           <h3>No Products</h3>
           @endforelse
   </ul>
    @endsection