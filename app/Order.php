<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Order extends Model
{
    //
    protected $fillable=['total','delivered'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total')->withTimestamps();
    }


    public static function createOrder()
    {
        // create the order
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);

        //insert cart items to table order

        $cartItems=Cart::content(); // معناها هات محتوي ال cart وحطه في متغير

        foreach ($cartItems as $cartItem)
        {
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty ,
                'total'=>$cartItem->qty *$cartItem->price
            ]);  // orderItems function located at order model
        }
        return "Order Is Completed";
    }
}
