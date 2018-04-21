<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>High Range School-Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta id="token" name="token" content="{{ csrf_token() }}">
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
                
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_overview_base hidden_overview_cont selected">
					<div class="tab-content">
							<div class="tab-pane fade in active">
                                                            <h1 class="add_head">Post your blog</h1>
                                                    
							<div class="welcome_base">
								<div class="base_magazine">
                                                               <form method="post" action="/newblog" content-type="application/x-www-urlencoded">
                                                                    {!! csrf_field() !!}
								<p class="gallery_size">
                                                                    <span    style="float: left;font-family: 'OpenSans-Bold';font-size: 15px;vertical-align: middle;text-transform: uppercase;font-weight: bold;margin: 10px;">
                                                                        Blog Title
                                                                    </span>
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="blog_title" placeholder="Enter your title">
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="blog_desc" class="text_welcome" name="blog_desc" style="height:153px;"></textarea>
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
                                            var description = document.getElementById('blog_desc');
                                            CKEDITOR.replace(description, {
                                                extraPlugins: 'base64image,justify',
                                                format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                            });
                                        </script>
							</div>
						</div>
						</div>
		
</section>
</body>
</html>