
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
  {{ Html::style('css/style.css') }}
  {{ Html::style('css/admin-responsive.css') }}
</head>
<style>
.hidden_overview_cont ul li a {
    padding: 0;
    background: none;
    border: none;
}
</style>
<body>

@extends('layouts.side_menu')

<section class="col-lg-10 col-md-10 col-sm-10 col-xs-12 rite_base">
		@include('layouts.nav')
                
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_overview_base hidden_overview_cont selected">
@foreach($blogs->get() as $blog)            
            <div class="row">
                  <div class="blog_list_area">
                      <div class="col-md-1 blog_show_input ">
                          <input type="checkbox" name="blog_checkbox[]" id="blog_checkbox" value="{{ $blog->id }}">
                      </div>
                      <div class="col-md-8 blog_show_left">
                          <a href="/show-blog/?id={{$blog->id}}" target=_blank><h2>{!! substr($blog->blog_title, 0, 100) !!}</h2></a>
                          <p>{!! substr(strip_tags($blog->blog_description), 0, 200) !!}</p>
                      </div>
                      <div class="col-md-3 blog_show_right">
                          <ul>
                              <li><a href="/admin-show-blog/?id={{$blog->id}}" title="edit"><button type="submit" class='btn btn-default'><i class="fa fa-pencil"></i></button></a></li>
                            <li><a href="/show-blog/?id={{$blog->id}}" target=_blank  title="view"><button type="submit" class='btn btn-default'><i class="fa fa-eye"></i></button></a></li>
                            <li>
                                <form method="post" action="/delblog/{{ $blog->id }}">
                                    {!! csrf_field() !!}
                                    <button type="submit" class='btn btn-default'  title="delete"><i class="fa fa-trash"></i></button>
                                    {!! csrf_field() !!}
                                </form>
                            </li>
                        </ul>
                      </div>
                  </div>
                 </div>

@endforeach   
@for($x=0; $x < $count/5; $x++)   
<div class="pagination-list">
    <a href="admin-show-blog?page={{ $x+1 }}"><button class="btn btn-default" >{{ $x+1 }}</button></a>
</div>
@endfor
                       </div>
		
</section>

<script>
    
var arr = [];
$('input[name="blog_checkbox[]"]').click(function() {
    if(this.checked == true) {
    arr.push($(this).val());
   console.log(arr); 
    } else if (this.checked == false) {
        var index = arr.indexOf($(this).val());
        arr.splice(index, 1);
   console.log(arr);
//   var arr_string = JSON.stingify(arr);
//   $("#delarray").val(arr_string);
   
    }
    if(arr.length > 0) {
        $('.blog_bulk_del').attr('style', 'display:block');
    } else  {
        $('.blog_bulk_del').toggle('hide');
    }
    
    $("#delarray").attr('value', JSON.stringify(arr));
});
$('#bulkdelsub').click(function() {
    
});
$('#bulkdelsub');

</script>

@if(app('request')->input('id') == true)
<!-- Modal -->
@foreach($blogs->where('id', app('request')->input('id'))->get() as $blog)
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form action="/newblog" method="post">
            {!! csrf_field() !!}
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <span>TITLE: </span>
          <input name='blog_title' type="text" id="blog_title" value="{!! $blog->blog_title !!}" style="width: 79%;padding: 5px;">
          <input name="id" type="text" value="{{ $blog->id }}" hidden>
        </div>
        <div class="modal-body" style="text-align:center">
            <textarea name="blog_desc" id="blog_desc">{!! $blog->blog_description !!}</textarea>
        </div>
<div class="modal-footer" style="text-align:center">
            <button class="btn btn-default" type="submit" name="submit">Submit</button>
        </div>
      </div>
      {!! csrf_field() !!}
        </form>
      
    </div>
  </div>
 @endforeach
<script>
    $('#myModal').modal('show') ;
    $(document).keyup(function(e){
       if(e.keyCode == 27) {
           $('#myModal').modal('hide') ;
       } 
    });
</script>
<script>
        CKEDITOR.plugins.addExternal( 'base64image', '/ckeditor/base64image/', 'plugin.js' );
        CKEDITOR.plugins.addExternal( 'justify', '/ckeditor/justify/', 'plugin.js' );
        var description = document.getElementById('blog_desc');
        CKEDITOR.replace(description, {
        extraPlugins: 'base64image,justify',
        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div'
   });
</script>
@endif
<div class="blog_bulk_del fade-in">
    <form action="/deleteblogbulk" method="post">
        {!! csrf_field() !!}
        <input name="delarray" id="delarray" type="array" hidden>
        <button type="submit" name="submit" id="bulkdelsub" class="btn btn-danger blog_bulk_del_btn">
            Delete
        </button>
        {!! csrf_field() !!}
    </form>
</div>
</body>
</html>