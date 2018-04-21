<!DOCTYPE html>
<html lang="en">
<head>
  <title>High Range School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{ Html::style('css/main/style.css') }}
  {{ Html::style('css/main/responsive.css') }}
  {{ Html::style('css/main/owl.carousel.min.css') }}
  {{ Html::style('css/main/hover-min.css') }}
  {{ Html::style('css/main/font-awesome.min.css') }}
</head>
<body>

@include('main.header')

<section class="profile_sec aluni_profile">
	<h1 class="page_head">
			new alumni registration
	</h1>
	<div class="container">
		<div class="page_inner aluni_inner">
                    @if(!Auth::user())
			<div class="alumni_form">
                            <form action="{{ url('/register') }}" method="post" content-type="x-www-urlencoded">
                                {{ csrf_field() }}
					<h1 class="form_heads">
								Personal Information
							</h1>
					<ul class="main_formbase">
						
                                            <li class="{{ $errors->has('name') ? ' has-error' : '' }}">
							<label>
								name <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                                            
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</span>
						</li>
						<li class="{{ $errors->has('name') ? ' has-error' : '' }}">
							<label>
								batch <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <select name="batch" class="batch form-control" value="{{ old('batch') }}">
                                                                <option value="">Select year</option>
								</select>
                                                                @if ($errors->has('batch'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('batch') }}</strong>
                                                                @endif
                                                            </span>
                                                        </span>
						</li>
						<li class="{{ $errors->has('name') ? ' has-error' : '' }}">
							<label>
								phone number <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="text" name="phone" calss="form-control" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
							</span>
						</li>
						<li class="{{ $errors->has('address_1') ? ' has-error' : '' }}">
							<label>
								address <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <textarea name="address_1" class="form-control">{{ old('address_1') }}</textarea>
                                                            @if ($errors->has('address_1'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('address_1') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('city') ? ' has-error' : '' }}">
							<label>
								city <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="text" name="city" value="{{ old('city') }}">
                                                            @if ($errors->has('city'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('city') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('pincode') ? ' has-error' : '' }}">
							<label>
								pincode <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="text" name="pincode" value="{{ old('pincode') }}">
                                                            @if ($errors->has('pincode'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('pincode') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('chapter') ? ' has-error' : '' }}">
							<label>
								chapter <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="text" name="chapter" value="{{ old('chapter') }}">
                                                            @if ($errors->has('chapter'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('chapter') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('address_2') ? ' has-error' : '' }}">
							<label>
								address <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <textarea name="address_2" class="form-control">{{ old('address_2') }}</textarea>
                                                            @if ($errors->has('address_2'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('address_2') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('alumni') ? ' has-error' : '' }}">
							<label>
								alumni type <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <select name="alumni">
                                                                    <option value="">
										select
									</option>
                                                                        @foreach($alumni_type as $type)
                                                                        <option value="{{ $type->types }}">
										{{ $type->types }}
									</option>
                                                                        @endforeach
								</select>
                                                            @if ($errors->has('alumni'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('alumni') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						
					</ul>
					
					<h1 class="form_heads">
								login information
							</h1>
					<ul class="main_formbase">
						
						<li class="{{ $errors->has('email') ? ' has-error' : '' }}">
							<label>
								email <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('password') ? ' has-error' : '' }}">
							<label>
								password <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="password" name="password" class="form-control">
                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
						<li class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label>
								conform password <span class="import"> *</span>
							</label>
							<span class="rite_form">
                                                            <input type="password" name="password_confirmation" class="form-control">
                                                            @if ($errors->has('confirm_password'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                </span>
                                                            @endif
							</span>
						</li>
					</ul>
					<h1 class="form_heads">
								user verification
							</h1>
					<ul class="main_formbase">
						
						<li>
							<label>
								Enter the verification code you see below <span class="import"> *</span>
							</label>
							<span class="rite_form">
								<input type="text">
							</span>
						</li>
					</ul>
					<p class="submit_alumni">
						<input type="submit" value="submit">
					</p>
				</form>
			</div>
                    @else
<!--        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
Hi, {{ Auth::user()->name }} You already Register with us..! 

                    @endif
		</div>
	</div>
</section>

@include('main.footer')

  <script>
    var arr = [
        '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2012', '2013', '2014', '2015', '2016', '2017',
    ];
    
    for(let arr_va of arr) {
        $('.batch').append('<option value="'+  arr_va +'">'+  arr_va +'</option>');   
    }
    
  </script>
</body>
</html>