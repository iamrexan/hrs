<!DOCTYPE html>
<html lang="en">
<head>
  <title>High Range School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{ Html::style('css/main/style.css') }}
  {{ Html::style('css/main/responsive.css') }}
  {{ Html::style('css/main/owl.carousel.min.css') }}
  {{ Html::style('css/main/hover-min.css') }}
  {{ Html::style('css/main/font-awesome.min.css') }}
</head>
<body>

@include('main.header')

<section class="profile_sec school_about">
	<h1 class="page_head">
			overview
		</h1>
	<div class="container">
		<div class="page_inner">
<!--		<ul class="msg_inner">
			<li>
				The High Range School was established in July, 1985. The School is affiliated to CBSE (Central Board of Secondary Education, New Delhi).  It was conceived and set up primarily for the benefit of the children of Tata Global Beverages employees residing in and around Tea Valley, Munnar.  It also embodies the Company’s desire to help to mould young minds of our children in the finest traditions of good all round education, a matter of national concern.
			</li>
			<li>
				It is located at Mattupatti, 9 kms away from Munnar Town. The School is non -residential and the medium of instruction is English. Hindi, Malayalam and Tamil are also taught. It imparts educa­tion from the Lower Kindergarten up to the Higher Secondary Classes. Plus Two Classes started from the academic year, 1992.
			</li>
			<li>
				The unique High Range location provides a natural environment that will enable the school not only to concentrate on high academic performance in the class room but also inculcate a love of nature and qualities of physical and mental endurance in its student.  It also stimulates leadership qualities as well as awareness of school and civic obligations.  The School lays stress on the development of multi denominational, spiritual and moral values considered essential for balanced growth.
			</li>
			<li>
				A unique feature of the school is that its students are drawn from widely differing social and economic levels in the community, working and inter-acting in a public school environment.  (The students of the school are children of Workers, Staff, Managers and some outsiders including Government officials.)  In doing so it seeks to build a more egalitarian basis for social and personal growth devoid of divisions of class, caste or community.  The vision that motivates the school is to turn out young students well equipped to face the challenges of pursuing excellence in different fields when they eventually move to centres of higher learning elsewhere.
			</li>
			</ul>-->
@foreach($overview_main->where('section_title', 'Overview')->get() as $rexx)
{!! $rexx->section_inner_description !!}
@endforeach
			<ul class="vision_sec">
				<li class="col-lg-2 col-md-2 col-sm-2 col-sm-12 left_profile">
					<div class="profile_inner">
					<h5 class="vision_head">
<span>
        @foreach($overview_main->where('section_title', 'Vision')->get() as $rexx)
            {!! strtoupper($rexx->section_inner_title) !!}
        @endforeach
</span>
					</h5>
					<p class="vicion_cont">
@foreach($overview_main->where('section_title', 'Vision')->get() as $rexx)
    {!! $rexx->section_inner_description !!}
@endforeach
					</p>
					</div>
				</li>
				<li class="col-lg-10 col-md-10 col-sm-10 col-sm-12 rite_profile">
					<div class="profile_inner">
					<h5 class="vision_head">
<span>
        @foreach($overview_main->where('section_title', 'Mission')->get() as $rexx)
            {!! strtoupper($rexx->section_inner_title) !!}
        @endforeach
</span>
					</h5>
@foreach($overview_main->where('section_title', 'Mission')->get() as $rexx)
    {!! $rexx->section_inner_description !!}
@endforeach
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

@include('main.footer')

<script>
$(document).ready(function() {
   $('.page_inner>ul:first-child').addClass('msg_inner'); 
//   $('.rite_profile>ul').addClass('msg_inner');
});   
</script>

</body>
</html>