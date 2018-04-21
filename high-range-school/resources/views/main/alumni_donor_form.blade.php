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

<section class="profile_sec">
	<h1 class="page_head">
			donor form
		</h1>
	<div class="container">
		<div class="page_inner">
		
		
		<div class="aluni_inner alumni_logins">
			<div class="alumni_form">
					<h1 class="form_heads">
								login
							</h1>
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
		
		
			<div class="manage_committe">
				<p class="donor_thank">
					We gratefully acknowledge the voluntary donations by the following Old Students for the Website, Awards and trophies and Scholarships.
				</p>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<th>donated by</th>
							<th>Date</th>
							<th>amount (INR)</th>
							<th>purpose</th>
						</thead>
						<tbody>
							<tr>
								<td>
									Mr. Jiju.M.Paul  &  Mr. Priju Jacob
								</td>
								<td>
									08-04-2009
								</td>
								<td>
									2000
								</td>
								<td>
									Trophies
								</td>
							</tr>
							<tr>
								<td>
									Mr. Prasath.T
								</td>
								<td>
									09-04-2009
								</td>
								<td>
									5000
								</td>
								<td>
									Trophies
								</td>
							</tr>
							<tr>
								<td>
									Mr. Jiju.M.Paul  &  Mr. Priju Jacob
								</td>
								<td>
									08-04-2009
								</td>
								<td>
									2000
								</td>
								<td>
									Trophies
								</td>
							</tr>
							<tr>
								<td>
									Mr. Renjith.P.Raju & Mr. Sanjith.P.Raju
								</td>
								<td>
									 20-04-2009
								</td>
								<td>
									5000
								</td>
								<td>
									Trophies
								</td>
							</tr>
							<tr>
								<td>
									Mrs. Sindhu Mathew &  Mr. Sibu Mathew
								</td>
								<td>
									20-04-2009
								</td>
								<td>
									5000
								</td>
								<td>
									Trophies
								</td>
							</tr>
							<tr>
								<td>
									Mr. Venkatasubramanian
								</td>
								<td>
									20-04-2009
								</td>
								<td>
									2000
								</td>
								<td>
									Trophies
								</td>
							</tr>
							<tr>
								<td>
									Mr. Mahendra Mullath &  Mr. Manoj Mullath
								</td>
								<td>
									22-09-2009
								</td>
								<td>
									10,000
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mr. Jeevan Raj
								</td>
								<td>
									13-11-2009
								</td>
								<td>
									1000
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mr. Ganesan.M
								</td>
								<td>
									15-11-2009
								</td>
								<td>
									20,000
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mr. Jiju.M.Paul  &  Mr. Priju Jacob
								</td>
								<td>
									08-04-2009
								</td>
								<td>
									2000
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mr. Ravishankar
								</td>
								<td>
									15-11-2009
								</td>
								<td>
									20,000
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mrs. Meena Swamy
								</td>
								<td>
									06-11-2009
								</td>
								<td>
									1500
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mr. Gaurav Bhardwaj
								</td>
								<td>
									27-02-2010
								</td>
								<td>
									5000
								</td>
								<td>
									Best Sports Persons
								</td>
							</tr>
							<tr>
								<td>
									Mr. Abhishek Bhardwaj
								</td>
								<td>
									 27-02-2010
								</td>
								<td>
									50,000
								</td>
								<td>
									Scholarship
								</td>
							</tr>
							<tr>
								<td>
									Mr. Jeevan Raj
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mrs. Meena Swamy
								</td>
								<td>
									06-11-2009
								</td>
								<td>
									1500
								</td>
								<td>
									Website
								</td>
							</tr>
							<tr>
								<td>
									Mr.Stephen 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Sanjith Raju 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Reeves Paul
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Rhinoj John
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Jiffy 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Anand 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Aron Vijayakar 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Renjith 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Sibu
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Sannoe 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Prem Anand
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Ms. Kavitha 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Ms. Linsa 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Ms.Parvathy
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Shoban
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Senthil 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Ramasubramanian & Mr. Lakshmanan
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Ms. Blessy  
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Tintu
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Anish P Varghese
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									2000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Davidson
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr.Jagadheesh 
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Ms. Anjali
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									1000
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Ms. Anna Babu
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							<tr>
								<td>
									Mr. Ezra Kanavalli
								</td>
								<td>
									21-10-2012
								</td>
								<td>
									500
								</td>
								<td>
									OSA  Meet - 21st Oct 2012
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<p class="thanks_bott">
					thankyou verymuch ladies and gentlemen !!
				</p>
			</div>
			
			
			
			
			</div>
	</div>
</section>

@include('main.footer')



</body>
</html>