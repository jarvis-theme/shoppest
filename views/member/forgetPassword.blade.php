	<div class="row">
		<div class="span6">
			<div class="titleHeader clearfix">
				<h2>Lupa Password &nbsp;</h2>
			</div>
			{{Form::open(array('url'=>'member/forgetpassword','method'=>'post','class'=>'form-register'))}}
				<div class="registerbox">
					<fieldset>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span> Email:</label>
							<div class="controls">
								<input type="text" name="recoveryEmail" value="{{Input::old('email')}}" class="input-xlarge" required>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="controls">
					&nbsp;
					<button type="Submit" class="btn btn-primary">Reset Password</button>&nbsp;&nbsp;
					<a href="{{URL::to('member')}}">Login</a>
				</div>
			{{Form::close()}}
		</div>
		<div class="span3 pull-right">
			@foreach(vertical_banner() as $item)
			<div class="banners">
				<a href="{{URL::to($item->url)}}">
					<img src="{{banner_image_url($item->gambar)}}" alt="Info Promo" />
				</a>
			</div>
			@endforeach
		</div>
	</div><!--end:container-2-->