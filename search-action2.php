<?php
include "dbconnection.php";
if(isset($_POST['search'])){
    $search = "%".$_POST['search']."%";
   $sql2 = "select user_name,profile_pic from user_profile where user_name like  ?";
   $stmt2 = $conn->prepare($sql2);
   $stmt2->execute(array($search));
   $rows2 = $stmt2->fetchAll();
   foreach ($rows2 as $row){
  echo '<div class="col-xs-12 col-md-4">
     <center>
     <div class="post-box">
     <div class="box-img">

         <img src="images/'.$row['profile_pic'].'" class="img-responsive">

       <div class="offer-width">
          <span>50%</span>
         </div>
     </div>
     <div class="post-content">
       <div class="post-profile-info f-left">
         <img src = "images/'.$row['profile_pic'].'" class="img-responsive">
       </div>
       <div class="post-heading">
         <h4 class="font-size-15px post-heading-name"><a href="#">'.$row['user_name'].'</a></h4>
         <ul class="rating-heart">
           <li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
           <li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
           <li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
           <li><span><i class="fa fa-heart"></i></span></li>
           <li><span><i class="fa fa-heart"></i></span></li>
           <li><span class="color-black"><small>3.5/5</small></span>  <span class="color-black"><small>(Good)</small></span></li>
         </ul>
       </div>
       <div class="pop-up-btn post-dropdown-btn mobile-m-top-55px">
         <button class="modal-btn f-right" type="button" data-toggle="modal" data-target="#myModal"><img src="images/three-dot.png"></button>
       </div>
     </div>
     <div class="post-content m-post-content">
       <p class="offer-par">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
       <button class="post-offer-btn" type="button" data-toggle="modal" data-target="#myModal">Grab Offer</button>
     </div>
     <div class="like-comment-btn">
       <div class="like-comment-share-btn">
       <span class="btn-set">
           <button type="button" class="like-comment">
             <img src="images/like1.svg" class="width-60px">
           </button>
       </span>
       <span class="btn-set">
           <button type="button" class="like-comment">
             <img src="images/comment.svg" class="width-20px">
           </button>
         </span>
         <span class="btn-set">
           <button type="button" class="like-comment">
             <img src="images/share.svg" class="width-25px">
           </button>
         </span>
       </div>
       <div class="likes-info">
         <p class="like-comment-text"><a href=""><span>1000</span> likes</a>, <a class=""><span>250</span> Comments...</a></p>
      </div>
       <div class="comments-text">
         <p class="comments-par"><a href=""> <b>user-name </b></a> lorem ipsum adasd adadad adada</p>
       </div>
       <div class="comments-text-input">
         <input type="text" class="comment-input" placeholder="Add a Comment">
         <input type="submit" class="comment-btn" value=">">
       </div>
     </div>
  </div>
  </center>
   </div>';
   }

}
?>
