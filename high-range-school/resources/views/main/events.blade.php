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
			events
		</h1>
	<div class="container">
		<div class="page_inner">
			<!--<p>
				Did you miss the grand function? Click here to read a report on the Silver Jubilee Celebrations
Click here to watch a few videos of the event
			</p>-->
			<div class="manage_committe">
				<div class="table-responsive">
					@foreach($gallery->where('section_title', 'About-Gallery')->get() as $galleryco)
                                         {!! $galleryco->description !!}
                                        @endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@include('main.footer')

<script>
    $(document).ready(function() {
       $('.table-responsive>table').addClass('table table-bordered table-striped');
    });
</script>

</body>
</html>