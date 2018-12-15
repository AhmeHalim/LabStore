@extends('layout.main')

@section('content')

    <div class="row">

        <h3>Cart Items</h3>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        {!! Form::open(['route'=>['cart.update',$cartItem->rowId],'method'=>'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">

                    </td>

                    <td>
                        <input  style="float: left" type="submit" class="button success small" value="OK">
                        {!! Form::close() !!}
                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" class="button alert small" value="Delete">
                        </form>
                    </td>
                </tr>

            @empty
                <tr>No Carts Found</tr>
            @endforelse
            <tr>
                <td></td>
                <td>
                    Tax : ${{Cart::tax()}}<br/>
                    Sub Total: ${{Cart::subtotal()}}<br/>
                    Grand Total: ${{Cart::total()}}
                </td>
                <td>Items: {{Cart::count()}}</td>
                <td></td>

            </tr>
            </tbody>
        </table>
        <a  href="{{route('checkout.shipping')}}" class="button">Check Out</a>
    </div>
    @endsection