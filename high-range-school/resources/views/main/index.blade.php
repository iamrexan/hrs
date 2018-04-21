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
  {{ Html::style('css/main/animate.css') }}
  {{ Html::style('css/main/owl.carousel.min.css') }}
  {{ Html::style('css/main/hover-min.css') }}
  {{ Html::style('css/main/font-awesome.min.css') }}
</head>
<body>

@include('main.header')

<section class="banner_sec">
	<div id="myCarousel" class="carousel slide main_slider" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators wow fadeInUp" style="visibility: hidden; animation-name: none;">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        
        
@foreach($banner as $banners)
      <div class="item">
        <div class="over_banner"></div>
        <img src="{{$banners->banner_image}}" alt="Los Angeles" style="width:100%;">
      </div>
@endforeach

    
      
  
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
</section>

<section class="about_sec">
	<div class="container">
		<h1 class="sec_head wow fadeInUp">
			welcome
		</h1>
		<p class="about_cont wow fadeInUp">
                    {{ strip_tags($home_welcome[0]['description']) }}
		</p>
	</div>
</section>

<section class="news_sec">
	<div class="container">
		<h1 class="sec_head news_head wow fadeInUp">
			News/Events
		</h1>
		<marquee direction="up" scrollamount="4">
			<!--<ul class="scroll_base wow fadeInUp">-->
                        @foreach($home_news as $news)
			{!! stripslashes($news->newsOrEvents) !!}
                        @endforeach
		</marquee>
	</div>
</section>

<section class="gallery_sec">
	<div class="container">
		<h1 class="sec_head wow fadeInUp">
			Gallery
		</h1>
		
		<div class="gallery_base">
			<div class="owl-carousel owl-theme">
                            @foreach($gallery as $gallery_images)
				<div class="item">
					<img src="{{ $gallery_images->imageUrl }}">
				</div>
                            @endforeach
				
			</div>
	</div>
</section>


<section class="test_sec">
	<div class="container">
		<h1 class="sec_head wow fadeInUp">
			digital library/magazines
		</h1>
  
  <ul class="magazine_base col-lg-8 col-md-8 col-sm-8 col-xs-12">
      @foreach($library as $digital_lib)
      <li class="magazine_inner col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="one_maga"><a href="{{ $digital_lib->file_location }}" target="_blank">{{ $digital_lib->title }}</a></div>
      </li>
      @endforeach
  </ul>
	<div class="more_intouch">
	    <a href="digital_library.php">more magazines</a>
	</div>	
	</div>
</section>


<section class="contact_sec">
	<div class="container">
		<h1 class="sec_head wow fadeInUp">
			quick contact
		</h1>
		<div class="contact_base">
                    
                    <form action="user-quick-form" method="post">
                    {!! csrf_field() !!}
			<ul class="contact_form has-error wow fadeInUp">
				<li>
					<p>
						<label class="{{ $errors->has('fname') ? 'control-label' :'' }}">first name <span class="star"> *</span></label>
                                                <input class="{{ $errors->has('fname') ? 'form-control' :'' }}" type="text" id="name" name="fname" value="{{ old('fname') }}">
                                                @if($errors->has('fname'))
                                                <label class="control-label">
                                                    {{ $errors->first('fname') }}
                                                </label>
                                                @endif
					</p>
					<p>
						<label class="{{ $errors->has('lname') ? 'control-label' :'' }}">last name <span class="star"> *</span></label>
						<input class="{{ $errors->has('lname') ? 'form-control' :'' }}" value="{{ old('lname') }}" type="text" id="surname" name="lname">
                                                @if($errors->has('lname'))
                                                <label class="control-label">
                                                    {{ $errors->first('lname') }}
                                                </label>
                                                @endif
					</p>
				</li>
				<li>
					<p>
                                            <label class="{{ $errors->has('email') ? 'control-label' :'' }}">email <span class="star"> *</span></label>
                                            <input  class="{{ $errors->has('email') ? 'form-control' :'' }}" value="{{ old('email') }}" type="email" name="email" id="mail">
                                                @if($errors->has('email'))
                                                <label class="control-label">
                                                    {{ $errors->first('email') }}
                                                </label>
                                                @endif
					</p>
					<p>
						<label class="{{ $errors->has('phone') ? 'control-label' :'' }}">phone number <span class="star"> *</span></label>
                                                <input class="{{ $errors->has('phone') ? 'form-control' :'' }}" type="text" value="{{ old('phone') }}" name="phone" id="mobile">
                                                @if($errors->has('phone'))
                                                <label class="control-label">
                                                    {{ $errors->first('phone') }}
                                                </label>
                                                @endif
					</p>
				</li>
				<li class="area_txt">
					<p class="last_area">
					<label class="{{ $errors->has('message') ? 'control-label' :'' }}">message <span class="star"> *</span></label>
					<textarea class="{{ $errors->has('message') ? 'form-control' :'' }}" id="area" name="message">{{ old('message') }}</textarea>
                                                @if($errors->has('message'))
                                                <label class="control-label">
                                                    {{ $errors->first('message') }}
                                                </label>
                                                @endif
					</p>
				</li>
				<li class="form_consub">
					<button id="quick_btn" name="submit">submit</button>
				</li>
			</ul>
                    {!! csrf_field() !!}
                    </form>
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

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	autoplay:true,
	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

<script>
	$(document).ready(function(){
		new WOW().init();
	});
</script>

<script>
$(document).ready(function(){
	
	function myname()
	{
			var name= $("#name").val()
			var patname= /^[a-z A-Z]+$/
			
			if(!patname.test(name)||name=="")
			{
			$("#name").addClass("error_bg");
			}
			else
			{
			}
	}
	
	
	function mysurname()
	{
			var surname= $("#surname").val()
			var patsurname= /^[a-z A-Z]+$/
			
			if(!patsurname.test(surname)||surname=="")
			{
			$("#surname").addClass("error_bg");
			}
			else
			{
			}
	}
	
	
	
	function mymobile(){
			var mobile= $("#mobile").val()
			var patmobile= /^[0-9]{1,10}$/
			
			if(!patmobile.test(mobile))
			{
			$("#mobile").addClass("error_bg");
			}
			else
			{
			$("#mobile").removeClass("error_bg");
			}
		};
		
		$('#mobile').on('input', function (event) { 
		this.value = this.value.replace(/[^0-9]/g, '');
	});
	
	function mymail() {
			var mail= $("#mail").val()
			var patemail= new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
			
			if(!patemail.test(mail)||mail=="")
			{
			$("#mail").addClass("error_bg");
			}
			else
			{
			$("#mail").removeClass("error_bg");
			}
		};
		
		
	function myarea()
	{
			var area= $("#area").val()
			//var patname= /^[a-z A-Z]+$/
			
			if(area=="")
			{
			$("#area").addClass("error_bg");
			}
			else
			{
			}
	}
	
	
	$("#quick_btn").click(function(){
		myname();
		mysurname();
		mymobile();
		mymail();
		myarea();
	});
	
	});
	
</script>

<script>
    $(document).ready(function() {
        $('.news_sec>div>marquee>ul').addClass('scroll_base wow fadeInUp');
    }); 
</script>


</body>
</html>