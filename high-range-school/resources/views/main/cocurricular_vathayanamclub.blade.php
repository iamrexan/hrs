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
			vathayanam club
		</h1>
	<div class="container">
		<div class="page_inner">
			<ul class="msg_inner">
				<li>
					The Malayalam department of the school formed a club named 'VATHAYANAM' for the smooth conduct of various regional activities. Every year the club celebrates the Kerala Piravi day(Nov 1st) as Malayalam Day. Variety entertainment programmes are staged on this day that showcase the hidden talents of students. A Literary competition is also conducted to develop their literary proficiency.
				</li>
				<li>
					As a part of its routine activity, a study tour is arranged every term to enrich the awareness of the student members.
				</li>
				<li class="names">
				<div class="name_principal">
				<h3 class="princi_head">
					vathayanam club
				</h3>
				</div>
				
				</li>
			</ul>
			
			
			<ul class="msg_inner">
				<li>
					Its members visited the famous archaeological museum in Hill Palace in Tripunithura.
				</li>
				<li>
					One of the most important activities of the club is doing charity, which develops in them a healthy, helping mentality. We visited the Emmanual Poor Home at Anaviratty and spent a whole day interacting with the underprivileged children. Smt.Valsamma Nelson, our Malayalam teacher handed over the amount collected to the orphanage on behalf of the club.
				</li>
				<li class="names">
				<div class="name_principal">
				<h3 class="princi_head">
					Club Activities
				</h3>
				</div>
				
				</li>
			</ul>
			
			
			<div id="myCarousel" class="carousel slide club_carosel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/vathayanam1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          
          <p>Club Members at Adimali Theatre to watch Pazhassiraja</p>
        </div>
      </div>

      <div class="item">
        <img src="images/vathayanam2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <p>Saradhikal - 2009-10</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/vathayanam3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          
          <p>Study Tour - Hill Palace, Tripunithara</p>
        </div>
      </div>
	  <div class="item">
        <img src="images/vathayanam4.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          
          <p>Saradhikal - 2008-09</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
			
			
			
			
			
			
			
			</div>
	</div>
</section>

@include('main.footer')






</body>
</html>