
<?php include ("header.php") ;?>


<div class="container m-top-200px m-bottom-20px">
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

  <form action="insert-create-profile-1.php" method="post">
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
        <lable>User-name</lable>
      </div>
      <div class="col-xs-12 col-md-10">
        <input type="text" class="input-field" name="user_name" placeholder="Enter User Name">
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
        <input type="text" class="input-field" name="lives_in" placeholder="Enter City Name">
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
          <input type="radio" name="marital_status" value="Never Married"> Never Married
        </div>
        <div>
          <input type="radio" name="marital_status" value="Currently Separated"> Currently Separated
        </div>
        <div>
          <input type="radio" name="marital_status" value="Divorced"> Divorced
        </div>
        <div>
          <input type="radio" name="marital_status" value="Widow / Widower"> Widow / Widower
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
        <p>What is your kids status?</p>
        <div>
          <input type="radio" name="kids_status" value="1"> No
        </div>
        <div>
          <input type="radio" name="kids_status" value="2"> Yes, and they sometimes live at home
        </div>
        <div>
          <input type="radio" name="kids_status" value="3"> Yes, and they live away from home
        </div>
        <div>
          <input type="radio" name="kids_status" value="4"> Yes, and they live at home
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
          <input type="radio" name="want_kids" value="1"> No
        </div>
        <div>
          <input type="radio" name="want_kids" value="2"> Definitely
        </div>
        <div>
          <input type="radio" name="want_kids" value="3"> Someday
        </div>
        <div>
          <input type="radio" name="want_kids" value="4"> No Answer
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
          <input type="radio" name="religion" value="1"> Adventist
        </div>
        <div>
          <input type="radio" name="religion" value="2"> Agnostic
        </div>
        <div>
          <input type="radio" name="religion" value="3"> Atheist
        </div>
        <div>
          <input type="radio" name="religion" value="4"> Buddhist / Taois
        </div>

         <div>
          <input type="radio" name="religion" value="5"> Christian / Catholic
        </div>

         <div>
            <input type="radio" name="religion" value="6"> Christian / Protestant
          </div>
          <div>
            <input type="radio" name="religion" value="7"> Hindu
          </div>

          <div>
            <input type="radio" name="religion" value="8"> Jewish
          </div>

          <div>
            <input type="radio" name="religion" value="9"> Muslim / Islam
          </div>

          <div>
            <input type="radio" name="religion" value="10"> Spiritual but not religious
          </div>

          <div>
            <input type="radio" name="religion" value="11"> Other
          </div>

          <div>
            <input type="radio" name="religion" value="12"> Christian / Other
          </div>

          <div>
            <input type="radio" name="religion" value="13"> No Answer
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
          <input type="radio" name="smoke" value="1"> No
        </div>
        <div>
          <input type="radio" name="smoke" value="2"> Yes - occasionally
        </div>
        <div>
          <input type="radio" name="smoke" value="3"> Yes - daily
        </div>
        <div>
          <input type="radio" name="smoke" value="4"> Yes - trying to quit
        </div>

         <div>
          <input type="radio" name="smoke" value="5"> No Answer
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
          <input type="radio" name="drink" value="1"> Never
        </div>
        <div>
          <input type="radio" name="drink" value="2"> Social Drinker
        </div>
        <div>
          <input type="radio" name="drink" value="3"> Regularly
        </div>
        <div>
          <input type="radio" name="drink" value="4"> Moderately
        </div>

         <div>
          <input type="radio" name="drink" value="5"> No Answer
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
        <p>adasdasd adasdada ada adada adad ad adad adad</p>
      </div>
      <div class="col-xs-12">
        <textarea class="description-textarea" name="self_desc" placeholder="Enter Describtion"></textarea>
      </div>
    </div>
</div>




<head>
<?php include "dbconnection.php"  ?>
  <script
    src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <style type = "text/css">
.hobbies-dropdown{
float : left;
list-style: none;
padding: 0px;
border: 1px solid black;
margin-top: 0px;
}


    </style>
  </head>
<body>
<div class="container">
  <div class="row">

      <div class="col-xs-12 m-bottom-20px">
        <h4>Hobbies</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">
        </div>
    </body>


       <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="hobbies[]" value="reading">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="hobbies[]" value="travelling">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="hobbies[]">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="hobbies[]">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive" >
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="hobbies[]">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
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
       <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="sports[]" value="cricket">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="sports[]" value="badminton">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="sports[]" value="tabletennis">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
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
       <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="movies[]" value="end game"  >
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="movies[]" value="uri">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
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
       <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="tv_shows[]" value="sherlok homes">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="tv_shows[]" value="friends">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
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
       <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="type_songs[]" value="romantic">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="type_songs[]" value="rock">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
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
       <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="type_books[]" value="chankaya niti">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox" name="type_books[]" value="zero to one">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>
         <div class="col-xs-12 col-md-2 m-bottom">
            <div class="activity-box">
              <div class="box-img padding-5px">
                <img src="images/athlete1.jpg" class="img-responsive">
              </div>
              <div class="activity-content">
                  <center>
                    <p>Athlete</p>
                    <input type="checkbox" class="input-checkbox">
                  </center>
              </div>
            </div>
        </div>

        <div class="col-xs-12">
          <center>
          <input type="submit" class="submit-btn m-bottom-3per" value="Save">
          </center>
        </div>
  </div>
</div>
<input type="submit"  name="submit" value="submit" />
</form>
</div>
<?php include "footer.php"?>;
