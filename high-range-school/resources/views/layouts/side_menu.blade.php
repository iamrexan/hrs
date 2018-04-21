<section class="col-lg-2 col-md-2 col-sm-2 col-xs-12 left_base">
	<div class="left_inner">
		<div class="logo_base">
			<a href="http://highrangeschool.com/">
				<img src="/images/admin_logo.png">
			</a>
		</div>
		<div class="side_menu">
			<ul class="side_menuul">
				<li class="side_menu_list active">
					<a href="/home">
						home
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-about">
						about us
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-academics">
						academics
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-faculty">
						faculty
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-infrastructure">
						infrastructure
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-gallery">
						gallery
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-curricular">
						co-curricular activities
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-alumni">
						alumni
					</a>
					
				</li>
				<li class="side_menu_list">
					<a href="#">
						downloads
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-contact">
						contact us
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/post-blog">
						Post Blog
					</a>
				</li>
				<li class="side_menu_list">
					<a href="/admin-show-blog">
						All Blogs
					</a>
				</li>
				
			</ul>
		</div>
	</div>
</section>




<script>
	$(document).ready(function(){
		var leftwidth = $(".left_base").width();
		//alert(leftwidth);
		$(".rite_base").css("margin-left",leftwidth)
		$(".collapse_bar").on("click",function(){
			$(".rite_base").toggleClass("continueleft")
			$(".left_base").toggleClass("goleft")
		});
	});
</script>

<script>
	$(document).ready(function(){
		$(".side_menu_list").on("click",function(){
			$(this).children(".submenu").toggleClass("menushow");
			$(this).siblings(".side_menu_list").children(".submenu").removeClass("menushow");
		});
	})
</script>



<script>
	$(document).ready(function(){
		
	});
        
    function confirmDelete() {
        var con = confirm("Please once confirm before delete banner");
        if(con == false) {
            return false;
        } else {
            $(".delete_file i").on("click",function(){
                $(this).parents("tr").hide("slow");
            });
        }
    }
</script>

<script>
	$(document).ready(function(){
		$(".add_extras").on("click",function(){
			var adds = $("#adds").html();
			$(this).parents(".include_one").append(adds);
			//$(".inner_cont .welcome_base").addClass("show_extra");
		});
	});
</script>

<script>
	$(document).ready(function(){
		$("i.fa.fa-times").on("click",function(){
			alert("ssss");
		});
	});
</script>

<script>
	$(document).ready(function(){
		$(".about_unorder li").on("click",function(){
			$(this).addClass("active");
			$(this).siblings("li").removeClass("active");
			$('.hidden_overview_cont').removeClass('selected').eq( $(this).index()).addClass('selected');
		});
	});
</script>

<script>
	$(document).ready(function(){
		$(".addone_extras").on("click",function(){
			var newsec = $(".extra_section_append").html();
			$(this).parents(".hidden_overview_cont.selected").children(".tab-content").find(".tab-pane.active").append(newsec);
                        var __val__ = $(this).next('.add_head').html();
			$(".extra_section_append_inner i ").on("click",function(){
				$(this).parents(".extra_section_append_inner").hide("slow");
			});
		});
		
		$(".addone_extras").on("click",function(){
			var newsec = $(".extra_section_append").html();
			$(this).parents(".hidden_overview_cont.selected").children(".tab-contents").find(".tab-panes").append(newsec);
			
			$(".extra_section_append_inner i").on("click",function(){
				$(this).parents(".extra_section_append_inner").hide("slow");
			});
		});
	});
</script>
 @if(Session::has('message'))
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #77ee97;text-align:center;color:#fff">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hello! {{ Auth::user()->name }}</h4>
        </div>
        <div class="modal-body" style="text-align:center">
          <p>{{Session::get('message')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
<script>
    $('#myModal').modal('show') ;  
</script>
<div id="msg_remover">
    {{Session::remove('message')}}
</div>
@endif