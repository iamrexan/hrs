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
		
		<div class="inner_cont col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="top_bar_menu nav nav-pills">
				<li class="menu_list active">
					<a data-toggle="pill" href="#banner">
						banner
					</a>
				</li>
				<li class="menu_list">
					<a data-toggle="pill" href="#welcome">
						welcome
					</a>
				</li>
				<li class="menu_list">
					<a data-toggle="pill" href="#news">
						news/ events
					</a>
				</li>
				<li class="menu_list">
					<a data-toggle="pill" href="#gallery">
						gallery
					</a>
				</li>
				<li class="menu_list">
					<a data-toggle="pill" href="#magazines">
						digital library/ magazines
					</a>
				</li>
			</ul>
		
		<div class="tab-content">
		<div class="tab-pane fade in active" id="banner">
		<div class="add_one_banner">
		<div class="banner_add">
			<h1 class="add_head">add new banner</h1>
                    <form action="/submit_banner" chareset='utf-8' enctype="multipart/form-data" method="post" >
                        {{ csrf_field() }}
                        <ul class="add_banns has-error">
				<li>
					<label class="{{ $errors->has('banner_title') ? 'control-label' :'' }}">
						title
					</label>
					<span class="input_ful">
						<input type="text" name="banner_title" value="{{ old('banner_title') }}" class="{{ $errors->has('banner_title') ? 'form-control' :''}}">
					</span>
                                    @if($errors->has('banner_title'))
                                    <span class="control-label">
                                        {{ $errors->first('banner_title') }}
                                    </span>
                                    @endif
				</li>
                                <li>
					<label class="{{ $errors->has('banner_description') ? 'control-label' :'' }}">
						Description
					</label>
					<span class="input_ful">
                                                <textarea name="banner_description" class="{{ $errors->has('banner_description') ? 'form-control' :''}}">{{ old('banner_description') }}</textarea>
					</span>
                                    @if($errors->has('banner_description'))
                                        <span class="control-label">
                                            {{ $errors->first('banner_description') }}
                                        </span>
                                    @endif
				</li>
                                <li>
					<label class="{{ $errors->has('banner_image') ? 'control-label' :'' }}">
						Image
					</label>
					<span class="input_ful">
                                                <input type="file" name="banner_image" class="{{ $errors->has('banner_image') ? 'form-control' :''}}">
						<input type="text" value="{{ Auth::user()->name }}" name="created_by" hidden>
						<input type="text" value="on" name="visibility_status" hidden>
						<small class="exact_size">( Image size should be larger than 1349*670px )</small>
					</span>
                                    @if($errors->has('banner_image'))
                                        <span class="control-label">
                                            {{ $errors->first('banner_image') }}
                                        </span>
                                    @endif
				</li>
				<li>
                                    <button name=_token type="submit" >add</button>
				</li>
			</ul>
                        {{ csrf_field() }}
                    </form>
                <script>
//                    function bannerSubmit(e) {
//                        e.preventDefault();
//                        var bannerFormData = new FormData(document.getElementById('banner_form'));
//                        var url = 'submit_banner';
//                        xhr = new XMLHttpRequest();
//                        xhr.open('POST', url, true);
//                        xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));
//                        xhr.onreadystatechange = function() {
//                            if(xhr.readyState == 4 && xhr.status == 200) {
//                                alert('succes.. request goes fine');
//                            } else {
//                                alert('sorry.. not working');
//                            }
//                        }
//                        xhr.onloadend = function () {
//                            alert(xhr.responseText);
//                        }
//                        xhr.send(bannerFormData);
//                    }
                </script>
		</div>
		</div>
		
		<div class="banners_list">
			<h1 class="add_head">banners list</h1>
			<div class="table-responsive">
				<table class="table table-bordered table-condensed">
					<thead>
<!--						<th id="click_r">
							select
						</th>-->
						<th>
							title
						</th>
						<th>
							description
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
                                            @foreach($banner as $adminban)
						<tr>
