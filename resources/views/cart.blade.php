<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <!-- HEADER -->
    @include('layouts/header-row1')
    <!-- HEADER -->

    <div class="d-none d-md-block bg-peach-pink text-center py-2 " style="font-size: 2.5rem; font-weight: bold; letter-spacing: 2px;">
        Cart
    </div>

  <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th class="text-center" style="width:40%">Book</th>
            <th style="width:15%">Price</th>
            <th style="width:10%">Quantity</th>
            <th style="width:25%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'];
                session()->put('total', $total);@endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs px-5"><img src="{{ $details['img_link'] }}" width="" height="100" class="mx-auto img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['title'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">PKR {{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{bcmul($details['quantity'], $details['price'])}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-sm remove-from-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total PKR {{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-peach-pink"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <a id="checkout" href=""><button class="btn btn-dark" onclick="checkCart()" >Checkout</button></a>
            </td>
        </tr>
    </tfoot>
</table>
  
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $(".update-cart").change(function (e) {
      e.preventDefault();

      var ele = $(this);

      $.ajax({
          url: "{{ url('update-cart') }}",
          type: "patch",
          data: {
              _token: '{{ csrf_token() }}', 
              id: ele.parents("tr").attr("data-id"), 
              quantity: ele.parents("tr").find(".quantity").val()
          },
          success: function (response) {
              window.location.reload();
          }
      });
  });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

    // checkout only when cart has items
    function checkCart() {
        @if(session()->get('cart') == null)
            alert("No items in cart!")
        @else 
            document.getElementById("checkout").href="{{route('checkout')}}"; 
            return false;
        @endif
    }
</script>

  </body>
</html>