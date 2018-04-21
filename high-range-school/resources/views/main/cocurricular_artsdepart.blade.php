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
			Arts Department
		</h1>
	<div class="container">
		<div class="page_inner">
			
                    @foreach($curricular->where('title', 'Arts')->get() as $curr)
                        {!! $curr->description !!}
                    @endforeach	
			
			</div>
	</div>
</section>

@include('main.footer')

<script>
    $(document).ready(function() {
       $('.page_inner>h3').addClass('princi_head') ;
       $('.page_inner>table').addClass('table table-bordered table-striped') ;
       $('.page_inner>ul').addClass('msg_inner') ;
       $('.page_inner>ul>li>ul').addClass('main_houses') ;
       $('.main_houses').parent().addClass('nolist') ;
       $('img').parent().addClass('nolist') ;
       $('.page_inner>ul>li>a').parent().addClass('nolist') ;
       $('.page_inner>ul>li:first-child').addClass('arts_slogan nolist') ;
       $('.page_inner>ul>li:nth-child(7)').addClass('arts_head nolist') ;
       if(($('.page_inner>ul>li:nth-child(9)').html()) == 'ART WORKSHOP CONDUCTED BY ARTIST PARESH MAITY ON 26TH APRIL 2010, AT A GLANCE') {
        $('.page_inner>ul>li:nth-child(9)').addClass('arts_head nolist') ;   
       }
       if(($('.page_inner>ul>li:nth-child(10)').html()) == "THE BEST OUTGOING ARTIST AWARD FOR 2008-'O9 WAS GIVEN TO SHIBI B. OF CLASS XII.") {
        $('.page_inner>ul>li:nth-child(10)').addClass('arts_head nolist') ;   
       }
    });
</script>  

</body>
</html>