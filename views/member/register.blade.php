		<div class="container">
			<div class="row">
				<div class="span9">
					<div class="register">
						<div class="titleHeader clearfix">
							<h3>Create New Account</h3>
						</div><!--end titleHeader-->

						{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
							<div class="legend">&nbsp;&nbsp;&nbsp;&nbsp;Personal Informations</div>

							<div class="control-group">
								<label class="control-label" for="inputFirstName">Nama: <span class="text-error">*</span></label>
								<div class="controls">
									<input type="text" id="inputFirstName" name="nama" value="{{Input::old('nama')}}" required>
									<!-- <span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span> -->
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<label class="control-label" for="inputEMAdd">E-Mail : <span class="text-error">*</span></label>
								<div class="controls">
									<input type="text" id="inputEMAdd" name="email" value="{{Input::old('email')}}" required>
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<label class="control-label" for="inputTele">Telepon: <span class="text-error">*</span></label>
								<div class="controls">
									<input type="text" id="inputTele" name="telp" value="{{Input::old('telp')}}" required>
								</div>
							</div><!--end control-group-->

							<div class="legend">&nbsp;&nbsp;&nbsp;&nbsp;Delivery Informations</div>

							<div class="control-group">
								<label class="control-label" for="inputFirstAdd">Alamat: <span class="text-error">*</span></label>
								<div class="controls">
									<textarea class="span6" name="alamat" required>{{Input::old("alamat")}}</textarea>
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<label class="control-label" for="inputPostCode">Kode Pos : <span class="text-error">*</span></label>
								<div class="controls">
									<input type="text" id="inputPostCode" name="kodepos" value="{{Input::old('kodepos')}}" required>
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<div class="control-label">Negara: <span class="text-error">*</span></div>
								<div class="controls">
									{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old('negara'), array('required', 'id'=>"negara", 'data-rel'=>"chosen",' class'=>"span3"))}}
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<div class="control-label">Provinsi: <span class="text-error">*</span></div>
								<div class="controls">
									{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"), array('required', 'id'=>"provinsi", 'data-rel'=>"chosen", 'class'=>"span3"))}}
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<div class="control-label">Kota: <span class="text-error">*</span></div>
								<div class="controls">
									{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"), array('required'=>'','id'=>'kota', 'class'=>'span3'))}}
								</div>
							</div><!--end control-group-->

							<div class="legend">&nbsp;&nbsp;&nbsp;&nbsp;Set Your Password</div>

							<div class="control-group">
								<label class="control-label" for="inputPass">Password: <span class="text-error">*</span></label>
								<div class="controls">
									<input type="password" id="inputPass" name="password" required>
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<label class="control-label" for="inputConPass">Re-Type Password: <span class="text-error">*</span></label>
								<div class="controls">
									<input type="password" id="inputConPass" name="password_confirmation" required>
								</div>
							</div><!--end control-group-->

							<hr>

							<div class="control-group">
								<label class="control-label" for="inputSecondAdd">Kode Captcha: <span class="text-error">*</span></label>
								<div class="controls">
									{{ HTML::image(Captcha::img(), 'Captcha image') }}
									{{Form::text('captcha','',array('placeholder'=>'Masukkan kode captcha'))}}
								</div>
							</div><!--end control-group-->

							<div class="control-group">
								<div class="controls">
									<label class="checkbox">
										<input name="readme" value="1" type="checkbox" checked> Saya telah membaca dan menyetujui <a href="{{URL::to('service')}}" target="_blank"><b>Syarat dan Ketentuan</b></a> di {{Theme::place('title')}}
									</label>
									<br>
									<button type="submit" class="btn btn-primary">Register</button>
								</div>
							</div><!--end control-group-->
						{{Form::close()}}<!--end form-->
					</div><!--end register-->
				</div><!--end span9-->

				<div class="span3">
					<div class="titleHeader clearfix">
						<h3>Account</h3>
					</div><!--end titleHeader-->
					<ul class="unstyled my-account">
						<li><a class="invarseColor" href="{{URL::to('member')}}"><i class="icon-caret-right"></i> Login </a></li>
						<li><a class="invarseColor" href="{{URL::to('member/create')}}"><i class="icon-caret-right"></i> Register</a></li>
						<li><a class="invarseColor" href="{{URL::to('member')}}"><i class="icon-caret-right"></i> My Account</a></li>
						<li><a class="invarseColor" href="{{URL::to('member')}}"><i class="icon-caret-right"></i> Order History</a></li>
					</ul>
				</div><!--end span3-->
			</div><!--end row-->
		</div><!--end conatiner-->