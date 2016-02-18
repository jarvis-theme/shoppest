<div class="row">
	<div class="span6">
		<div class="titleHeader clearfix">
			<h2>Reset Password &nbsp;</h2>
		</div>
		{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-register'))}}
			<div class="registerbox">
				<fieldset>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Password Baru:</label>
						<div class="controls">
							<input type="password" name="password" placeholder="password baru" class="input-xlarge" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Ulangi Password Baru:</label>
						<div class="controls">
							<input type="password" name="password_confirmation" placeholder="ulangi password baru" class="input-xlarge" required>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="controls">
				<button type="Submit" class="btn btn-primary">Ubah Password</button>
				<a class="btn" href="{{URL::to('member')}}">Login</a>
			</div>
		{{Form::close()}}
	</div>
	<div class="span3 pull-right">
		@foreach(vertical_banner() as $item)
		<div class="banners">
			<a href="{{URL::to($item->url)}}">
				{{HTML::image(banner_image_url($item->gambar),'Info Promo')}}
			</a>
		</div>
		@endforeach
	</div>
</div>