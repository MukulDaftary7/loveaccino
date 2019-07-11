<div class="container desktop-display">
	<!-- //<div class="row">
	 //	<?php //include "chat-popup.php" ;?> -->
	<!--</div> -->
</div>
<div class="mobile-nav mobile-display">
<div class="container-fluid">
	<div class="row">
    <ul class="nav-menu-ul">
		<li>
			<a href="index.php">
				<div class="btn-div">
					<i class="fa fa-home"></i>
				</div>
			</a>
		</li>
    <li>
      <a href="match.php">
        <div class="btn-div">
          <i class="fa fa-user-plus"></i>
        </div>
      </a>
    </li>
		<li>
			<a href="search.php">
				<div class="btn-div">
					<i class="fa fa-search"></i>
				</div>
			</a>
		</li>
		<li>
			<a href="chat.php">
				<div class="btn-div">
					<i class="fa fa-comments-o"></i>
				</div>
			</a>
		</li>

		<li>
			<a href="profile.php">
				<div class="btn-div">
					<i class="fa fa-user"></i>
				</div>
			</a>
		</li>
		</ul>
	</div>
</div>
</div>
<script>
	function openForm() {
		document.getElementById("myForm").style.display = "block";
	}
	function closeForm() {
		document.getElementById("myForm").style.display = "none";
	}
</script>

<script>
	function openForm2() {
		document.getElementById("myForm2").style.display = "block";
	}
	function closeForm2() {
		document.getElementById("myForm2").style.display = "none";
	}
</script>

<script>
	$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

<script>
$(function(){
  var $refreshButton = $('#refresh');
  var $results = $('#css_result');

  function refresh(){
    var css = $('style.cp-pen-styles').text();
    $results.html(css);
  }

  refresh();
  $refreshButton.click(refresh);

  // Select all the contents when clicked
  $results.click(function(){
    $(this).select();
  });
});

</script>
<script>
	  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
</script>
<script type="text/javascript">
	(function($) {
    $(document).ready(function() {
        var $chatbox = $('.chatbox'),
            $chatboxTitle = $('.chatbox__title'),
            $chatboxTitleClose = $('.chatbox__title__close'),
            $chatboxCredentials = $('.chatbox__credentials');
        $chatboxTitle.on('click', function() {
            $chatbox.toggleClass('chatbox--tray');
        });
        $chatboxTitleClose.on('click', function(e) {
            e.stopPropagation();
            $chatbox.addClass('chatbox--closed');
        });
        $chatbox.on('transitionend', function() {
            if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
        });

    });
})(jQuery);
</script>


<script>
	$(document).on("click","#emoji-picker",function(e){
   e.stopPropagation();
    $('.intercom-composer-emoji-popover').toggleClass("active");
});

$(document).click(function (e) {
    if ($(e.target).attr('class') != '.intercom-composer-emoji-popover' && $(e.target).parents(".intercom-composer-emoji-popover").length == 0) {
        $(".intercom-composer-emoji-popover").removeClass("active");
    }
});

$(document).on("click",".intercom-emoji-picker-emoji",function(e){
    $(".test-emoji").append($(this).html());
});

$('.intercom-composer-popover-input').on('input', function() {
    var query = this.value;
    if(query != ""){
      $(".intercom-emoji-picker-emoji:not([title*='"+query+"'])").hide();
    }
    else{
      $(".intercom-emoji-picker-emoji").show();
    }
});
</script>
<script type="text/javascript">
	$("#Next").click(function(){
	$("#slider").append($("#slider img:first-of-type"));
});

$("#Prev").click(function(){
	$("#slider").prepend($("#slider img:last-of-type"));
});
</script>
    <script>
        var ratingOptions = {
            selectors: {
                starsSelector: '.rating-stars',
                starSelector: '.rating-star',
                starActiveClass: 'is--active',
                starHoverClass: 'is--hover',
                starNoHoverClass: 'is--no-hover',
                targetFormElementSelector: '.rating-value'
            }
        };

        $(".rating-stars").ratingStars(ratingOptions);
    </script>
