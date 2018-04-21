<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>High Range School-Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta id="token" name="token" content="{{ csrf_token() }}">
<!-- include libraries(jQuery, bootstrap) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  {{ Html::style('css/admin-font-awesome.min.css') }}
  {{ Html::style('css/admin-style.css') }}
  {{ Html::style('css/admin-responsive.css') }}
</head>
<body>

@extends('layouts.side_menu')

<section class="col-lg-10 col-md-10 col-sm-10 col-xs-12 rite_base">
		@include('layouts.nav')
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_overview_base">
			<ul class="about_unorder">
				<li class="about_listing active">
					<a href="#management">
						Address
					</a>
				</li>
			</ul>
				<div class="hidden_overview_cont selected" id="management">
					<div class="tab-contents ">
						<div class="tab-panes fade in active">
						@foreach($contacts->get() as $contact)	
                                                    <div class="welcome_base">
                                                        <form action="address-lineup" method="post">
                                                            {!! csrf_field() !!}
                                                            <div class="base_magazine" style="width: 64%">
								<p class="gallery_size">
								<label class="gallery_label">
									Institute name*
								</label>
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $contact->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name="inst_name" value="{{ $contact->inst_name }}">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									Address line 1*
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="add_line_1" value="{{ $contact->add_line_1 }}">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									Address line 2
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="add_line_2" value="{{ $contact->add_line_2 }}">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									Mail*
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="mail" value="{{ $contact->mail }}">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									Phone*
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="phone" value="{{ $contact->phone }}">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									Hours*
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="hours" value="{{ $contact->hours }}">
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
                                                            </div>
                                                            {!! csrf_field() !!}
                                                        </form>
                                                    @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

</body>
</html>