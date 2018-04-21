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
				<li class="active about_listing">
					<a href="#overview_base">
						labs
					</a>
				</li>
				<li class="about_listing">
					<a href="#management">
						library
					</a>
				</li>
				<li class="about_listing">
					<a href="#ptsa">
						transport
					</a>
				</li>
				
			</ul>
					
					<div class="hidden_overview_cont selected" id="overview_base">
					
					<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#audio">audio visual lab</a></li>
						<li><a data-toggle="pill" href="#biology">biology lab</a></li>
						<li><a data-toggle="pill" href="#chemistry">chemistry lab</a></li>
						<li><a data-toggle="pill" href="#physics">physics lab</a></li>
						<li><a data-toggle="pill" href="#computer">computer lab</a></li>
						<li><a data-toggle="pill" href="#maths">maths lab</a></li>
					</ul>
					
					<div class="tab-content">
						<div id="audio" class="tab-pane fade in active">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">audio visual lab</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
						
						
						<div id="biology" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">biology lab</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
						
						
						<div id="chemistry" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">chemistry lab</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
						
						<div id="physics" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">physics lab</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
						
						
						<div id="computer" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">computer lab</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
						
						
						<div id="maths" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">maths lab</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
						
						
					</div>
					</div>
				
				
				<div class="hidden_overview_cont" id="management">
					<button class="addone_extras">
						add section
					</button>
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">libray</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="ptsa">
					<button class="addone_extras">
						add section
					</button>
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">transport</h1>
								<div class="base_magazine">
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							<div class="welcome_base extra_section_append">
							<div class="extra_section_append_inner">
								<h1 class="add_head">add section</h1>
								<div class="base_magazine">
								<i class="fa fa-times" aria-hidden="true"></i>
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome">
								</span>
								</p>
								<p class="gallery_size">
								<label class="gallery_label">
									description
								</label>
								<span class="img_add">
									<textarea class="text_welcome"></textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit">
								</p>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
					
				
			</div>
</section>

</body>
</html>