<!--							<td>
								<input type="checkbox" name="id[]" value="{{ $adminban->id }}" class="checkbox_sel">
                                                                
							</td>-->
							<td id="title_ban">
								{{ $adminban->banner_title }}
							</td>
							<td id="desc_ban">
								{{ $adminban->banner_description }}
							</td>
							<td>
                                                            <p id="id_ban">{{ $adminban->id }}</p>
								<div class="img_correct">
									{{ Html::image($adminban->banner_image) }}
								</div>
							</td>
							<td>
								<a href="#" class="edit__btn"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
                                        <form action="/delBanner" method="post" content-type="application/x-www-urlencoded" onsubmit="return confirmDelete()">
                                                            {{  csrf_field() }}
                                                            <td class="delete_file">
                                                                <input type=hidden name="id" value="{{ $adminban->id }}" hidden>
                                                                <input type=hidden name="banner_image_url" value="{{ $adminban->banner_image }}" hidden>
                                                                <button name="delete" type=_token ><i class="fa fa-trash" aria-hidden="true"></i></delete>
                                                            </td>
                                                            {{  csrf_field() }}
                                                        </form>
						</tr>
                                            @endforeach
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
                                <form id="formData" name="formData" content-type="application/x-www-form-urlencoded" action="/storeHomeWelcome" method='post'>
                                   {!! csrf_field() !!}
                                    @foreach($home_welcome as $con_welcome)
                                    <textarea class="text_welcome" name="description">{{ $con_welcome->description }} </textarea>
                                    
                                    @endforeach
                                    <input name="created_by" value="{{ Auth::user()->name }}" type="hidden">
                                    <p class="gallery_size mazin submit">
                                        <input type="submit" name="_token" >
                                    </p>
                                    {!! csrf_field() !!}
                                </form>
				</div>
			</div>
		</div>
                    <script>
                        CKEDITOR.replace( 'description');
                     </script>
		
		
                    <script>
                        function sendByXhrNews(e) {
                            e.preventDefault();
                            var xhr = new XMLHttpRequest;
                            var formInfo = new FormData(document.getElementById('newsForm'));
                            var url = '/storeHomeNewsEvents';
                            xhr.open("POST", url, true);
                            xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));
                            xhr.onreadystatechange = function() {
                                            if(xhr.readyState == 4 && xhr.status == 200)
                                            {
                                            alert("done");
                                            } else {
                                                alert('falied to load');
                                            }
                                    }
                            xhr.send(formInfo);
                        }
                    </script>   
		<div class="tab-pane fade" id="news">
			<div class="welcome_base">
				<h1 class="add_head">news / evenets</h1>
				<div class="base_magazine">
				<p class="gallery_size">
				<label class="gallery_label">
					description
				</label>
				<span class="img_add">
				</span>
                                    <form name="newsForm" id="newsForm" method="post" action="/storeHomeNewsEvents" content-type="application/x-www-urlencoded">
                                        {!! csrf_field() !!}
                                        <input name="created_by" value="{{ Auth::user()->name }}" type="hidden">
                                        <textarea id="editordata" name="editordata">{{ $home_news[0]['newsOrEvents'] }}</textarea>
                                        <p class="gallery_size mazin submit">
                                                <input type="submit" name="_token">
                                        </p>
                                        {!! csrf_field() !!}
                                    </form>
				</div>
			</div>
		</div>
                                <script>
                                    CKEDITOR.replace( 'editordata' , {
                                        extraplugin:'filebrowser',
                                        height: 300,

                                        // Configure your file manager integration. This example uses CKFinder 3 for PHP.
                                        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                                        filebrowserImageBrowseUrl: '/ckfinder/type=Images',
                                        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                        filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                                } );
                                </script>
		
		<div class="tab-pane fade" id="gallery">
			<div class="welcome_base">
				<h1 class="add_head">add new image</h1>
				<div class="base_magazine">
                                    <form action="/storeGallery" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <p class="gallery_size">
                                        <label class="gallery_label">
                                                image
                                        </label>
                                        <span class="img_add" >
                                           @if($errors->has('image'))
                                            <script>
                                                alert(' {{ $errors->first("image") }}')
                                            </script>
                                            @endif
                                            <input type="file" name="image">
                                            <input type="text" value="{{ Auth::user()->name }}" name="created_by" hidden>
                                            <input type="text" name="visibility_status" value="on" hidden>
                                                <small class="exact_size">( Image size should be larger than 390*310px )</small>
                                        </span>
                                        </p>
                                        <p class="gallery_size mazin submit">
                                                <input type="submit" type=_token>
                                        </p>
                                        {{ csrf_field() }}
                                    </form>
				</div>
				
				
		<div class="banners_list">
			<h1 class="add_head">gallery list</h1>
                        <div class="gallery_vu">
                        @foreach ($adminGallery as $gallery)    
                            <a href="#">{{ Html::image($gallery->imageUrl) }}</a>
                            @endforeach
                        </div>
<!--			<div class="table-responsive">
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
                                            @foreach($adminGallery as $gallery)
						<tr>
							<td>
								<input type="checkbox">
							</td>
							<td>
								<div class="img_correct">
									{{ Html::image($gallery->imageUrl) }}
								</div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
                                        <form action='/deleteGallery' method='post' content-type='application/x-www-urlencoded' onsubmit="return confirmDelete()">
                                                            {{ csrf_field() }}
                                                            <td class="delete_file">
                                                                <input name="id" value='{{ $gallery->id }}' type="hidden">
                                                                <input name="image_to_delete" value='{{ $gallery->imageUrl }}' type="hidden">
                                                                <button type=_token><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                            </td>
                                                            {{ csrf_field() }}
                                                        </form>
						</tr>
                                            @endforeach
					</tbody>
				</table>
			</div>-->
		</div>
				
			</div>
		</div>
		
		
		<div class="tab-pane fade" id="magazines">
			<div class="welcome_base">
				<h1 class="add_head">Digital Library/ Magazines</h1>
				<div class="base_magazine">
                                    <div class="add_icon">
                                        <a href="#" onclick="" id="addOneMoreFile"><i class="fa fa-plus"></i></a>
                                    </div>
                                <form action="/degitalFileUpload" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
