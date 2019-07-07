<?php
include "header.php";
// include "functions.php";
// check_user();
?>

<div class="container m-top-120px m-bottom-20px">
  <div class="row">
    <div class="col-xs-12">
        <h4 class="f-left">
      Create my Business Profile
      </h4>
      <a href="business-index.php" class="f-right">
        <button type="button" class="cbp-btn">
           <i class="fa fa-plus"></i>  Create Business Profile
        </button>
      </a>
</div >
    <div class="col-xs-12">
         <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
    </div>
  </div>
</div>
<div>
<center><h3>Welcome <?php echo $_SESSION['name'];?></h3></center>
      <form action="user-profile-action.php" method="post">
<div class="container ">
  <div class="row">
    <div class="col-xs-12 m-bottom">
      <div class="profile-heading-container">
        <h2 class="font-20px m-zero">Create Profile</h2>
        </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h4>User Name</h4>
      </div>
      <div class="col-xs-12 col-md-2">
        <!-- <lable>User-name</lable> -->
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field" name="user_name" placeholder="Enter User Name" value='<?php echo $_SESSION['username']?>' readonly>
      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Live In</h4>
      </div>
      <div class="col-xs-12 col-md-2">
        <lable>Indore, India</lable>
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field"  name="lives_in" placeholder="Enter City Name">
      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>From</h4>
      </div>
      <div class="col-xs-12 col-md-2">
        <lable>Bhopal, India</lable>
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field" name="birthplace" placeholder="Enter City Name">
      </div>
    </div>
</div>
<div class="container m-bottom-20px">

    <div class="row">
      <div class="col-xs-12 m-bottom-20px">
        <h4>Occupaiton</h4>
      </div>
      <div class="col-xs-12 col-md-2">
        <lable>Senior Designer</lable>
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field" name="designation" placeholder="Enter Position">

      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12 col-md-2">
        <lable>Company Name</lable>
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field" name="company_name" placeholder="Enter Company Name">
      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12 m-bottom-20px">
        <h4>Stdies At</h4>
      </div>
      <div class="col-xs-12 col-md-2">
        <lable>abc college</lable>
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field" name="studied_at" placeholder="Enter College/ School name">
      </div>
    </div>
</div>


