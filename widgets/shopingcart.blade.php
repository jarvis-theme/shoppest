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
						<a href="#"><img src="{{product_image_url($cart['image'],'thumb')}}" alt="{{ $cart['name'] }}"></a>
						<div class="cart-product-desc">
							<p><a class="invarseColor" href="#">{{$cart['name']}}</a></p>
							<!-- <ul class="unstyled">
								<li>Available: Yes</li>
								<li>Color: Black</li>
							</ul> -->
						</div>
					</td>
					<td class="cart-product-setting">
						<p><strong>{{ $cart['qty']}}x - {{ price($cart['price'])}}</strong></p>
					</td>
				</tr>
				@endforeach
			</tbody>
			@if(Shpcart::cart()->total_items() > 0)
			<tfoot>
				<tr>
					<td class="cart-product-info">
						<a href="{{URL::to('checkout')}}" class="btn btn-small btn-primary">Checkout</a>
					</td>
					<td class="tr">
						<h3>{{ price(Shpcart::cart()->total() )}}</h3>
					</td>
				</tr>
			</tfoot>
			@else
			<tfoot>
				<tr>
					<td class="emptycart"><i>Keranjang belanja masih kosong.</i></td>
				</tr>
			</tfoot>
			@endif
		</table>
	</div>
</div>