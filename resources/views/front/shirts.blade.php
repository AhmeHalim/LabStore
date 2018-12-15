@extends('layout.main')
@section('title','Labs')
@section('content')
<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    @forelse($shirts as $shirt)
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
        @empty
        <h3> No Product To Preview</h3>
        @endforelse
</div>

@endsection