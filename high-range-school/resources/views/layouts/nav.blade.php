<div class="rite_inner">
		<div class="top_bar col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-4 collapse_bar">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 rite_img">
				<div class="rite_imgbase">
					<span class="admin_txt">
						{{ Auth::user()->name }}
					</span>
					<span class="admin_img"><img src="/images/man.png"></span>
					<ul class="logout_list">
                                            @if(Auth::guest())
						<li>
							<a href=" {{ url('/') }}">
								go to home
							</a>
						</li>
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                            @else
						<li>
							<a href="{{ url('/') }}">
								go to home
							</a>
						</li>
						<li>
							<a href="{{URL('/logout')}}">Logout</a>
						</li>
                                            @endif
					</ul>
				</div>
			</div>
			
		</div>
</div>