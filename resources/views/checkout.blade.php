<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href={{url("css/utilities.css")}}>
    <link rel="stylesheet" href={{url("css/cart.css")}}>
    <link rel="stylesheet" href={{url("css/shipping-payment.css")}}>
</head>
<body>
{{-- HEADER --}}
@include('layouts/header-row1')

<div class="d-none d-md-block bg-peach-pink text-center py-4" style="font-size: 2.5rem; font-weight: bold; letter-spacing: 2px;">
    Checkout
</div>

<section id="checkout">
    <div class="container-fluid my-3">
        <form action="{{url('order-confirm')}}" method="post"> 
            <div class="row">
                <div class="col-12 col-md-8">
                        @csrf
                        <div class="row">
                            <div class="col-12" id="shipping-address">
                                <h3>Shipping Address</h3>
                                <label class="d-block" for="">Full Name</label>
                                <input class="d-block" type="text" name="full-name" value="{{Auth::user()->first_name}}" readonly/>

                                <div class="d-flex">
                                <div class="w-50">
                                    <label class="d-block" for="">State:</label>
                                        <select name="state" id="state" class="red">
                                            <option>Select</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Sindh">Sindh</option>
                                            <option value="KPK">KPK</option>
                                            <option value="Balochistan">Balochistan</option>
                                            <option value="FATA">FATA</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('state')
                                                {{$message}}
                                            @enderror 
                                        </span>
                                    </div>

                                    <div class="w-50">
                                        <label class="d-block" for="">City:</label>
                                        <select id="city" name="city">
                                            <option>Select</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('city')
                                                {{$message}}
                                            @enderror 
                                        </span>
                                    </div>
                                </div>


                                <label class="d-block" for="">Street Address:</label>
                                <span class="text-danger">
                                    @error('street-house')
                                    @php $message = 'Please enter address'; @endphp
                                        {{$message}}
                                    @enderror 
                                </span>
                                <input class="d-block" type="text" placeholder="Street Name and House Number"
                                name="street-house">
                                <input class="d-block" type="text" placeholder="Apartment, suite, unit etc. (optional)" name="extra">
                               

                                <label class="d-block" for="">Phone Number:</label>
                                <span class="text-danger">
                                    @error('phone-number')
                                    @php $message = 'Please enter phone number'; @endphp
                                        {{$message}}
                                    @enderror 
                                </span>
                                <input class="d-block" type="tel" name="phone-number">
                                

                                <label class="d-block" for="">Email:</label>
                                <span class="text-danger">
                                    @error('email')
                                    @php $message = 'Please enter email'; @endphp
                                        {{$message}}
                                    @enderror 
                                </span>
                                <input class="d-block w-90" type="email" name="email" value="{{Auth::user()->email}}" readonly>
                                
                            </div>
                            <div class="col-12" id="payment-method">
                                <h3>Payment Method:</h3>
                                <span class="text-danger">
                                    @error('payment-method')
                                    @php $message = 'Please select payment method'; @endphp
                                        {{$message}}
                                    @enderror 
                                </span>
                                <ul>
                                    <li> <input type="radio" value="COD" name="payment-method"><span>Cash on Delivery</span></li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div id="cart-summary">
                            @include('layouts/minicart')
                        </div>
                    <button class="btn btn-dark">Confirm Order</button>
                </div>
            </div>
        </form>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
     <script>
        jQuery(document).ready(function($){
    var optionSets ={
	    Punjab:['Lahore','Faisalabad','Multan', 'Gujrat', 'Sargodha', 'Sialkot'],
		KPK:['Peshawer','Kohat','Abottabad', 'Nowshera', 'Chitral'],
		Sindh:['Karachi','Jacobabad','Hyderabad', 'Sukkur'],
        Balochistan:['Quetta','Chaman','Gwadar', 'Turbat'],
        FATA:['FATA']
    }
    { 
     	let appendString ='<option value="Select">Select</option>';
        for (let opt  in optionSets){  appendString+= '<option value="'+opt+'">'+opt+'</option>'}
    	$('#state').html(appendString);
    }
    $('#state').on('change', function (e)  {
	    let selectedGroup = this.value;
 	    let optGroup = optionSets[selectedGroup];
	    let appendString ='<option value="Select">Select</option>';
	    if (selectedGroup) { optGroup.forEach(val => appendString+= '<option value="'+val+'">'+val+'</option>')}
	    $('#city').html(appendString);
    });
});
     </script>
</section>
</body>
</html>

