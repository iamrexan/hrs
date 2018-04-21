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
						<li class="active"><a data-toggle="pill" href="#labs">Main Content</a></li>
						<li><a data-toggle="pill" href="#audio">audio visual lab</a></li>
						<li><a data-toggle="pill" href="#biology">biology lab</a></li>
						<li><a data-toggle="pill" href="#chemistry">chemistry lab</a></li>
						<li><a data-toggle="pill" href="#physics">physics lab</a></li>
						<li><a data-toggle="pill" href="#computer">computer lab</a></li>
						<li><a data-toggle="pill" href="#maths">maths lab</a></li>
					</ul>
					
					<div class="tab-content">
						<div id="audio" class="tab-pane fade in">
								<h1 class="add_head">audio visual lab</h1>
                                                                
                                    @foreach($infrastructure->where('section_title', 'audio')->get() as $ross)
                                                    
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='audio' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="audio_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
                                                                    
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                                <script>
                                                    var description = document.getElementById('audio_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
                                            
                                            <div id="labs" class="tab-pane fade in active">
                                                    <h1 class="add_head">Labs</h1>
                                    @foreach($infrastructure->where('section_title', 'labs')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='labs' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="main_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
                                                                    
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>                                                
                                        <script>
                                            CKEDITOR.plugins.addExternal( 'base64image', '/ckeditor/base64image/', 'plugin.js' );
                                            CKEDITOR.plugins.addExternal( 'justify', '/ckeditor/justify/', 'plugin.js' );
                                            var description = document.getElementById('main_desc');
                                            CKEDITOR.replace(description, {
                                                extraPlugins: 'base64image,justify',
                                                format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                            });
                                            
                                        </script>
                                    @endforeach
						</div>
						
						
						<div id="biology" class="tab-pane fade">
                                                    <h1 class="add_head">Biology lab</h1>
                                    @foreach($infrastructure->where('section_title', 'Biology')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='biology' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="bio_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                                <script>
                                                    var description = document.getElementById('bio_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
						
						
						<div id="chemistry" class="tab-pane fade">
                                                    <h1 class="add_head">chemistry lab</h1>
				@foreach($infrastructure->where('section_title', 'chemistry')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='chemistry' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="che_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                                <script>
                                                    var description = document.getElementById('che_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
                                            
                                            <div id="physics" class="tab-pane fade">
                                                    <h1 class="add_head">physics lab</h1>
				@foreach($infrastructure->where('section_title', 'physics')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='physics' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="phy_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
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
                                                    var description = document.getElementById('phy_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
                                            <div id="computer" class="tab-pane fade">
                                                    <h1 class="add_head">computer lab</h1>
				@foreach($infrastructure->where('section_title', 'computer')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='computer' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="computer_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
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
                                                    var description = document.getElementById('computer_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
                                            <div id="maths" class="tab-pane fade">
                                                    <h1 class="add_head">maths lab</h1>
				@foreach($infrastructure->where('section_title', 'maths')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='maths' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="maths_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                                <script>
                                                    var description = document.getElementById('maths_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
					</div>
					</div>
				
				
				<div class="hidden_overview_cont" id="management">
                                    <h1 class="add_head">libray</h1>
					<div class="tab-contents">
						<div class="tab-panes">
						@foreach($infrastructure->where('section_title', 'library')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='libray' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="lib_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                                <script>
                                                    var description = document.getElementById('lib_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="ptsa">
                                    <h1 class="add_head">transport</h1>
					<div class="tab-contents">
						<div class="tab-panes">
						@foreach($infrastructure->where('section_title', 'transport')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="infrastructureUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}" hidden>
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='transport' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="trans_desc" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                                <script>
                                                    var description = document.getElementById('trans_desc');
                                                    CKEDITOR.replace(description, {
                                                        extraPlugins: 'base64image,justify',
                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                </script>
                                    @endforeach
						</div>
					</div>
				</div>
			</div>
		
</section>
</body>
</html>