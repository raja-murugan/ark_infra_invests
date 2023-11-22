@extends('layout.backend.auth')

@section('content')


<button class="btn btn-success" id="rzp-button1">Pay</button>
<a class="btn btn-primary" href="{{ route('customer.index') }}">Back</a>
<form name="razorpayform" action="{{route('customer.paymentverify')}}" method="POST">
                           @csrf
                              <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" >
                              <input type="hidden" name="razorpay_signature" id="razorpay_signature" >
                              <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" >
                           </form>




<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "{{$response['razorpayId']}}", // Enter the Key ID generated from the Dashboard
    "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "{{$response['currency']}}",
    "name": "{{$response['name']}}",
    "description": "{{$response['description']}}",
    "image": "https://example.com/your_logo",
    "order_id": "{{$response['orderId']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        //alert(response.razorpay_payment_id);
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)

        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
        document.getElementById('razorpay_signature').value = response.razorpay_signature;
        document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
        document.razorpayform.submit();

    },
    "prefill": {
        "name": "{{$response['name']}}",
        "email": "{{$response['email']}}",
        "contact": "{{$response['ContactNumber']}}"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
window.onload = function(){
   document.getElementById('rzp-button1').click();
};
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

@endsection