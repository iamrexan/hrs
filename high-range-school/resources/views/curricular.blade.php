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
					<a href="#cca">
						cca points
					</a>
				</li>
				<li class="about_listing">
					<a href="#asset">
						asset corner
					</a>
				</li>
				<li class="about_listing">
					<a href="#Award">
						International Award For Young People
					</a>
				</li>
				<li class="about_listing">
					<a href="#Houses">
						Houses
					</a>
				</li>
				<li class="about_listing">
					<a href="#Clubs">
						Clubs
					</a>
				</li>
				<li class="about_listing">
					<a href="#Sports">
						Sports
					</a>
				</li>
				<li class="about_listing">
					<a href="#Music">
						Music
					</a>
				</li>
				<li class="about_listing">
					<a href="#Dance">
						Dance
					</a>
				</li>
				<li class="about_listing">
					<a href="#Yoga">
						Yoga & Martial Arts
					</a>
				</li>
				<li class="about_listing">
					<a href="#Arts">
						Arts Department	
					</a>
				</li>
				<li class="about_listing">
					<a href="#Scouts">
						Scouts & Guides
					</a>
				</li>
			</ul>
					
			<div class="hidden_overview_cont selected" id="cca">
					<div class="tab-contents">
						<div class="tab-panes">
                                                    @foreach($curr->where('title', 'CCA Points')->get() as $curriculam)
							<div class="welcome_base">
                                                                {{ csrf_field() }}
								<h1 class="add_head">cca ponits</h1>
                                                                <form action="admin-curricular-update" method="post">
                                                                    <div class="base_magazine">
                                                                    <p class="gallery_size">
                                                                    <span class="img_add">
                                                                        <input type="text" class="text_welcome" name='this_id' value="{{ $curriculam->id }}" hidden>
                                                                        <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                        <input type="text" class="text_welcome" name='title' value="CCA Points" hidden>
                                                                    </span>
                                                                    </p>
                                                                    <p class="gallery_size">
                                                                    <span class="img_add">
                                                                        <textarea id="desc_cca" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
                                                                    </span>
                                                                    </p>
                                                                    <p class="gallery_size mazin submit">
                                                                        <input type="submit" name="_token">
                                                                    </p>
                                                                    </div>
                                                                    {{ csrf_field() }}
                                                                </form>
                                                                <script>
                                                            CKEDITOR.plugins.addExternal( 'base64image', '/ckeditor/base64image/', 'plugin.js' );
                                                            CKEDITOR.plugins.addExternal( 'justify', '/ckeditor/justify/', 'plugin.js' );
                                                            CKEDITOR.plugins.addExternal( 'youtube', '/ckeditor/youtube/', 'plugin.js' );
                                                                    var desc_cca = document.getElementById('desc_cca');
                                                                    CKEDITOR.replace(desc_cca, {
                                                                        extraPlugins: 'base64image,justify,youtube',
                                                                        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                                    });
                                                                </script>
							</div>
                                                    @endforeach
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="asset">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Asset Corner</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Asset Corner')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Asset Corner" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_asst" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit" >
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_asst');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="Award">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">International Award For Young People</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'International Award For Young People')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="International Award For Young People" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_int" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
									<input type="submit" >
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_int');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				<div class="hidden_overview_cont" id="Houses">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Houses</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Houses')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Houses" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_house" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_house');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="Clubs">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Clubs</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Clubs')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Clubs" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_club" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_club');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="Sports">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Sports</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Sports')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Sports" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_sport" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_sport');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="Music">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Music</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Music')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Music" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_music" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_music');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="Dance">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Dance</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Dance')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Dance" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_dance" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_dance');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				
				<div class="hidden_overview_cont" id="Yoga">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Yoga & Martial Arts</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Yoga')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Yoga" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_yoga" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_yoga');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				<div class="hidden_overview_cont" id="Arts">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Arts Department</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Arts')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Arts" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_arts" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_arts');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
				
				
				<div class="hidden_overview_cont" id="Scouts">
					<div class="tab-contents">
						<div class="tab-panes">
							<div class="welcome_base">
								<h1 class="add_head">Scouts & Guides</h1>
								<div class="base_magazine">
                                                    @foreach($curr->where('title', 'Scouts')->get() as $curriculam)
                                                            <form action="admin-curricular-update" method="post">
                                                            {!! csrf_field() !!}
								<p class="gallery_size">
								<span class="img_add">
                                                                    <input type="text" class="text_welcome" name="this_id" value="{{ $curriculam->id }}" hidden>
                                                                    <input type="text" class="text_welcome" name='section_title' value="Curricular" hidden>
                                                                    <input type="text" class="text_welcome" name='title' value="Scouts" hidden>
								</span>
								</p>
								<p class="gallery_size">
								<span class="img_add">
                                                                    <textarea id="desc_scouts" name="description" class="text_welcome">{{ $curriculam->description }}</textarea>
								</span>
								</p>
								<p class="gallery_size mazin submit">
                                                                    <input type="submit" name="_token">
								</p>
                                                            {!! csrf_field() !!}
                                                            </form>
                                                    @endforeach
								</div>  
							</div>
                                                    
                                                    <script>
                                                    var desc_cca = document.getElementById('desc_scouts');
                                                    CKEDITOR.replace(desc_cca, {
                                                        extraPlugins: 'base64image,justify,youtube',
                                                         format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
                                                    });
                                                    </script>
						</div>
					</div>
				</div>
					
				
			</div>
</section>

</body>
</html>