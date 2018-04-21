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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  {{ Html::style('css/admin-font-awesome.min.css') }}
  {{ Html::style('css/admin-style.css') }}
  {{ Html::style('css/admin-responsive.css') }}
</head>
<style>
.blog_bulk_del.fade-in {
    display: none;
    position: absolute;
    top: 0;
    text-align: center;
    margin: 0 50%;
}
</style>
<body>

@extends('layouts.side_menu')

<section class="col-lg-10 col-md-10 col-sm-10 col-xs-12 rite_base" >
		@include('layouts.nav')
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about_overview_base"  id="table_relode">
				<div class="hidden_overview_cont selected" id="management">
					<div class="tab-contents ">
						<div class="tab-panes fade in active">
<table class="table">
    <thead>
      <tr>
        <th>Select</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Batch</th>
        <th>City</th>
        <th>Role</th>
        <th>Edit Role</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($user as $users)
      <tr>
          <td>
              <input class="alumni_radio" type="checkbox" name="alumni_radio[]" value="{{ $users->id }}">
          </td>
        <td>{{ $users->name }}</td>
        <td>{{ $users->phone }}</td>
        <td>{{ $users->batch }}</td>
        <td>{{ $users->city }}</td>
        <td>{{ $users->alumni }}</td>
        <td>
            <form method="post" id="alumni_form">
                {!! csrf_field() !!}
              <select name="alumni" class="alumni{{ $users->id }}">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="ex-pricipal">Ex-principal</option>
                <option value="admin">Admin</option>
              </select>
                <input name="id" value="{{ $users->id }}" hidden="">
            </form>
        </td>
        <td>
            <button class="single_del"><i class="fa fa-trash"></i></button>
            <input id="del_id" name="id" hidden="" value="{{ $users->id }}">
        </td>
      </tr>
    <script>
            $('.alumni{{ $users->id }} option[value="{{ $users->alumni }}"]').prop('selected', true);
    </script>
      @endforeach
    </tbody>
  </table>                                   
    {{ $user->links() }}
						</div>
					</div>
				</div>
			</div>
</section>
<!-- Delete Section -->
<script>
    $(document).ready(function() {
       $('.single_del').click(function () {
           $.ajax({
               url : 'http://localhost:8000/deleteAll',
               type : 'post',
               data : { 'arr' : $(this).next().val(), '_token' : '{{ csrf_token() }}'}
           })
            .done(function(response) {
                console.log(response);
                $('#table_relode').load('/users-list #table_relode');
                $('.popup_container').addClass('show_popup_container');
                $('.popup_container').slideDown();
           })
           .fail(function(xhr) {
               console.log(xhr);
           })
           console.log($(this).next().val());
       });
    });
</script>

<!-- Bulk delete Section -->
<script>
// creating an empty array
var arr = [];
var token_d = '{{ csrf_token() }}';
//arr.push ({
//    '_token' : token_d,
//})
//trigger click function against checkbox click event
$('input[name="alumni_radio[]"]').click(function() {
    if(this.checked == true) {
        //if checked true push checkbox value inside the array
        arr.push($(this).val());
        console.log(arr); 
    } else if (this.checked == false) {
        //if already checked after unchecked remove checkbox value from array
        var index = arr.indexOf($(this).val());
        arr.splice(index, 1);
        console.log(arr);
    }
    if(arr.length > 0) {
        // try to show the popup delete box in window
        $('.blog_bulk_del').attr('style', 'display:block');
    } else  {
        $('.blog_bulk_del').removeAttr('style');
    }
    
    $("#delarray").attr('value', JSON.stringify(arr));
});

//ajax request

$(document).ready(function() {
    if(arr.length == 0 || arr.length == null) {
        $('.blog_bulk_del').removeAttr('style');
    }
   $('#bulkdelsub').click(function(e) {
var token_d = '{{ csrf_token() }}';
console.log(arr);
    e.preventDefault();
       $.ajax({
           url : 'http://localhost:8000/deleteAll',
           data : {arr:arr, '_token' : token_d},
           type : 'post',
       })
       .done(function(response) {
           console.log(response);
           $('#table_relode').load('/users-list #table_relode');
           $('.blog_bulk_del').toggle('hide');
           $('.popup_container').addClass('show_popup_container');
           $('.popup_container').slideDown();
       })
        .fail(function(status, xhr, errorThrown) {
            console.log(status);
            console.log(xhr);
            console.log(errorThrown);
       })
   });
});

</script>
<div class="blog_bulk_del fade-in">
            <button id="bulkdelsub" class="btn btn-danger blog_bulk_del_btn">
            Delete
        </button>
</div>
<!-- Bulk delete Section -->

<!-- This section script for change alumni status by ajax request -->
<script>
    $(document).ready(function() {
        $('select[name="alumni"]').on('change', function() {
            var token = '{{ csrf_token() }}';
            var val = this.value;
            var clas = $(this).attr('class');
            var arr_v = {'alumni' : this.value, 'id' : $(this).next().val(), '_token' : token };
            console.log(arr_v);
            $.ajax({
                data : arr_v,
                url : 'http://localhost:8000/onChangeData',
                type : 'post',
                dataType : 'json',
            })
            .done(function(response) {
                $('.' + clas).parent().parent().prev().text(response[0]['alumni']);
                $('.popup_container').addClass('show_popup_container');
                $('.popup_container').slideDown();
            })
            .fail(function(status, xhr, errorThrown){
                console.log(status);
                console.log(xhr);
                console.log(errorThrown);
            });
        });
    });
</script>

<!-- Popup Container -->
<div class="popup_container">
    <div class="popup_box_container ">
        <i class="fa fa-plus"></i>
        <p>Updated Successfully</p>
        <button class="btn btn-default">Close</button>
    </div>
</div>
<script>
    $(document).ready(function() {
       $('.popup_box_container>i').on('click', function() {
           $('.popup_container').removeClass('show_popup_container');
       });
       $('.popup_box_container>button').on('click', function() {
           $('.popup_container').removeClass('show_popup_container');
       });
    });
</script>
<style>
    .popup_container {
        display: none;
        position: absolute;
        margin: 0 40%;
        width: 450px;
        max-height: 250px;
        background: #fff;
        border: 5px solid #f3f3f3;
        padding: 21px;
        top: 35px;
    }
    .show_popup_container {
        display: block !Important;
    }
    .popup_box_container {
        font-family: 'Roboto-Medium';
        font-size: 20px;
        padding: 10px;
        color: #1f8bc3;
        text-align: center;
        vertical-align: middle;
    }
    .popup_box_container i { 
        float: right;
        transform: rotate(45deg);
        font-size: 16px;
        position: absolute;
        top: 11px;
        right: 17px;
        cursor: pointer;
    }
</style>
<!-- Popup Container end -->
</body>
</html>