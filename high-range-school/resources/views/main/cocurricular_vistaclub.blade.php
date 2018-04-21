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
			Vista Science Club
		</h1>
	<div class="container">
		<div class="page_inner">
			<ul class="msg_inner">
				<li>
					To enrich the scientific aptitude of children through diverse and interesting activities and projects.
				</li>
				<li class="names">
				<div class="name_principal">
				<h3 class="princi_head">
					vision
				</h3>
				</div>
				
				</li>
			</ul>
			
			
			<ul class="msg_inner">
				<li>
					To make learning of science a thrill.
				</li>
				<li>
					To create an awareness of environment in children for sustainable development.
				</li>
				<li>
					To inculcate scientific aptitude through exploration and experimentation.
				</li>
				<li>
					To apply scientific knowledge in day to day life and to develop in them awe and respect for all the creations of God.
				</li>
				<li class="arts_head nolist">NATIONAL SCIENCE DAY CELEBRATIONS & JUNIOR SCIENCE QUIZ</li>
				<li>
					National Science Day Celebrations & Junior Science Quiz were held at school on 15th March 2010. Dr. Rajesh Eapen was the Chief Guest. The highlight of the programme was "The Joy of Discovery", a dance presentation on Raman Effect by the girls of class XII
				</li>
				<li class="arts_head nolist">The students of class XII visited The College of Engineering Munnar on 17th March 2010 to see the Science Exhibition "REX" - Squarkz '10</li>
				<li class="arts_head nolist">"EXPLORE" - The Science Expo 2010 was inaugurated by Mr. C.V. Biju, Principal-in-charge, College of Engineering, Munnar on 3rd July 2010.</li>
				<li>
					Meenu Anna Varghese (XII) was given The Prakash Ramdas Memorial Award for becoming the topper in The AISSCE 2009 Chemistry Examination by securing 95% marks.
				</li>
				<li>
					For more exciting scientific news please log on to the following web site of VISTA : 
				</li>
				<li class="nolist">
					<a href="http://sites.google.com/site/vistathevividvision/" target="_blank">http://sites.google.com/site/vistathevividvision/</a>
				</li>
				<li class="names">
				<div class="name_principal">
				<h3 class="princi_head">
					mission
				</h3>
				</div>
				
				</li>
			</ul>
			

			
			
			
			
			</div>
	</div>
</section>

@include('main.footer')








<script src="js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<script>
	$(document).ready(function(){
		$("li.main_menu").hover(function(){
			$(this).find("ul.mean_base").toggleClass("first_menu");
		});
		
		$("li.mean_menu").hover(function(){
			$(this).find("ul.inner_base").toggleClass("second_menu");
		});
		
	});
	
</script>

<script>
	$(document).ready(function(){
		$(".menu_mobile").on("click",function(){
			$(".menu_inner").toggleClass("left_menu");
		});
	});
</script>


<script>
	$(document).ready(function(){
		$(window).scroll(function(){
		var win = $(window).scrollTop();
		console.log(win);
		if(win>=50)
		{
		$("section.menu_sec").addClass("fixed_menu");
		}
		else 
		{
		$("section.menu_sec").removeClass("fixed_menu");
		}
		});
	});
</script>



</body>
</html>