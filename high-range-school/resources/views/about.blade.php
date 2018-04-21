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
						management
					</a>
				</li>
				<li class="about_listing">
					<a href="#ptsa">
						ptsa
					</a>
				</li>
				<li class="about_listing">
					<a href="#message">
						message by principal & vice principal
					</a>
				</li>
			</ul>
					
					<div class="hidden_overview_cont selected" id="overview_base">
					
					<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#overview">overview</a></li>
						<li><a data-toggle="pill" href="#vision">vision</a></li>
						<li><a data-toggle="pill" href="#mission">mission</a></li>
					</ul>
					
					<div class="tab-content">
						<div id="overview" class="tab-pane fade in active">
								<h1 class="add_head">overview</h1>
                            @if(count($newsevents->where('section_title', 'Overview')->get()) < 1)
                            			<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Overview' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;"></textarea></div>
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
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                            @else
                                    @foreach($newsevents->where('section_title', 'Overview')->get() as $ross)
                                                    
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Overview' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea></div>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token" onclick="xmlAboutOvrOvr{{ $ross->id }}(event)">
                                                                    
                                                                    
                                                                <label class="__switch__" id='__rr__{{ $ross->id }}'>
                                                                  <input type="checkbox" name="visibility_status" id='checkboxin{{ $ross->id }}' 
                                                                    value="{{ $ross->visibility_status }}" onclick="xmlAboutCheck{{ $ross->id }}(event)" 
                                                                     
                                                                    >
                                                                  <span class="__slider__{{ $ross->id }} round" value="{{ $ross->visibility_status }}"></span>                                                                    <span></span>
                                                                </label>
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                        <script>
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                                    @endforeach
                                    @endif
						</div>
						
						
						<div id="vision" class="tab-pane fade">
                                                    <h1 class="add_head">Vision</h1>
                                    @if(count($newsevents->where('section_title', 'Vision')->get()) < 1)
                            			<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Vision' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;"></textarea></div>
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
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                            @else
                                    @foreach($newsevents->where('section_title', 'Vision')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method='post' action="/aboutAdminUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Vision' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>
                                                                        <textarea id="about_vision" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
                                                                    </div>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token" >
                                                                    
                                                                    
                                                                <label class="__switch__" id='__rr__{{ $ross->id }}'>
                                                                  <input type="checkbox" name="visibility_status" id='checkboxin{{ $ross->id }}' 
                                                                    value="{{ $ross->visibility_status }}" onclick="xmlAboutCheck{{ $ross->id }}(event)" 
                                                                     >
                                                                  <span class="__slider__{{ $ross->id }} round" value="{{ $ross->visibility_status }}"></span>                                                                    <span></span>
                                                                </label>
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                        <script>
                                            var text_edr = document.getElementById('about_vision');
                                            CKEDITOR.replace(text_edr);
                                        </script>
                                    @endforeach
                                    @endif  
						</div>
						
						
						<div id="mission" class="tab-pane fade">
                                                    <h1 class="add_head">Mision</h1>
                                @if(count($newsevents->where('section_title', 'Mission')->get()) < 1)
                            			<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Mission' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;"></textarea></div>
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
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                            @else
				@foreach($newsevents->where('section_title', 'Mission')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method='post' action="/aboutAdminUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Mission' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>
                                                                        <textarea id="about_mission" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
                                                                    </div>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token" >
                                                                    
                                                                    
                                                                <label class="__switch__" id='__rr__{{ $ross->id }}'>
                                                                  <input type="checkbox" name="visibility_status" id='checkboxin{{ $ross->id }}' 
                                                                    value="{{ $ross->visibility_status }}" onclick="xmlAboutCheck{{ $ross->id }}(event)" 
                                                                     >
                                                                  <span class="__slider__{{ $ross->id }} round" value="{{ $ross->visibility_status }}"></span>                                                                    <span></span>
                                                                </label>
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                        <script>
                                            var rr = document.getElementById('about_mission');
                                            CKEDITOR.replace(rr);
                                        </script>
                                    @endforeach
                                    @endif
						</div>
					</div>
					</div>
				
				<div class="hidden_overview_cont" id="management">
                                    <h1 class="add_head">Management</h1>
					<div class="tab-contents">
						<div class="tab-panes">
                                    @if(count($newsevents->where('section_title', 'Management')->get()) < 1)
                            			<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Management' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;"></textarea></div>
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
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                            @else
						@foreach($newsevents->where('section_title', 'Management')->get() as $ross)  
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="aboutAdminUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='Management' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="about_management" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token" >
                                                                    
                                                                    
                                                                <label class="__switch__" id='__rr__{{ $ross->id }}'>
                                                                  <input type="checkbox" name="visibility_status" id='checkboxin{{ $ross->id }}' 
                                                                    value="{{ $ross->visibility_status }}" onclick="xmlAboutCheck{{ $ross->id }}(event)" 
                                                                     >
                                                                  <span class="__slider__{{ $ross->id }} round" value="{{ $ross->visibility_status }}"></span>                                                                    <span></span>
                                                                </label>
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                        <script>
                                            CKEDITOR.plugins.addExternal( 'base64image', '/ckeditor/base64image/', 'plugin.js' );
                                            CKEDITOR.plugins.addExternal( 'justify', '/ckeditor/justify/', 'plugin.js' );
                                            var rexx_{{ $ross->id }} = document.getElementById('about_management');
                                            CKEDITOR.replace(rexx_{{ $ross->id }}, {
                                                extraPlugins: 'base64image'
                                            });
//                                              $(document).ready(function(){
//                                                 $('#about_management').summernote({
//                                                     height:'400',
//                                                     placeholder:'Hello',
//                                                       
//                                                 }); 
//                                              });
                                        </script>
                                       
                                    @endforeach
                                    @endif
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="ptsa">
                                    <h1 class="add_head">ptsa</h1>
					<div class="tab-contents">
						<div class="tab-panes">
                                    @if(count($newsevents->where('section_title', 'ptsa')->get()) < 1)
                            			<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='ptsa' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;"></textarea></div>
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
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                            @else
						@foreach($newsevents->where('section_title', 'ptsa')->get() as $ross)  
							
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="aboutAdminUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='ptsa' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="about_ptsa" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token" >
                                                                    
                                                                    
                                                                <label class="__switch__" id='__rr__{{ $ross->id }}'>
                                                                  <input type="checkbox" name="visibility_status" id='checkboxin{{ $ross->id }}' 
                                                                    value="{{ $ross->visibility_status }}" onclick="xmlAboutCheck{{ $ross->id }}(event)" 
                                                                     >
                                                                  <span class="__slider__{{ $ross->id }} round" value="{{ $ross->visibility_status }}"></span>                                                                    <span></span>
                                                                </label>
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                        <script>
                                            var rexx_ptsa = document.getElementById('about_ptsa');
                                            CKEDITOR.replace(rexx_ptsa, {
                                                extraPlugins: 'base64image'
                                            });
                                        </script>
                                    @endforeach
                                    @endif
						</div>
					</div>
				</div>
					
					
				<div class="hidden_overview_cont" id="message">
					
                                    <h1 class="add_head">MESSAGE BY PRINCIPAL & VICE PRINCIPAL</h1>
					<div class="tab-contents">
						<div class="tab-panes">
                                    @if(count($newsevents->where('section_title', 'msgbyprinciandviceprinci')->get()) < 1)
                            			<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form action="aboutAdminUpdate" method="post"  content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='msgbyprinciandviceprinci' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <div>	<textarea class="text_welcome" name="abt_ov_ov_desc" style="height:153px;"></textarea></div>
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
                                            CKEDITOR.replace( 'abt_ov_ov_desc');
                                        </script>
                            @else
						@foreach($newsevents->where('section_title', 'msgbyprinciandviceprinci')->get() as $ross)  
								
							<div class="welcome_base">
								<div class="base_magazine">
                                                                    <form method="post" action="aboutAdminUpdate" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
								<label class="gallery_label">
									title
								</label>
								<span class="img_add">
                                                                        <input type="text" class="text_welcome" value='{{ $ross->id }}' name="this_id" hidden>
									<input type="text" class="text_welcome" name="abt_ov_ov_title" value="{{ $ross->section_inner_title }}">
                                                                        <input type="text" class="text_welcome" value='{{ Auth::user()->name }}' name="created_by" hidden>
									<input type="text" class="text_welcome" value='msgbyprinciandviceprinci' name="section_title" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="about_msgprinci" class="text_welcome" name="abt_ov_ov_desc" style="height:153px;">{{ $ross->section_inner_description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token" >
                                                                    
                                                                    
                                                                <label class="__switch__" id='__rr__{{ $ross->id }}'>
                                                                  <input type="checkbox" name="visibility_status" id='checkboxin{{ $ross->id }}' 
                                                                    value="{{ $ross->visibility_status }}" onclick="xmlAboutCheck{{ $ross->id }}(event)" 
                                                                     >
                                                                  <span class="__slider__{{ $ross->id }} round" value="{{ $ross->visibility_status }}"></span>                                                                    <span></span>
                                                                </label>
								</p>
                                                                
                                                                {!! csrf_field() !!}
                                                            </form>
								</div>
							</div>
                                        <script>
                                            var rexx_msgprinci = document.getElementById('about_msgprinci');
                                            CKEDITOR.replace(rexx_msgprinci, {
                                                extraPlugins: 'base64image,justify'
                                            });
                                        </script>
                                    @endforeach
					@endif		
						</div>
					</div>
				</div>
			</div>
		
</section>
</body>
</html>