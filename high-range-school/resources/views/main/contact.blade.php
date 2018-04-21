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

<section class="profile_sec contact_base">
	<h1 class="page_head contact_head">
			contact us
		</h1>
		<div class="contact_inner">
	<iframe class="contact_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.9815955573786!2d77.112613!3d10.1005919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b079c04a2bd6323%3A0x7184e1f4ce53a3e5!2sHigh+Range+School!5e0!3m2!1sen!2sin!4v1509523940021" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div class="address_base">
		<ul class="main_address">
                    @foreach($contact->get() as $contacts)
				<li>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $contacts->inst_name }}</p>
					<p class="left_padd">{{ $contacts->add_line_1 }}</p>
					<p class="left_padd">{{ $contacts->add_line_2 }}</p>
				</li>
				<li>
					<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:04865-242219">{{ $contacts->phone }}</a></p>
				</li>
				<li>
					<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:mail@gmail.com">{{ $contacts->mail }}</a></p>
				</li>
				<li class="time_alarm">
					<p>
						<i class="fa fa-clock-o" aria-hidden="true"></i> {{ $contacts->hours }}
					</p>
				</li>
                                @endforeach
			</ul>
	</div>
	</div>
</section>


@include('main.footer')

</body>
</html>