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
			academics
		</h1>
	<div class="container">
		<div class="page_inner">
@foreach($academics->where('section_title', 'Academics')->get() as $ross)
{!! $ross->section_inner_description !!}
@endforeach
			
			</div>
	</div>
</section>

@include('main.footer')

<script>
    $(document).ready(function() { 
        $('.page_inner>h3').addClass('princi_head');
        $('.page_inner>p').addClass('msg_inner');
        $('.page_inner>h4').addClass('extra_head');
//        $('.extra_head').next().addClass('msg_inner extra_ul');
        $('.page_inner>h5').addClass('sub_head');
        $('.page_inner>ul').addClass('msg_inner extra_ul');
    });
</script>

<style>
p.msg_inner {
    padding-left: 26px;
    padding-top: 65px;
    margin-bottom: 25px;
}
</style>

</body>
</html>