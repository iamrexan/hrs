<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>High Range School-Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta id="token" name="token" content="{{ csrf_token() }}">
<!-- include libraries(jQuery, bootstrap) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  {{ Html::style('css/admin-font-awesome.min.css') }}
  {{ Html::style('css/admin-style.css') }}
  {{ Html::style('css/admin-responsive.css') }}
</head>
<body>

@extends('layouts.side_menu')

<section class="col-lg-10 col-md-10 col-sm-10 col-xs-12 rite_base">
		@include('layouts.nav')
                
                <div class="inner_cont col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden_overview_cont selected">
			
		
		<div class="tab-content">
		<div class="tab-pane fade in active" id="banner">
		<button class="addone_extras">
			add section
		</button>
		<div class="add_one_banner">
		<div class="banner_add">
			<h1 class="add_head">add new faculty</h1>
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
                                <textarea name="editor1"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
			</ul>
		</div>
		</div>
		
		<div class="banners_list">
			<h1 class="add_head">faculty list</h1>
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
		</div>
		
		<div class="tab-pane fade" id="welcome">
			<div class="welcome_base">
				<h1 class="add_head">welcome</h1>
				<div class="base_magazine">
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
		
		
		
		<div class="tab-pane fade" id="news">
			<div class="welcome_base">
				<h1 class="add_head">news / evenets</h1>
				<div class="base_magazine">
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
		
		<div class="tab-pane fade" id="gallery">
			<div class="welcome_base">
				<h1 class="add_head">add new image</h1>
				<div class="base_magazine">
				<p class="gallery_size">
				<label class="gallery_label">
					image
				</label>
				<span class="img_add">
					<input type="file">
					<small class="exact_size">( Image size should be larger than 390*310px )</small>
				</span>
				</p>
				<p class="gallery_size mazin submit">
					<input type="submit">
				</p>
				</div>
				
				
				<div class="banners_list">
			<h1 class="add_head">gallery list</h1>
			<div class="table-responsive">
				<table class="table table-bordered table-condensed">
					<thead>
						<th>
							select
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
				
			</div>
		</div>
		
		
		<div class="tab-pane fade" id="magazines">
			<div class="welcome_base">
				<h1 class="add_head">Digital Library/ Magazines</h1>
				<div class="base_magazine">
				<p class="gallery_size mazin">
				<label class="gallery_label">
					upload file
				</label>
				<span class="img_add">
					<input type="file">
					<!-- <small class="exact_size">( Image size should be larger than 390*310px )</small> -->
				</span>
				</p>
				<p class="gallery_size mazin">
				<label class="gallery_label">
					upload file
				</label>
				<span class="img_add">
					<input type="file">
					<!-- <small class="exact_size">( Image size should be larger than 390*310px )</small> -->
				</span>
				</p>
				<p class="gallery_size mazin">
				<label class="gallery_label">
					upload file
				</label>
				<span class="img_add">
					<input type="file">
					<!-- <small class="exact_size">( Image size should be larger than 390*310px )</small> -->
				</span>
				</p>
				<p class="gallery_size mazin submit">
					<input type="submit">
				</p>
				</div>
			</div>
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
</section>

</body>
</html>