<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Relationship</h4>
      </div>
      <div class="col-xs-12">
        <p>What is your relationship status?</p>
        <div>
          <input type="radio" name="marital_status" value='1'> Never Married
        </div>
        <div>
          <input type="radio" name="marital_status" value='2'> Currently Separated
        </div>
        <div>
          <input type="radio" name="marital_status" value='3'> Divorced
        </div>
        <div>
          <input type="radio" name="marital_status" value='4'> Widow / Widower
        </div>
      </div>

    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Have Kids</h4>
      </div>
      <div class="col-xs-12">
        <p>What is your relationship status?</p>
        <div>
          <input type="radio" name="kids_status" value='1'> No
        </div>
        <div>
          <input type="radio" name="kids_status" value='2'> Yes, and they sometimes live at home
        </div>
        <div>
          <input type="radio" name="kids_status" value='3'> Yes, and they live away from home
        </div>
        <div>
          <input type="radio" name="kids_status" value='4'> Yes, and they live at home
        </div>
      </div>

    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Want Kids</h4>
      </div>
      <div class="col-xs-12">
        <p>Do you want children?</p>
        <div>
          <input type="radio" name="want_kids" value='1'> No
        </div>
        <div>
          <input type="radio" name="want_kids" value='2'> Definitely
        </div>
        <div>
          <input type="radio" name="want_kids" value='3'> Someday
        </div>
        <div>
          <input type="radio" name="want_kids" value='4'> No Answer
        </div>
      </div>

    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Faith</h4>
      </div>
      <div class="col-xs-12">
        <p>Describe your Faith.</p>
        <div>
          <input type="radio" name="religion" value='1'> Adventist
        </div>
        <div>
          <input type="radio" name="religion" value='2'> Agnostic
        </div>
        <div>
          <input type="radio" name="religion" value='4'> Atheist
        </div>
        <div>
          <input type="radio" name="religion" value='5'> Buddhist / Taois
        </div>

         <div>
          <input type="radio" name="religion" value='6'> Christian / Catholic
        </div>

         <div>
            <input type="radio" name="religion" value='7'> Christian / Protestant
          </div>
          <div>
            <input type="radio" name="religion" value='8'> Hindu
          </div>

          <div>
            <input type="radio" name="religion" value='9'> Jewish
          </div>

          <div>
            <input type="radio" name="religion" value='10'> Muslim / Islam
          </div>

          <div>
            <input type="radio" name="religion" value='11'> Spiritual but not religious
          </div>

          <div>
            <input type="radio" name="religion" value='12'> Other
          </div>

          <div>
            <input type="radio" name="religion" value='13'> Christian / Other
          </div>

          <div>
            <input type="radio" name="religion" value='14'> No Answer
          </div>
      </div>

    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Smoke</h4>
      </div>
      <div class="col-xs-12">
        <p>Do you Smoke?</p>
        <div>
          <input type="radio" name="smoke" value='1'> No
        </div>
        <div>
          <input type="radio" name="smoke" value='2'> Yes - occasionally
        </div>
        <div>
          <input type="radio" name="smoke" value='3'> Yes - daily
        </div>
        <div>
          <input type="radio" name="smoke" value='4'> Yes - trying to quit
        </div>

         <div>
          <input type="radio" name="smoke" value='5'> No Answer
        </div>
      </div>

    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Drink</h4>
      </div>
      <div class="col-xs-12">
        <p>How often do you drink?</p>
        <div>
          <input type="radio" name="drink" value='1'> Never
        </div>
        <div>
          <input type="radio" name="drink" value='2'> Social Drinker
        </div>
        <div>
          <input type="radio" name="drink" value='3'> Regularly
        </div>
        <div>
          <input type="radio" name="drink" value='4'> Moderately
        </div>

         <div>
          <input type="radio" name="drink" value='5'> No Answer
        </div>
      </div>

    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Describe Your Self</h4>
      </div>
      <div class="col-xs-12">
        <p>Please Describe Your Self Crisply.</p>
      </div>
      <div class="col-xs-12">
        <textarea class="description-textarea" name="self_desc" placeholder="Enter Describtion"></textarea>
      </div>
    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Facebook Link</h4>
      </div>
      <div class="col-xs-12">
        <lable>liks show here</lable>
      </div>
      <div class="col-xs-12">
        <input type="text" class="input-field" name='facebook_link' placeholder="Facebook Link Here">

      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Twitter Link</h4>
      </div>
      <div class="col-xs-12">
        <lable>liks show here</lable>
      </div>
      <div class="col-xs-12">
        <input type="text" class="input-field" placeholder="Twitter Link Here" name="twitter_link">

      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Instagram Link</h4>
      </div>
      <div class="col-xs-12">
        <lable>liks show here</lable>
      </div>
      <div class="col-xs-12">
        <input type="text" class="input-field" placeholder="Instagram Link Here" name="instagram_link">

      </div>
    </div>
</div>
<div class="container">

    <div class="row">
      <div class="col-xs-12">
        <h4>Linkedin Link</h4>
      </div>
      <div class="col-xs-12">
        <lable>liks show here</lable>
      </div>
      <div class="col-xs-12">
        <input type="text" class="input-field" placeholder="Linked In Link Here" name="linkedin_link">

      </div>
    </div>
