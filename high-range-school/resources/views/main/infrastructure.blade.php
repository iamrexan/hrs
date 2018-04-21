<!DOCTYPE html>
<html lang="en">
<head>
  <title>High Range School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  {{ Html::style('css/main/style.css') }}
  {{ Html::style('css/main/responsive.css') }}
  {{ Html::style('css/main/owl.carousel.min.css') }}
  {{ Html::style('css/main/hover-min.css') }}
  {{ Html::style('css/main/font-awesome.min.css') }}
</head>
<body>

@include('main.header')

<section class="profile_sec">
	<h1 class="page_head">
			infrastructure
		</h1>
	<div class="container">
		<div class="page_inner">
                    
				<h3 class="princi_head">
					labs
				</h3>
			
			@foreach($infrastructure->where('section_title', 'labs')->get() as $infra)
                            
                            {!! $infra->section_inner_description !!}
                        
                        @endforeach
                        
                        
			@foreach($infrastructure->where('section_title', 'library')->get() as $infra)
                            
                            {!! $infra->section_inner_description !!}
                        
                        @endforeach
                        
                        @foreach($infrastructure->where('section_title', 'transport')->get() as $infra)
                            
                            {!! $infra->section_inner_description !!}
                        
                        @endforeach
			
			
	</div>
</section>




@include('main.footer')

<script>
	$(document).ready(function(){
		$("li.lab_visual li span").on("click",function(){
			var current = $(this).siblings(".lab_conts").html();
				$("#lab_cont .modal-body").html(current);
		});
	});
</script>

<!-----------------------popup start----------------------------->

<div class="modal fade in lab_cont" id="audio_lab" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body">
            <h4 class="extra_head">
                Audio Visual Lab
            </h4>
            @foreach($infrastructure->where('section_title', 'audio')->get() as $infra)
                {!! $infra->section_inner_description !!}
            @endforeach
	</div>
       </div>
      
    </div>
</div>

<div class="modal fade in lab_cont" id="bio_lab" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body">
            <h4 class="extra_head">
                Biology Lab
            </h4>
            @foreach($infrastructure->where('section_title', 'biology')->get() as $infra)
                {!! $infra->section_inner_description !!}
            @endforeach
	</div>
       </div>
      
    </div>
</div>

<div class="modal fade in lab_cont" id="che_lab" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body">
            <h4 class="extra_head">
                Chemistry Lab
            </h4>
            @foreach($infrastructure->where('section_title', 'chemistry')->get() as $infra)
                {!! $infra->section_inner_description !!}
            @endforeach
	</div>
       </div>
      
    </div>
</div>

<div class="modal fade in lab_cont" id="phy_lab" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body">
            <h4 class="extra_head">
                Physics Lab
            </h4>
            @foreach($infrastructure->where('section_title', 'physics')->get() as $infra)
                {!! $infra->section_inner_description !!}
            @endforeach
	</div>
       </div>
      
    </div>
</div>

<div class="modal fade in lab_cont" id="com_lab" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body">
            <h4 class="extra_head">
                Computer Lab
            </h4>
            @foreach($infrastructure->where('section_title', 'computer')->get() as $infra)
                {!! $infra->section_inner_description !!}
            @endforeach
	</div>
       </div>
      
    </div>
</div>

<div class="modal fade in lab_cont" id="maths_lab" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body">
            <h4 class="extra_head">
                Maths Lab
            </h4>
            @foreach($infrastructure->where('section_title', 'maths')->get() as $infra)
                {!! $infra->section_inner_description !!}
            @endforeach
	</div>
       </div>
      
    </div>
</div>

<!-----------------------popup end----------------------------->

		<script>
                    $(document).ready(function() {
                       $('.page_inner h3').next().addClass('msg_inner apend_rr');
                       $('.msg_inner.apend_rr').next().prepend('<li class="names"><div class="name_principal"><h3 class="princi_head_2">transport</h3></div></li>');
                       $('.apend_rr').append('<li class="lab_visual"><ul><li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 inner_lab"><span data-toggle="modal" data-target="#audio_lab">Audio Visual Lab</span></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 inner_lab"><span data-toggle="modal" data-target="#bio_lab">Biology lab</span></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 inner_lab"><span data-toggle="modal" data-target="#che_lab">Chemistry lab</span></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 inner_lab"><span data-toggle="modal" data-target="#phy_lab">Physics lab</span></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 inner_lab"><span data-toggle="modal" data-target="#com_lab">Computer lab</span></li><li class="col-lg-2 col-md-2 col-sm-2 col-xs-12 inner_lab"><span data-toggle="modal" data-target="#maths_lab">Maths lab</span></li></ul></li>');
                       $('.msg_inner.apend_rr').next().addClass('msg_inner lib_cla');
                       $('.modal-body>ul').addClass('msg_inner');
                       $('.msg_inner.lib_cla').next('ul').prepend('<li class="names"><div class="name_principal"><h3 class="princi_head_2">transport</h3></div></li>');
                       $('.lib_cla').next('ul').addClass('msg_inner tra_cla');
                       $('h4').addClass('extra_head');
                       $('.extra_head').next('ul').addClass('msg_inner extra_ul');
                    });
                </script>
</body>
</html>