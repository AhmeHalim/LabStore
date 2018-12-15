@component('mail::message')
# Order Shipped

Order has been shipped.
Total Price: {{$order->total}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{'Lab Store '}}
@endcomponent
