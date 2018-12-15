@extends('layout.main')
@section('content')
<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
            Hey! Welcome to Lab Store
        </strong>
    </h2>
    <br>
    <a href="{{url('/Labs')}}"><button class="button large">Check out My Laptops</button></a>
</section>
<br/>
<div class="subheader text-center">
    <h2>
        Lab Store Latest Laptops
    </h2>
</div>

<!-- Latest SHirts -->
<div class="row">
    @forelse($shirts->chunk(4) as $chunk)
        @foreach($chunk as $shirt)
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="/lab/{{$shirt->id}}">
                    <img src="{{url('images',$shirt->image)}}"/>
                </a>
            </div>
            <a href="/lab/{{$shirt->id}}">
                <h3>
                    {{$shirt->name}}
                </h3>
            </a>
            <h5>
                ${{$shirt->price}}
            </h5>
            <p>
                {{$shirt->description}}
            </p>
        </div>
    </div>
        @endforeach
        @empty
        <h3> No Products To Preview</h3>
    @endforelse
</div>
<!-- Footer -->
<br>
    @endsection