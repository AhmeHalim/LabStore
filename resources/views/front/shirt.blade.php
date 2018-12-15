@extends('layout.main')

@section('title','Lab')
@section('content')

<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    <div class="small-5 small-offset-1 columns">
        <div class="item-wrapper">
            <div class="img-wrapper single-wrapper">
                <a href="#">
                    <img src="{{url('images',$products->image)}}"/>
                </a>
            </div>
        </div>
    </div>
    <div class="small-6 columns">
        <div class="item-wrapper">
            <h3 class="subheader">
                <span class="price-tag">${{$products->price}}</span> {{$products->description}}
            </h3>
            <div class="row">
                <div class="large-12 columns">

                    <a href="{{route('cart.addItem',$products->id)}}" class="button  expanded">Add to Cart</a>
                </div>
            </div>
            <p class="text-left subheader"><small>* Designed by <a href="ahmedhalim467@gmai.com">Ahmed Halim</a></small></p>

        </div>

        <div class="item-wrapper">
            <a href="#" class="button" data-open="product-review-modal">Write a Review</a>
            @include('front.review_form')
        </div>
</div>
</div>


@endsection