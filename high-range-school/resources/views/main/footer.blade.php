<section class="footer_sec">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 first_foot">
			<h1 class="foot_head wow fadeInUp">
				contact us
			</h1>
			<ul class="main_address wow fadeInUp">
				<li>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> The High Range School</p>
					<p class="left_padd">Munnar - 685616</p>
					<p class="left_padd">Idukki(Dt) - Kerala.</p>
				</li>
				<li>
					<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="/tel:04865-242219">04865-242219</a></p>
				</li>
				<li>
					<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:mail@gmail.com">mail@gmail.com</a></p>
				</li>
			</ul>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 first_foot">
			<h1 class="foot_head wow fadeInUp">
				quick links
			</h1>
			<ul class="main_address wow fadeInUp">
				<li>
					<a href="/index.php">Home</a>
				</li>
				<li>
					<a href="/about_overview.php">About Us</a>
				</li>
				<li>
					<a href="/academics.php">Academics</a>
				</li>
				<li>
					<a href="/faculty.php">Faculty</a>
				</li>
				
			</ul>
		</div>
		
		
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 first_foot">
			<h1 class="foot_head no_head">
				<!-- quick links -->
			</h1>
			<ul class="main_address wow fadeInUp">
				<li>
					<a href="/infrastructure.php">Infrastructure</a>
				</li>
				<li>
					<a href="/cocurricular_activities.php">Co-Curricular Activities</a>
				</li>
				<li>
					<a href="/events.php">Events</a>
				</li>
				<li>
					<a href="javascript:void(0)">Videos</a>
				</li>
				
			</ul>
		</div>
		
		
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 first_foot">
			<h1 class="foot_head no_head">
				<!-- quick links -->
			</h1>
			<ul class="main_address wow fadeInUp">
				<li>
					<a href="/events.php">Gallery</a>
				</li>
				<li>
					<a href="/alumni_overview.php">Alumni</a>
				</li>
				<li>
					<a href="javascript:void(0)">Downloads</a>
				</li>
				<li>
					<a href="/contact.php">Contact Us</a>
				</li>
				
			</ul>
		</div>
		
	</div>
</section>

<section class="copywrite_sec">
	<div class="container">
		<p class="left_copy wow fadeInUp">
			Copyright © 2017, Highrangeschool. All Rights Reserved.
		</p>
		<ul class="rite_social wow fadeInUp">
			<li>
				<a href="https://www.facebook.com/hrsmunnar" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="https://twitter.com/highrangeschool/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</li>
		</ul>
	</div>
</section>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #77ee97;text-align:center;color:#fff">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hello! </h4>
        </div>
        <div class="modal-body" style="text-align:center">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
<div id="msg_remover">
</div>



{{ Html::Script('js/jquery.min.js') }}
{{ Html::Script('js/owl.carousel.min.js') }}
{{ Html::Script('js/wow.min.js') }}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$("li.main_menu").hover(function(){
			$(this).find("ul.mean_base").toggleClass("first_menu");
		});
		
		$("li.mean_menu").hover(function(){
			$(this).find("ul.inner_base").toggleClass("second_menu");
		});
		
	});
	
</script>

<script>
	$(document).ready(function(){
		$(".menu_mobile").on("click",function(){
			$(".menu_inner").toggleClass("left_menu");
		});
	});
</script>


<script>
	$(document).ready(function(){
		$(window).scroll(function(){
		var win = $(window).scrollTop();
		if(win>=1)
		{
		$("section.menu_sec").addClass("fixed_menu");
		}
		else 
		{
		$("section.menu_sec").removeClass("fixed_menu");
		}
		});
		
	});
</script>
<script>
    $(document).ready(function() {
       $('.item:first-child').addClass('active');
    });
</script>
    