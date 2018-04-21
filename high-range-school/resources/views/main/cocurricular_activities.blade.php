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

<section class="cocurricular_sec">
	<h1 class="page_head">
			co-curricular activities
		</h1>
	<div class="container">
		<div class="page_inner curriculams">
		@foreach($curricular->where('title', 'CCA Points')->get() as $cur)	
                    <div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					{{ $cur->title }}
				</h3>
				
				</div>
				{!! $cur->description !!}
			</div>
		@endforeach
			
			<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					asset corner
				</h3>
				</div>
				<p class="curri_conts">
					Hats off to Sudarsan.S, the ASSET Ambassador of our school made us proud by winning the first prize in the ASSET Ad making competition 2010 which was open to all the ASSET schools across India. The advertisement was beautifully made with the use of video, good punch lines and properly edited. The entire video was kept short without missing the essence of the Ad.
				</p>
				<p class="curri_more">
					<a href="cocurricular_assets">read more</a>
				</p>
				</div>
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					international award for young people
				</h3>
				</div>
				<p class="curri_conts">
					35 awardees of class XII attended the IAYP Silver Expedition from 11-13 March 2010 at Greenlands Youth Hostel, Kodaikanal
				</p>
				<!--<p class="curri_more">
					<a href="cocurricular_assets">read more</a>
				</p>-->
				</div>
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Houses
				</h3>
				</div>
				<p class="curri_conts">
					With a view to encourage Intra - Mural competitiveness and to inculcate the spirit of leadership, there are four houses as under:
					<ul class="main_houses">
						<li>
							Anaimudi House: Green
						</li>
						<li>
							Devimalai House: Red
						</li>
						<li>
							Theerthamalai House: Blue
						</li>
						<li>
							Nettimaed House: Yellow
						</li>
					</ul>
					Each student is attached to a house.
				</p>
				<p class="curri_more">
					<a href="cocurricular_houses">read more</a>
				</p>
				</div>
				
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Clubs
				</h3>
				</div>
				<p class="curri_conts">
					The school encourages its students to join clubs that revolve around their career interest. These clubs focus on specific career fields and help students to understand them better. Each of these clubs conduct  competitions and celebrate days of Global Importance and give club members an opportunity to get exposed to these fields.
					<ul class="main_houses clubs_spl">
						<li>
							<a href="cocurricular_h3club">H3</a>
						</li>
						<li>
							<a href="cocurricular_hecsaclub">HECSA</a>
						</li>
						<li>
							<a href="cocurricular_mathsclub">Maths club</a>
						</li>
						<li>
							<a href="cocurricular_natureclub">Nature Club</a>
						</li>
						<li>
							<a href="cocurricular_vathayanamclub">Vathayanam Club</a>
						</li>
						<li>
							<a href="cocurricular_vistaclub">Vista Science Club</a>
						</li>
					</ul>
				</p>
				<p class="curri_conts">
					All Clubs have active participation from the students, with the required guidance given by its mentors. 
				</p>
				<p class="curri_more">
					<a href="cocurricular_h3club">read more</a>
				</p>
				</div>
				
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Sports
				</h3>
				</div>
				<p class="curri_conts">
					The High Range School P.E. Department aims at the holistic development of the students. The school has a well equipped multipurpose indoor stadium with a shuttle court and T.T.boards. The school also has a outdoor football field, throw ball court, Basketball court, volleyball court and a well maintained 200 mt track. The school also has a separate kho-kho court.
				</p>
				<p class="curri_more">
					<a href="cocurricular_sports">read more</a>
				</p>
				</div>
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Music
				</h3>
				</div>
				<p class="curri_conts">
					All the students of classes I to V have compulsory music classes and students of VI to XII learn music as part of their specialised Work Experience classes.They learn the basic lessons of Carnatic Music.This includes Saralivarisai, Tharasthaivarisai, Jendavarisai, Swarajathi, Geetham, Swarajathi , Varnam, Bhajans and Thillana.
				</p>
				<p class="curri_more">
					<a href="cocurricular_music">read more</a>
				</p>
				</div>
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Dance
				</h3>
				</div>
				<p class="curri_conts">
					While students from the UKG to Class V learn the basic steps of dance, those in classes VI to XII have dance classes as part of Work Experience. Students are trained in Indian Clasical dances such as Bharatanatyam, Mohiniyattam and folk dances of all states. 
				</p>
				<p class="curri_more">
					<a href="cocurricular_dance">read more</a>
				</p>
				</div>
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Yoga & Martial Arts
				</h3>
				</div>
				<p class="curri_conts">
					<ul class="main_houses">
						<li>
							yoga
						</li>
						<li>
							karate
						</li>
						<li>
							kalaripayattu
						</li>
					</ul>
				</p>
				<p class="curri_more">
					<a href="cocurricular_yoga">read more</a>
				</p>
				</div>
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					arts department
				</h3>
				</div>
				<p class="curri_conts">
					The art department has been encouraging the budding artists to do the following creative activities.
					<ul class="main_houses">
						<li>
							Children have been given opportunities to specialize in imaginative topics.
						</li>
						<li>
							Colouring and line drawing for classes I and II.
						</li>
						<li>
							Water colouring for classes III and above.
						</li>
						<li>
							Children have been specializing in mediums of their interest like Oil Painting, Acrylic on Canvas, Glass painting, Clay modeling, craft works etc.
						</li>
					</ul>
					Work Education classes are open to classes VI to XII for specializing in their interesting areas.
				</p>
				<p class="curri_more">
					<a href="cocurricular_artsdepart">read more</a>
				</p>
				</div>
				
				
				
				<div class="curricular_acts">
				<div class="name_principal">
				<h3 class="princi_head">
					Scouts & Guides
				</h3>
				</div>
				<p class="curri_conts">
					Outward bound learning has been a part and parcel of the school's ethos. Scouting for boys and girls has witnessed a renewed sense of interest over the years. 
				</p>
				<p class="curri_conts">
					The 87th Devikulam Scout Group was started at HRS in 1989 by the then Scout Master, Mr. A. Sambath Rajan with 32 scouters which was later taken over by Mr. P. Yashvanth Mallya and Mr. K. Radhakrishanan.
				</p>
				<p class="curri_more">
					<a href="cocurricular_scouts">read more</a>
				</p>
				</div>
			
			
		</div>
	</div>
</section>

@include('main.footer')

<script>
    $(document).ready(function() {
       $('.curricular_acts>h4').addClass('cca_head') ;
       $('.curricular_acts>p').addClass('cca_cont') ;
       $('.curricular_acts>table').addClass('table table-bordered table-striped');
    });
</script>   
</body>
</html>