

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="row total-header-section">
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <div class="total-section text-center">
                    <p>Total: <span class="text-peach-pink">PKR {{ $total }}</span></p>
                </div>
            </div>

            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <div class="row cart-detail">
                        <p>{{ $details['title'] }}</p>
                        <span class="price text-peach-pink">PKR {{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
