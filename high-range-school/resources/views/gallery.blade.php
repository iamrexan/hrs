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
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  {{ Html::style('css/admin-font-awesome.min.css') }}
  {{ Html::style('css/admin-style.css') }}
  {{ Html::style('css/admin-responsive.css') }}
</head>
<body>

@extends('layouts.side_menu')

<section class="col-lg-10 col-md-10 col-sm-10 col-xs-12 rite_base">
		@include('layouts.nav')
                <div class="inner_cont col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden_overview_cont selected gallery_tabs">
		
		<ul class="nav nav-pills">
			<li class="active about_listing"><a data-toggle="pill" href="#events">events</a></li>
			<li class="about_listing"><a data-toggle="pill" href="#videos">videos</a></li>
		</ul>
		
		<div class="tab-content">
		@foreach($gallery->where('section_title', 'About-Gallery')->get() as $galleryco)
		<div class="tab-pane fade in active" id="events">
			<div class="welcome_base">
				<h1 class="add_head">events</h1>
				<div class="base_magazine">
                                    <form action="admin-gallery-update" method="post">
                                    {!! csrf_field() !!}
                                        <p class="gallery_size">
                                        <span class="img_add">
                                            <input class="text_welcome" value="{{ $galleryco->id }}" name="this_id" hidden>
                                                <textarea class="text_welcome" name="description">{{ $galleryco->description }}</textarea>
                                        </span>
                                        </p>
                                        <p class="gallery_size mazin submit">
                                            <input type="submit" name="_token" >
                                        </p>
                                    {!! csrf_field() !!}
                                </form>
				</div>
			</div>
                    
                    <script>
                        CKEDITOR.replace( 'description');
                    </script>
		</div>
		@endforeach
		<div class="tab-pane" id="videos">
		<button class="addone_extras">
			add section
		</button>
		<div class="add_one_banner">
		<div class="banner_add">
			<h1 class="add_head">add videos</h1>
			<ul class="add_banns">
				<li>
					<label>
						title
					</label>
					<span class="input_ful">
						<input type="text">
					</span>
				</li>
				
				<li>
					<label>
						image
					</label>
					<span class="input_ful">
						<input type="file">
						<small class="exact_size">( Image size should be larger than 240*270px )</small>
					</span>
				</li>
				<li>
					<button>add</button>
				</li>
			</ul>
		</div>
		</div>
		
		<div class="banners_list">
			<h1 class="add_head">videos list</h1>
			<div class="table-responsive">
				<table class="table table-bordered table-condensed">
					<thead>
						<th>
							select
						</th>
						<th>
							title
						</th>
						
						<th>
							image
						</th>
						<th>
							edit
						</th>
						<th>
							delete
						</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="checkbox">
							</td>
							<td>
								lorem ipsum
							</td>
							<td>
								<div class="img_correct">
									<img src="images/g1.jpg">
								</div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td class="delete_file">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox">
							</td>
							<td>
								lorem ipsum
							</td>
							<td>
								<div class="img_correct">
									<img src="images/g1.jpg">
								</div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td class="delete_file">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox">
							</td>
							<td>
								lorem ipsum
							</td>
							<td>
								<div class="img_correct">
									<img src="images/g1.jpg">
								</div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td class="delete_file">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox">
							</td>
							<td>
								lorem ipsum
							</td>
							<td>
								<div class="img_correct">
									<img src="images/g1.jpg">
								</div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td class="delete_file">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox">
							</td>
							<td>
								lorem ipsum
							</td>
							<td>
								<div class="img_correct">
									<img src="images/g1.jpg">
								</div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td class="delete_file">
								<i class="fa fa-trash" aria-hidden="true"></i>
							</td>
						</tr>
					</tbody>
				</table>
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
</section>


</body>
</html>