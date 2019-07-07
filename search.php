<?php include "header.php";?>
<div class="search-banner m-bottom-20px">
<div class="container-fluid m-top-100px">
	<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="images/coffee-banner.jpg" class="img-responsive" alt="">
                    <!-- Static Header -->

			    </div>
			    <div class="item">
			    	<img src="images/coffee-banner.jpg" class="img-responsive" alt="">
			    	<!-- Static Header -->

			    </div>
			    <div class="item">
			    	<img src="images/coffee-banner.jpg" class="img-responsive" alt="">
			    	<!-- Static Header -->

			    </div>
			</div>
			<!-- Controls -->
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		 <div class="col-md-12 m-bottom search-div ">
		  	<center>
			 <div id="custom-search-input" class="search-width">
               	<form class="input-group">
	                <input type="text" class="form-control input-lg" placeholder="Search" id="dosearch" />
			                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                	</form>
									<div id="search_result" ></div>
									</div>

                </center>
            </div>
	</div>
</div>
</div>
<div class="container" >
	<div class="row" >
		<div id="profile"></div>
		</div>
</div>

<script>
$(document).ready(function(){
	$("#dosearch").keyup(function(){
		var search = $(this).val();
		if(search != ''){
		$.ajax({
			url:"search-action.php",
			method:"POST",
			data : {search:search},
			success : function(data){
				$("#search_result").fadeIn();
				$("#search_result").html(data);
					}
		});
	}else {
		$("#search_result").fadeOut();
		$("#search_result").html("");
	}
  });
});
</script>


<script>
$(document).ready(function(){
	$("#dosearch").keyup(function(){
		var search = $(this).val();
		if(search != ''){
		$.ajax({
			url:"search-action2.php",
			method:"POST",
			data : {search:search},
			success : function(data){
	$("#profile").html(data);
					}
		});
	}else {
$("#profile").html("");
	}
  });
});
</script>


<?php include "footer.php";?>
