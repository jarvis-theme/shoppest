	<div class="row">
		<div class="span3">
			<div class="titleHeader clearfix">
				<h3>Account</h3>
			</div><!--end titleHeader-->
			<ul class="unstyled my-account">
				@if ( ! is_login() )
				<li><a class="invarseColor" href="{{URL::to('member')}}"><i class="icon-caret-right"></i> Login </a></li>
				<li><a class="invarseColor" href="{{URL::to('member/create')}}"><i class="icon-caret-right"></i> Register</a></li>
				@endif
				<li><a class="invarseColor" href="{{URL::to('member')}}"><i class="icon-caret-right"></i> My Account</a></li>
				<li><a class="invarseColor" href="{{URL::to('member')}}"><i class="icon-caret-right"></i> Order History</a></li>
			</ul>
		</div><!--end span3-->
		
		<div class="span5">
			<div class="titleHeader clearfix">
				<h3>Returning Customer</h3>
			</div><!--end titleHeader-->

			{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'login'))}}
				<div class="controls">
					<label for="email">Kode Order: <span class="text-error">*</span></label>
					<input type="text" id="email" class="input-block-level" placeholder="Kode Order" name="kodeorder" required>
				</div>

				<div class="controls">
					<button type="submit" class="btn btn-primary">Cari</button>
				</div>
			{{Form::close()}}
		</div><!--end span5-->

		<div class="span4">
			@if ( ! is_login() )
				<div class="titleHeader clearfix">
					<h3>New Customer</h3>
				</div><!--end titleHeader-->

				<div class="new-customer">
					<p>
					By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
					</p>
				<a href="{{URL::to('member/create')}}" class="btn">Create Account</a>
				</div>
			@else
				<div class="titleHeader clearfix">
					<!-- <h3>Banner</h3> -->
				</div><!--end titleHeader-->
				<div class="new-customer">
					@foreach(vertical_banner() as $item)
					<div class="banners">
						<a href="{{URL::to($item->url)}}">{{HTML::image(banner_image_url($item->gambar),'Info Promo')}}</a>
					</div>
					@endforeach
				</div><!--end:side--> 
			@endif
		</div><!--end span4-->
	</div><!--end row-->