<script type="text/javascript">
	function ekUpload(){
  function Init() {

    console.log("Upload Initialised");

    var fileSelect    = document.getElementById('file-upload'),
        fileDrag      = document.getElementById('file-drag'),
        submitButton  = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();

    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  // Output
  function output(msg) {
    // Response
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {

    console.log(file.name);
    output(
      '<strong>' + encodeURI(file.name) + '</strong>'
    );

    // var fileType = file.type;
    // console.log(fileType);
    var imageName = file.name;

    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
    if (isGood) {
      document.getElementById('start').classList.add("hidden");
      document.getElementById('response').classList.remove("hidden");
      document.getElementById('notimage').classList.add("hidden");
      // Thumbnail Preview
      document.getElementById('file-image').classList.remove("hidden");
      document.getElementById('file-image').src = URL.createObjectURL(file);
    }
    else {
      document.getElementById('file-image').classList.add("hidden");
      document.getElementById('notimage').classList.remove("hidden");
      document.getElementById('start').classList.remove("hidden");
      document.getElementById('response').classList.add("hidden");
      document.getElementById("file-upload-form").reset();
    }
  }
  function setProgressMaxValue(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.max = e.total;
    }
  }

  function updateFileProgress(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.value = e.loaded;
    }
  }

  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        pBar.style.display = 'inline';
        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        xhr.upload.addEventListener('progress', updateFileProgress, false);

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!

            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
}
ekUpload();
</script>

