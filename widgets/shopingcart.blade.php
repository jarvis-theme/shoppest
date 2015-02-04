<div class="btn-group">
    <button class="btn dropdown-toggle" data-toggle="dropdown">
        <i class="icon-shopping-cart"></i> 
        ({{Shpcart::cart()->total_items()}}) 
        <span class="caret"></span>
    </button>
    <div class="dropdown-menu cart-content pull-right">
        <table class="table-cart">
            <tbody>
                @foreach (Shpcart::cart()->contents() as $key => $cart)
                    <tr>
                        <td class="cart-product-info">
                            <a href="{{slugProduk($cart)}}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$cart['image'])}}" alt="product image"></a>
                            <div class="cart-product-desc">
                                <p><a class="invarseColor" href="#">{{$cart['name']}}</a></p>
                                <!-- <ul class="unstyled">
                                    <li>Available: Yes</li>
                                    <li>Color: Black</li>
                                </ul> -->
                            </div>
                        </td>
                        <td class="cart-product-setting">
                            <p><strong>{{ $cart['qty']}}x-{{ jadiRupiah($cart['price'])}}</strong></p>
                        </td>
                    </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td class="cart-product-info">
                    <a href="{{URL::to('checkout')}}" class="btn btn-small btn-primary">Checkout</a>
                </td>
                <td>
                    <h3>{{ jadiRupiah(Shpcart::cart()->total() )}}</h3>
                </td>
            </tr>
        </tfoot>
        </table>
    </div>
</div>