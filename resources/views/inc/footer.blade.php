@if(isset($returnTop))
<button onclick="topFunction()" id="topBtn" class="go-to-top" title="Go to top">
	<i class="fa fa-chevron-up" aria-hidden="true"></i>
</button>
<script src="{{URL::to('js/topBtn.js')}}"></script>
@endif
<div class="loading">
	<div class="boxLoading"></div>
</div>
<footer id="colophon" class="site-footer">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="footer-logo col-md-3">
					<a href="{{route('home')}}" title="IEEE PUASB" rel="home">
						<img src="{{ URL::to('images/ieee-logo.png') }}" alt="IEEEPUAsb_logo" title="IEEE PUA SB">
					</a>
				</div>
				<div class="footer-menu col-md-9">
					<div class="footer-links">
						<ul>
							<li style="color: white">About</li>
							<li><a href="{{route('about.contact')}}">Contact Us</a></li>
							<li><a href="{{route('about.committees')}}">Committees</a></li>
							<li><a href="{{route('about.benefits')}}">IEEE Beneftis</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul>
							<li style="color: white">Our Activities</li>
							<li><a href="{{route('schedule')}}">Schedule</a></li>
							<li><a href="{{route('gallery')}}">Gallery </a></li>
							<li><a href="{{route('mega.all')}}">Mega Events</a></li>
							<li><a href="{{route('events.all')}}">Events</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul>
							<li style="color: white">Blog</li>
							<li><a href="{{route('news.all')}}">Latest News</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul>
							<li style="color: white">Our Team</li>
							<li><a href="{{route('team.board')}}">Board</a></li>
							<li><a href="{{route('team.volunteers')}}">Volunteers</a></li>
							<li><a href="{{route('team.webmasters')}}">Web Masters</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul class="social">
							<li class="facebook">
								<a href="https://www.facebook.com/IEEEPUA" target="_blank">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li class="insta">
								<a href="https://www.instagram.com/ieeepua/" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
							<li class="youtube">
								<a href="https://www.youtube.com/channel/UCYQM_YQPQWen7LocvZ0XN2w" target="_blank">
									<i class="fa fa-play" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<p>Copyrights &copy; IEEE PUA SB | Web Development Committee 2020</p>
			</div>
		</div>
	</div>
</footer>


<script src="{{URL::to('js/jquery-3.2.0.min.js')}}"></script>
<script src="{{URL::to('js/wow.js')}}"></script>
<script src="{{URL::to('js/loading.js')}}"></script>
<script>
	new WOW().init();
</script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
{{--<script src="{{URL::to('js/bootstrap-datepicker.min.js')}}"></script>--}}
{{--<script src="{{URL::to('js/bootstrap-select.min.js')}}"></script>--}}
<script src="{{URL::to('js/bootstrap.offcanvas.min.js')}}"></script>

<script src="{{URL::to('js/sweetalert.min.js')}}"></script>

<script src="{{URL::to('js/admin_alerts.js')}}"></script>
@if(\Request::route()->getName() == 'about.contact')
	<script src="{{URL::to('js/messageValidateAndSend.js')}}"></script>
@endif
@if(\Request::route()->getName() == 'mega.event')
	<script src="{{URL::to('js/megaValidation.js')}}"></script>
@endif
@if(\Request::route()->getName() == 'event.register')
	<script src="{{URL::to('js/eventValidation.js')}}"></script>
	<script src="{{URL::to('design/adminlte')}}/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function () {
			$('#radio-1').iCheck({
				checkboxClass: 'icheckbox_square-yellow',
				radioClass: 'iradio_square-yellow',
				increaseArea: '20%' /* optional */
			});
			$('#radio-2').iCheck({
				checkboxClass: 'icheckbox_square-yellow',
				radioClass: 'iradio_square-yellow',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
@endif


@if(isset($script))
	@if(is_string($script))
		<script src="{{URL::to('js/'.$script.'.js')}}"></script>
	@elseif(is_array($script))
		@foreach($script as $s)
			<script src="{{URL::to('js/'.$s.'.js')}}"></script>
		@endforeach
	@endif
@endif


<script src="{{URL::to('js/maincustom.js')}}"></script>


@if (Session::has('success'))
    <script type="text/javascript">
      suc("{!! Session::get('success') !!}");
  	</script>
@endif

@if (Session::has('error'))
    <script type="text/javascript">
      err("{!! Session::get('error') !!}");
  	</script>
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
<script type="text/javascript">
	err("{{$error}}");
</script>
@endforeach

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif
