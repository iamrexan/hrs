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
			Mr. M.V. Narayanan
		</h1>
	<div class="container">
		<div class="page_inner">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 left_staff">
			<div class="main_staff">
				<div class="staff_img"><img src="images/g1.jpg"></div>
			</div>
			<div class="main_staff">
				<h1 class="staff_name">
					Mr. M.V. Narayanan
				</h1>
				<p class="staff_design">
					Teacher
				</p>
			</div>
			<div class="main_staff">
				<h1 class="staff_head">
					Educational qualification:
				</h1>
				<p class="staff_design">
					M.Sc, B.Ed
				</p>
			</div>
			<div class="main_staff">
				<h1 class="staff_head">
					Year of Joining HRS:
				</h1>
				<p class="staff_design">
					25 May 1992
				</p>
			</div>
			<div class="main_staff">
				<h1 class="staff_head">
					Subject taught:
				</h1>
				<p class="staff_design">
					Chemistry
				</p>
			</div>
			<div class="main_staff">
				<h1 class="staff_head">
					Achievements:
				</h1>
				<ul class="staff_achive">
					<li>
						Debate - represented HRS with Mrs. Meena K. Swamy - All Kerala competition organised by Jania Hasania School, Kochi - received a trophy and cash award
					</li>
					<li>
						Computers - My blog is at http://focuswell.blogspot.com
					</li>
					<li>
						Christian Devotional songs - Two CD's - Angeline Musiano, Munnar, Kerala - 2008 and 2009
					</li>
					<li>
						I am in the process of publishing a book of my Malayalam poems
					</li>
				</ul>
			</div>
			<div class="main_staff">
				<h1 class="staff_head">
					blog
				</h1>
				<p class="staff_design">
					<a href="http://focuswell.blogspot.com">http://focuswell.blogspot.com</a>
				</p>
			</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 rite_staff">
				<div class="side_contact">
				<h1 class="staff_contact house_staff">
					Nettimaed House
				</h1>
				</div>
				
				
				<div class="side_contact">
				<h1 class="staff_contact">
					message from the teacher
				</h1>
				<div class="msg_staffs">
					As I recollect and cherish with gratitude 17 years of my association with The High Range School, which is celebrating its Silver Jubilee this year, I am extremely glad to express that it has been wonderful to grow professionally and guide our kids to glow and glorify in their lives. 
				</div>
				</div>
				
				<div class="side_contact">
				<h1 class="staff_contact">
					contact this teacher
				</h1>
				<ul class="staff_base">
					<li>
						<label>
							name <span class="import">*</span>
						</label>
						<span class="rite_one">
							<input type="text">
						</span>
					</li>
					<li>
						<label>
							email <span class="import">*</span>
						</label>
						<span class="rite_one">
							<input type="email">
						</span>
					</li>
					<li>
						<label>
							message <span class="import">*</span>
						</label>
						<span class="rite_one">
							<textarea></textarea>
						</span>
					</li>
					<li class="submit_staff">
						<button>submit</button>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>

include('main.footer')






</body>
</html>