<script>
$(document).ready(function() {
    $('#datePicker').datepicker();
	});
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-container', {
      zoom: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>
	<script>
		    $(document).ready(function() {
  		 $(".carousel-inner").swiperight(function() {
    		  $(this).parent().carousel('prev');
	    		});
		   $(".carousel-inner").swipeleft(function() {
		      $(this).parent().carousel('next');
	   });
	});
	</script>
	  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        setting-name: setting-value
      });
    });
  </script>
	<script>
		$('.responsive').slick({
		  	dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
	</script>
	<script type="text/javascript">'use strict';

var InstaVideo = function (el) {

  	this.$video    = $(el);
  	this.$wrapper  = $(el).parent().addClass('paused');
  	this.$controls = this.$wrapper.find('.video-controls');

  	// remove native controls
  	this.$video.removeAttr('controls');

  	// check if video should autoplay
    if(!!this.$video.attr('autoplay')) {
    		this.$wrapper.removeClass('paused').addClass('playing');
    }

  	// check if video is muted
    if(this.$video.attr('muted') === 'true' || this.$video[0].volume === 0) {
        this.$video[0].muted = true;
        this.$wrapper.addClass('muted');
    }

  	// attach event handlers
  	this.attachEvents();
};

InstaVideo.prototype.attachEvents = function () {

  	var self = this,
        _t; // keep track of timeout for controls

  	// attach handlers to data attributes
    this.$wrapper.on('click', '[data-media]', function () {

        var data = $(this).data('media');

        if(data === 'play-pause') {
            self.playPause();
        }
        if(data === 'mute-unmute') {
            self.muteUnmute();
        }
    });

  	this.$video.on('click', function () {
    		self.playPause();
    });

    this.$video.on('play', function () {
    		self.$wrapper.removeClass('paused').addClass('playing');
    });

    this.$video.on('pause', function () {
    		self.$wrapper.removeClass('playing').addClass('paused');
    });

    this.$video.on('volumechange', function () {
        if($(this)[0].muted) {
        		self.$wrapper.addClass('muted');
        }
        else {
        		self.$wrapper.removeClass('muted');
        }
    });

    this.$wrapper.on('mousemove', function () {

        // show controls
        self.$controls.addClass('video-controls--show');

        // clear original timeout
        clearTimeout(_t);

        // start a new one to hide controls after specified time
        _t = setTimeout(function () {
            self.$controls.removeClass('video-controls--show');
        }, 2250);

    }).on('mouseleave', function () {
        self.$controls.removeClass('video-controls--show');
    });
};

InstaVideo.prototype.playPause = function () {
    if (this.$video[0].paused) {
    		this.$video[0].play();
    } else {
		    this.$video[0].pause();
    }
};

InstaVideo.prototype.muteUnmute = function () {
    if(this.$video[0].muted === false) {
    		this.$video[0].muted = true;
    } else {
		    this.$video[0].muted = false;
    }
};

$('video').each(function () {
  	new InstaVideo(this);
});</script>
<script>
	$(document).ready(function() {
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
	</script>
	<!---yha se mene likha h 53,--->
	<script language="javascript">
		var i;
		var post_id;
		var user_id;

		function changeImage(i,post_id,user_id)
		{
			var like_count =  $('#like_span'+post_id).html();
			//alert(like_count);
			if (document.getElementById("like"+i).getAttribute("src") == "images/like1.svg")
			{
				document.getElementById("like"+i).src = "images/like2.svg";
					//alert(i+""+post_id+""+user_id);
			}
			else
			{
		document.getElementById("like"+i).src = "images/like1.svg";
			}
			$.ajax({
							url: "insert_like.php",
							type: "post",
							data: {post_id:post_id,user_id:user_id,like_count:like_count},
							success:function(data){
							//	alert(data);
								$('#like_span'+post_id).html(data);
							}

						});
		}

		function comment(post_id){
			//alert("hii");
			$("#comment_input"+post_id).focus();
		}

		function comment_input(post_id,user_id){
			//alert("hii");
			var comments = $("#comment_input"+post_id).val();
			var comment_count =  $('#comment_span'+post_id).html();
			if(comments != ""){
				$.ajax({
								url: "insert_comment.php",
								type: "post",
								//dataType: 'json',
								data: {post_id:post_id,user_id:user_id,comments:comments,comment_count:comment_count},
								success:function(data){
								//  alert(data);
									var data1 = JSON.parse(data);
									//alert(data1);
									$('#comment_span'+post_id).html(data1.comment_count);
									$('#comment_show'+post_id).html("<a href='profile.php?user_id="+user_id+"'> <b>"+data1.username+" </b></a>"+data1.comment+"</p>");
								}

							});
				$("#comment_input"+post_id).val('');
			}

		}

		function save_post(post_id,user_id){

			if (document.getElementById("save"+post_id).className == "fa fa-bookmark-o")
			{
				document.getElementById("save"+post_id).className = "fa fa-bookmark";
					//alert(i+""+post_id+""+user_id);
			}
			else
			{
		document.getElementById("save"+post_id).className = "fa fa-bookmark-o";
			}
			$.ajax({
							url: "insert_saved_post.php",
							type: "post",
							data: {post_id:post_id,user_id:user_id},
							//success:function(data){
								//alert(data);
							//}

						});
		}

		function grabOffer(user_id,post_id)
		{

		//	var offer_id = "offer"+post_id+"user"+user_id;

			$.ajax({
							url: "offer.php",
							type: "post",
							data: {post_id:post_id,user_id:user_id},
							success:function(data){
								alert(data);
								$('.modal-content').html(data);
							}

						});
		}


	</script>
<script>
	function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>

<script>
$(document).ready(function(){
$('#country').on('change',function(){

		var countryID = $(this).val();
		if(countryID){
				$.ajax({
						type:'POST',
						url:'fetch-state',
						data:'country_id='+countryID,
						success:function(html){
								$('#state').html(html);
						}
				});
		}else{
				$('#state').html('<option value="">Select country first</option>');
		}
});

$('#state').on('change',function(){
		var stateID = $(this).val();
		if(stateID){
				$.ajax({
						type:'POST',
						url:'fetch-city.php',
						data:'state_id='+stateID,
						success:function(html){
								$('#city').html(html);
						}
				});
		}else{
				$('#city').html('<option value="">Select state first</option>');
		}
});
});
</script>

 </body>
</html>
