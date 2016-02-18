	<div class="row">
		<div class="span8">
			<div class="google-map">
				@if($kontak->lat=='0' || $kontak->lng=='0')
					<iframe width="565" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
				@else
					<iframe width="565" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
				@endif
			</div><!--end google-map-->

			<div class="contact-us-form">
				<div class="titleHeader clearfix">
					<h3>Send Us Message</h3>
				</div><!--end titleHeader-->

				<form method="post" action="{{URL::to('kontak')}}">
					<div class="controls controls-row">
						 <input class="span4" type="text" name="namaKontak" placeholder="Your Name - Required" required>
						 <input class="span4" type="text" name="emailKontak" placeholder="Your E-Mail - Required" required>
					</div>
					<div class="controls">
						 <textarea class="span8" name="message" required placeholder="You Message..."></textarea>
					</div>
					<div class="controls">
						 <button type="submit" class="btn btn-primary pull-right">Send It</button>
					</div>
				</form><!--end form-->
			</div><!--end contact-us-form-->
		</div><!--end span8-->

		<div class="span4 callus">
			<div class="contact-info">
				<div class="titleHeader clearfix">
					<h3>Contact Information</h3>
				</div><!--end titleHeader-->

				<address>
					<strong><i class="icon-pushpin"></i> Address Info:</strong>
					<b>{{ Theme::place('title') }}</b>
					{{$kontak->alamat}}<br><!-- 
					<abbr title="Phone">P:</abbr> {{$kontak->telepon}} -->
				</address>

				<address>
					 <strong><i class="icon-volume-up"></i> Give Us a call on:</strong>
						{{$kontak->telepon}}
				</address>

				<address>
					 <strong><i class="icon-envelope-alt"></i> E-Mail Us on:</strong>
						<!-- <abbr title="Phone">for Support:</abbr> <a href="mailto:example@example.com">shopfine_no1@shopfine.com</a><br> -->
						<abbr title="Phone"></abbr> <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a><br>
				</address>

				<address>
					 <strong><i class="icon-pushpin"></i> Find Us on:</strong>
						<ol class="socials clearfix">
						@if($kontak->fb)
							<li>
								<a class="social-facebook" href="{{$kontak->fb}}"><i class="icon-facebook"></i></a>
							</li>
						@endif
						@if($kontak->tw)
						<li>
							<a class="social-twitter" href="{{$kontak->tw}}"><i class="icon-twitter"></i></a>
						</li>
						@endif
						@if($kontak->gp)
						<li>
							<a class="social-gooleplus" href="{{$kontak->gp}}"><i class="icon-google-plus"></i></a>
						</li>
						@endif
						@if($kontak->gp)
						<li>
							<a class="social-instagram" href="{{$kontak->ig}}"><i class="icon-instagram"></i></a>
						</li>
						@endif
						@if($kontak->pt)
						<li>
							<a class="social-pinterest" href="{{$kontak->pt}}"><i class="icon-pinterest"></i></a>
						</li>
						@endif
						@if($kontak->tl)
						<li>
							<a class="social-tumblr" href="{{$kontak->tl}}"><i class="icon-tumblr"></i></a>
						</li>
						@endif
					</ol>
				</address>
			</div><!--end contact-info-->
		</div><!--end span4-->
	</div><!--end row-->