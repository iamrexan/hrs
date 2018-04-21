<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Files window</title>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta id="token" name="token" content="{{ csrf_token() }}">
<!-- include libraries(jQuery, bootstrap) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <!-- include summernote css/js -->
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
        <style>
           .list_img_base {
      border: #e1e1e1 solid 1px;
   padding: 5px;
   width: 100%;
   height: 130px;
   overflow: hidden;
   display: inline-block;
   background: #fff;
}

.list_img_base img {
width:100%;
}

.images_order {
padding:0;
margin:15px;
cursor:pointer;
}


.post_source {
   width: 50%;
   padding: 10px;
   border: #cacaca solid 1px;
font-weight:normal;
font-size:16px;
margin:0 0 0 20px;
text-align:center;
color:#000;
}

.copy_one_source {
display:inline-block;
margin:10px 0;
   font-family: 'OpenSans-Bold';
}

.get_source {
   font-size: 18px;
   text-transform: uppercase;
   font-weight: bold;
   margin: 0;
   position: fixed;
   bottom: 0;
   width: 100%;
   left: 0;
   z-index: 1;
   background: #004264bf;
   padding: 25px 0;
   color: #fff;
}

.adds_bords .list_img_base {
border-color:#1f8bc3;
}

.left_base {
   z-index: 9;
}
        </style>
    </head>
    <body>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_overview_base hidden_overview_cont selected">
<h1 class="add_head">Images list</h1>
<ul class="list_images col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
@foreach ($filel as $file)
<li class="images_order col-lg-2 col-md-2 col-sm-2 col-xs-12">
<span class="list_img_base">{{ Html::image($file) }}</span>
</li>
@endforeach</ul>
<div class="get_source">
<span class="copy_one_source">copy image link</span>
<input type="text" class="post_source" placeholder="url">
</div>
</div>

</section>

<script>
$(document).ready(function(){
$(".images_order").on("click",function(){
$(this).addClass("adds_bords");
$(this).siblings(".images_order").removeClass("adds_bords");
var source = $(this).find("img").attr("src");
$(".post_source").val(source);
});
});
</script>
    </body>
</html>
