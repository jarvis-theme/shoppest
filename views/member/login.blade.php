
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>							
	{{Session::get('error')}}
</div>
@endif
@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>					
</div>
@endif
@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, email anda tidak ditemukan.</p>					
</div>
@endif	
@if($errors->all())
<div class="alert alert-error">
Kami menemukan error berikut:			
<ul>
@foreach($errors->all() as $message)

<li style="margin-left: 20px;">{{ $message }}</li>

@endforeach
</ul>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-error">
<h3>Kami menemukan error berikut:</h3>
<p>{{Session::get('error')}}</p>
</div>
@endif

<!-- ======================================================================== -->

<div class="container">

      <div class="row">

        <div class="span4">
          <div class="titleHeader clearfix">
            <h3>New Customer</h3>
          </div><!--end titleHeader-->

          <div class="new-customer">
            <p>
              By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
            </p>
            <a href="{{URL::to('member/create')}}" class="btn">Create Account</a>
          </div>
        </div><!--end span4-->


        <div class="span5">
          <div class="titleHeader clearfix">
            <h3>Returning Customer</h3>
          </div><!--end titleHeader-->

          {{Form::open(array('url'=>'member/login','method'=>'post','class'=>'login'))}}
            <div class="controls">
              <label for="email">Your E-Mail: <span class="text-error">*</span></label>
              <input type="text" id="email" class="input-block-level" name='email' value='{{Input::old("email")}}' required placeholder="example@example.com">
            </div>
            <div class="controls">
              <label for="pw">Your Password: <span class="text-error">*</span></label>
              <input type="password" id="pw" class="input-block-level" name="password" required placeholder="**************">
              <small><a href="#forget-pass" role="button" data-toggle="modal">Have you forget your password?</a></small>
            </div>

            <div class="controls">
              <label class="checkbox">
                  <input type="checkbox"> Remember Me
                </label>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form><!--end form-->
        </div><!--end span5-->

        <div id="forget-pass" class="modal hide fade" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
          <div class="modal-body">
            {{Form::open(array('url'=>'member/forgetpassword','method'=>'post','class'=>'form-inline'))}}
              <input type="text" name="recoveryEmail" value='{{Input::old("email")}}' class="span4" placeholder="Put your E-Mail...">

              <button type="submit" class="btn btn-primary">Recieve My PAssword</button>

              <button type="button" class="btn btn-small" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </form><!--end form-->
          </div><!--end modal-body-->
        </div><!--end modal-->


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


