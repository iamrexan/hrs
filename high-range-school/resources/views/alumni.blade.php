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
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
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
						overview
					</a>
				</li>
				<li class="about_listing">
					<a href="#management">
						donors
					</a>
				</li>
				<li class="about_listing">
					<a href="#ptsa">
						alumni gathering notification
					</a>
				</li>
				<li class="about_listing">
					<a href="#message">
						achievers
					</a>
				</li>
				<li class="about_listing">
					<a href="#members">
						members list as download
					</a>
				</li>
			</ul>
					
					<div class="hidden_overview_cont selected" id="overview_base">
					
<!--					<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#overview">overview</a></li>
						<li><a data-toggle="pill" href="#vision">membership</a></li>
						<li><a data-toggle="pill" href="#mission">management</a></li>
						<li><a data-toggle="pill" href="#bearers">Office Bearers</a></li>
					</ul>-->
					
					<div class="tab-content">
						<div id="overview" class="tab-pane fade in active">
							<div class="welcome_base">
								<h1 class="add_head">overview</h1>
                                                        @foreach($alumni->where('title', 'alumni')->get() as $alumnidata)
                                                            <form action="admin-alumni-update" method="post">
                                                                {!! csrf_field() !!}
								<div class="base_magazine">
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="section_title" value="alumni" hidden>
                                                                    <input type="text" class="text_welcome" name="title" value="alumni" hidden>
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $alumnidata->id }}" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="alumni_desc" class="text_welcome" name="description">{{ $alumnidata->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
								</div>
                                                                {!! csrf_field() !!}
                                                            </form>
                                                        @endforeach
                                                                <script>
                                                            CKEDITOR.plugins.addExternal( 'base64image', '/ckeditor/base64image/', 'plugin.js' );
                                                            CKEDITOR.plugins.addExternal( 'justify', '/ckeditor/justify/', 'plugin.js' );
                                                            CKEDITOR.plugins.addExternal( 'youtube', '/ckeditor/youtube/', 'plugin.js' );
                                                                    var desc_cca = document.getElementById('alumni_desc');
                                                                    CKEDITOR.replace(desc_cca, {
                                                                        extraPlugins: 'base64image,justify,youtube',
                                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                                    });
                                                                </script>
							</div>
						</div>
						
						
						<div id="vision" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">membership</h1>
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
						
						
						<div id="mission" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">management</h1>
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
						
						
						<div id="bearers" class="tab-pane fade">
							<button class="addone_extras">
								add section
							</button>
							<div class="welcome_base">
								<h1 class="add_head">office bearers</h1>
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
								<h1 class="add_head">donors</h1>
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
								<h1 class="add_head">alumni gathering notification</h1>
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
					
					
				<div class="hidden_overview_cont" id="message">
					<button class="addone_extras">
						add section
					</button>
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">achievers</h1>
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
				
				
				
				<div class="hidden_overview_cont" id="members">
					<button class="addone_extras">
						add section
					</button>
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">members list ad download</h1>
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