<!DOCTYPE html>
<html lang="en">
<head>
  <title>High Range School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
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
			Digital Library/Magazines
		</h1>
	<div class="container">
		<div class="page_inner">
		<ul class="msg_inner list_style_ul">
        @foreach($digilib->get() as $digital_lib)
		    <li class="magazine_inner col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="one_maga"><a href="{{ $digital_lib->file_location }}" target="_blank">{{ $digital_lib->title }}</a></div>
            </li>
        @endforeach
		</ul>			
		</div>
	</div>
</section>

@include('main.footer')



</body>
</html>