@extends('admin.layout.admin')
@section('content')
        <h3>Orders</h3>
        <ul>
                @forelse($orders as $order)
                        <li>
                               <h4>Order by : {{$order->user->name}}</h4>
                               <h4>Total Price : {{$order->total}}</h4>
                                <form action="{{route('toggle.deliver',$order->id)}}" method="post" class="pull-right">
                                    {{csrf_field()}}
                                    <label for="delivered">Delivered</label>
                                    <input type="checkbox" name="delivered" value="1" {{$order->delivered==1?"checked":""}}>
                                    <input type="submit"value="submit" class="btn btn-xs btn-success">
                                </form>
                            <div class="clearfix"></div>
                            <hr>
                                <h5>Order Items</h5>
                                <table class="table table-hover table-bordered">
                                        <tr>
                                                <th>Name</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                        </tr>
                                        <tr>
                                                @foreach($order->orderItems as $item)
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->pivot->qty}}</td>
                                                <td>{{$item->pivot->total}}</td>
                                                        @endforeach
                                        </tr>
                                </table>
                        </li>
                        @empty
                                <h3>No Orders Found</h3>
                        @endforelse
        </ul>
    @endsection