</div>
<div class="container">
  <div class="row">

      <div class="col-xs-12 m-bottom-20px">
        <h4>Hobbies</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">
      </div>

         <?php 	$sql = "SELECT * from Hobby limit 6";
             $stmt = $conn->prepare($sql);
               $stmt->execute();
               $rows = $stmt->fetchAll();
               //print_r($rows);
               //die();
               foreach($rows as $row){
                 echo ('<div class="col-xs-12 col-md-2 m-bottom">
                 <div class="activity-box">
                   <div class="box-img padding-5px">
                     <img src="images/athlete1.jpg" class="img-responsive">
                   </div>
                   <div class="activity-content">
                       <center>
                         <p>'.$row[1].'</p>
                         <input type="checkbox" name="hobbies[]" value="'.$row[0].'" class="input-checkbox">
                       </center>
                   </div>
                 </div>
                   </div>');
               }
          ?>
        </div>
    </div>
        </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-xs-12 m-bottom-20px">
        <h4>Sports</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">
      </div>
      <?php 	$sql = "SELECT * from sports_name limit 6";
          $stmt1 = $conn->prepare($sql);
            $stmt1->execute();
            $rows1 = $stmt1->fetchAll();
            //print_r($rows);
            //die();
            foreach($rows1 as $row){
              echo ('<div class="col-xs-12 col-md-2 m-bottom">
              <div class="activity-box">
                <div class="box-img padding-5px">
                  <img src="images/athlete1.jpg" class="img-responsive">
                </div>
                <div class="activity-content">
                    <center>
                      <p>'.$row[1].'</p>
                      <input type="checkbox" name="sports[]"  value="'.$row[0].'" class="input-checkbox">
                    </center>
                </div>
              </div>
                </div>');
            }
       ?>
     </div>
   </div>
</div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 m-bottom-20px">
        <h4>Movies</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">
        </div>

              <?php 	$sql = "SELECT * from movies_name limit 6";
                  $stmt5 = $conn->prepare($sql);
                    $stmt5->execute();
                    $rows5 = $stmt5->fetchAll();
                    //print_r($rows);
                    //die();
                    foreach($rows5 as $row){
                      echo ('<div class="col-xs-12 col-md-2 m-bottom">
                      <div class="activity-box">
                        <div class="box-img padding-5px">
                          <img src="images/athlete1.jpg" class="img-responsive">
                        </div>
                        <div class="activity-content">
                            <center>
                              <p>'.$row[1].'</p>
                              <input type="checkbox" name="movies[]" value="'.$row[0].'" class="input-checkbox">
                            </center>
                        </div>
                      </div>
                        </div>');
                    }
               ?>
             </div>
           </div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 m-bottom-20px">
        <h4>TV Shows</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">

      </div>
      <?php 	$sql = "SELECT * from tvshows_name limit 6";
          $stmt2 = $conn->prepare($sql);
            $stmt2->execute();
            $rows2 = $stmt2->fetchAll();
            //print_r($rows);
            //die();
            foreach($rows2 as $row){
              echo ('<div class="col-xs-12 col-md-2 m-bottom">
              <div class="activity-box">
                <div class="box-img padding-5px">
                  <img src="images/athlete1.jpg" class="img-responsive">
                </div>
                <div class="activity-content">
                    <center>
                      <p>'.$row[1].'</p>
                      <input type="checkbox" name="tv_shows[]" value="'.$row[0].'" class="input-checkbox">
                    </center>
                </div>
              </div>
                </div>');
            }
       ?>
     </div>
   </div>
  </div>
</div>
<div class="container">
  <div class="row">

      <div class="col-xs-12 m-bottom-20px">
        <h4>Music/Songs</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">

      </div>
               <?php 	$sql = "SELECT * from songs_name limit 6";
                  $stmt4 = $conn->prepare($sql);
                    $stmt4->execute();
                    $rows4 = $stmt4->fetchAll();
                    //print_r($rows);
                    //die();
                    foreach($rows4 as $row){
                      echo ('<div class="col-xs-12 col-md-2 m-bottom">
                      <div class="activity-box">
                        <div class="box-img padding-5px">
                          <img src="images/athlete1.jpg" class="img-responsive">
                        </div>
                        <div class="activity-content">
                            <center>
                              <p>'.$row[1].'</p>
                              <input type="checkbox" name="type_songs[]" value="'.$row[0].'" class="input-checkbox">
                            </center>
                        </div>
                      </div>
                      </div>  ');
                    }
               ?>

             </div>
             </div>

<div class="container">
  <div class="row">

      <div class="col-xs-12 m-bottom-20px">
        <h4>Books</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">

      </div>
             </div><?php 	$sql = "SELECT * from books_name limit 6";
                  $stmt3 = $conn->prepare($sql);
                    $stmt3->execute();
                    $rows3 = $stmt3->fetchAll();
                    //print_r($rows);
                    //die();
                    foreach($rows3 as $row){
                      echo ('<div class="col-xs-12 col-md-2 m-bottom">
                      <div class="activity-box">
                        <div class="box-img padding-5px">
                          <img src="images/athlete1.jpg" class="img-responsive">
                        </div>
                        <div class="activity-content">
                            <center>
                              <p>'.$row[1].'</p>
                              <input type="checkbox" name="type_books[]" value="'.$row[0].'" class="input-checkbox">
                            </center>
                        </div>
                      </div>
                        </div>');
                    }
               ?>
             </div>
         </div>


        <div class="col-xs-12">
          <center>
          <input type="submit" class="submit-btn m-bottom-3per" name="submit" value="Save">
          </center>
        </div>
  </div>
</div>
</form>
</div>
<?php include "footer.php";?>