<!--                                    <p class="gallery_size mazin" id="file_form">
                                    <label class="gallery_label">
                                            upload file
                                    </label>
                                    <span class="img_add">
                                        <input type="file" name="file_0">
                                    </span>
                                    </p>-->
                                    <ul class="add_banns has-error">
                                        <li>
                                                <label class="">
                                                        title
                                                </label>
                                                <span class="input_ful">
                                                        <input type="text" name="title" value="{{ old('title') }}" class="">
                                                </span>
                                            @if($errors->has('title'))
                                                <span classs="control-label">
                                                </span>
                                             @endif
                                        </li>
                                        <li>
                                                <label class="">
                                                        upload file 
                                                </label>
                                                <span class="input_ful">
                                                        <input type="file" name="file" class="">
                                                        <input type="text" value="{{ Auth::user()->name }}" name="created_by" hidden="">
                                                        <input type="text" value="on" name="visibility_status" hidden="">
                                                </span>
                                             @if($errors->has('file') || $errors->has('title'))
                                                <script>
                                                    alert("{{ $errors->first('file').', '. $errors->first('title')}}");
                                                </script>
                                             @endif
                                                                        </li>
                                    </ul>
                                    <p class="gallery_size mazin submit">
                                        <input type="hidden" name="count" value="0">
                                            <input type="submit" name=_token>
                                    </p>
                                    {{ csrf_field() }}
                                </form>
				</div>
                                <div class="page_inner">

		<ul class="msg_inner list_style_ul">
@foreach($libraryFiles as $files)
		    <li class="magazine_inner col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="one_maga_">
                            <a class="one_maga_a" href="{{ $files->file_location }}" target="_blank">{{ $files->title }}</a>
                        </div>
                        <form action="/dellibrary" method="post" content-type="application/x-www-urlencoded" onsubmit="return confirmDelete()">
                            {{ csrf_field() }}
                            <input type="text" name="id"  value="{{ $files->id }}" hidden="">
                            <input type="text" name="file_to_delete"  value="{{ $files->file_location }}" hidden="">
                            <button class="one_maga_i" type="submit" ><i class="fa fa-plus" name="id"></i>
                            </button>
                            {{ csrf_field() }}
                        </form>
                    </li>
@endforeach
                </ul>
		</div>
			</div>
		</div>
	</div>	
</section>


 <!-- Modal -->
  <div class="modal fade" id="banEditModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #1f8bc3;text-align:center;color:#fff">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hello! {{ Auth::user()->name }}</h4>
        </div>
        <div class="modal-body" style="text-align:center">
            <ul class="add_banns rx_admin_bann has-error">
                <form action="update_banner" method="post" content-type="application/x-www-urlencoded">
                    {!! csrf_field() !!}
				<li>
					<label class="">
						title
					</label>
					<span class="input_ful">
						<input type="text" name="ban_tit_get_val" value="" class="">
                                                <input name="ban_id_get_val" value="" hidden="hidden">
					</span>
                                </li>
                                <li>
					<label class="">
						Description
					</label>
					<span class="input_ful">
                                                <textarea name="ban_desc_get_val" value="" class=""></textarea>
					</span>
                                    				</li>
				<li>
                                    <button name="_token" type="submit">Update</button>
				</li>
                    {!! csrf_field() !!}
                </form>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
<script>
$(".edit__btn").on('click', function(){
       $(this).parent().parent().addClass('anto');
       var bn_id = $('.anto>td>#id_ban').html().trim();
       var bn_title = $(".anto>#title_ban").html().trim();
       var bn_desc = $(".anto>#desc_ban").html().trim();
       if($(this).parent().parent().hasClass('anto')) {
           $(this).parent().parent().removeClass('anto');
       }
       $('input[name="ban_tit_get_val"]').val(bn_title);
       $('input[name="ban_id_get_val"]').val(bn_id);
       $('textarea[name="ban_desc_get_val"]').val(bn_desc);
       $('#banEditModal').modal('show');
       console.log(bn_id);
});
</script>
<script>
    function removeOne() {
        this.removeChild('i');
    }
    
    document.getElementById('addOneMoreFile').addEventListener('click', function(){
        var x = $('input[name="count"]').val();
        x = parseInt(x);
        var countValue = x + 1;
        var position = document.getElementById('file_form');
        var fieldTOInsert = '<p class="gallery_size mazin"><label class="gallery_label">upload file</label><span class="img_add"><input type="file" name="file_' +countValue+ '"><a href="#" onclick="removeOne()" class="remove_icon"><i class="fa fa-minus-circle"></i></a></span></p>';
        $('input[name="count"]').val(countValue);
        position.insertAdjacentHTML('afterend', fieldTOInsert);   
    });
    
    function myfun() {
            var xx = $('input[name="id\\[\\]"]:checked').map(function() {return $(this).val();}).get();
//            $('input[name="del_array"]').val(function() {return xx;});
$('.sdas').html=xx;
    }
    $('#click_r').on('click', function(){
        myfun();
    });
</script>
</body>
</html>