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
			asset corner
		</h1>
	<div class="container">
		<div class="page_inner">
		@foreach($curricular->where('title', 'Asset Corner')->get() as $curr)	
                    {!! $curr->description !!}
                @endforeach
		</div>
	</div>
</section>

@include('main.footer')
<script>
    $(document).ready(function() {
       $('.page_inner>h3').addClass('princi_head');
       $('.page_inner>ul').addClass('msg_inner');
    });
</script>

</body>
</html>