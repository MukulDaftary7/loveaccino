<!DOCTYPEhtml>
<html>
	<head>
		<title>Loveacci | Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/fontawesome.css">
		<link rel="stylesheet" href="mystyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/country.js"></script>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>


<?php include "db.php"; ?>
	</head>
	<body>
		<nav class="navbar navbar-default login_nav">
			<div class="container-fluid">
				<div class="navbar-header logo">
					<a href="#"><img src="images/logo-white.png" class="img-responsive" width="80"></a>
				</div>
				<ul class="nav navbar-nav login">
					<li><input type="email" name="email" placeholder="Enter Your Email" class="email"></li>
					<li><input type="password" name="psw" placeholder="Enter Your Password" class="password"></li>
					<li><button type="submit" class="login_btn">Login</button></li>
				</ul>
			</div>
		</nav>
		<div>
			<canvas id="testCanvas" ></canvas>
		</div>
		<!---<canvas id="canvas"></canvas>--->
		<div class="container-fluid signup-form">

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<img src="images/login-page-img.png" class="img-responsive" alt="love">
				</div>
				<div class="signup col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<form action="insert.php" method="POST">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input type="text" name="firstname" placeholder="Enter Your Name" class="form_field" required="">
							</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input type="text" name="lastname" placeholder="Enter Your Surname" class="form_field" required="">
							</div>
							</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<input type="text" name="email" placeholder="Enter Your Email" class="e_mail" required="">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input type="text" name="password" placeholder="Enter Your Password" class="form_field" required="">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<input type="text" name="Confirm_password" placeholder="Confirm Password" class="form_field" required="">
							</div>
							</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<input type="tel" name="mobile_no" placeholder="Enter Your Mobile No." class="mobile_no" required="">
								</div>
							</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="row">

										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<h3>City</h3>
											<input type="text" class="day" id="city" placeholder="city" name="city" required="">
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<h3>State</h3>
											<input type="text" class="month" id="state" placeholder="State" name="state"	required="">
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<h3>Country</h3>
												<select id="country" name="country" autocomplete="country" class="year" required="">
													<option value="" selected="selected">Country</option>
													<option value="AF">Afghanistan</option>
													<option value="AL">Albania</option>
													<option value="DZ">Algeria</option>
													<option value="AS">American Samoa</option>
													<option value="AD">Andorra</option>
													<option value="AO">Angola</option>
													<option value="AI">Anguilla</option>
													<option value="AQ">Antarctica</option>
													<option value="AG">Antigua and Barbuda</option>
													<option value="AR">Argentina</option>
													<option value="AM">Armenia</option>
													<option value="AW">Aruba</option>
													<option value="AU">Australia</option>
													<option value="AT">Austria</option>
													<option value="AZ">Azerbaijan</option>
													<option value="BS">Bahamas</option>
													<option value="BH">Bahrain</option>
													<option value="BD">Bangladesh</option>
													<option value="BB">Barbados</option>
													<option value="BY">Belarus</option>
													<option value="BE">Belgium</option>
													<option value="BZ">Belize</option>
													<option value="BJ">Benin</option>
													<option value="BM">Bermuda</option>
													<option value="BT">Bhutan</option>
													<option value="BO">Bolivia</option>
													<option value="BA">Bosnia and Herzegowina</option>
													<option value="BW">Botswana</option>
													<option value="BV">Bouvet Island</option>
													<option value="BR">Brazil</option>
													<option value="IO">British Indian Ocean Territory</option>
													<option value="BN">Brunei Darussalam</option>
													<option value="BG">Bulgaria</option>
													<option value="BF">Burkina Faso</option>
													<option value="BI">Burundi</option>
													<option value="KH">Cambodia</option>
													<option value="CM">Cameroon</option>
													<option value="CA">Canada</option>
													<option value="CV">Cape Verde</option>
													<option value="KY">Cayman Islands</option>
													<option value="CF">Central African Republic</option>
													<option value="TD">Chad</option>
													<option value="CL">Chile</option>
													<option value="CN">China</option>
													<option value="CX">Christmas Island</option>
													<option value="CC">Cocos (Keeling) Islands</option>
													<option value="CO">Colombia</option>
													<option value="KM">Comoros</option>
													<option value="CG">Congo</option>
													<option value="CD">Congo</option>
													<option value="CK">Cook Islands</option>
													<option value="CR">Costa Rica</option>
													<option value="CI">Cote d'Ivoire</option>
													<option value="HR">Croatia (Hrvatska)</option>
													<option value="CU">Cuba</option>
													<option value="CY">Cyprus</option>
													<option value="CZ">Czech Republic</option>
													<option value="DK">Denmark</option>
													<option value="DJ">Djibouti</option>
													<option value="DM">Dominica</option>
													<option value="DO">Dominican Republic</option>
													<option value="TP">East Timor</option>
													<option value="EC">Ecuador</option>
													<option value="EG">Egypt</option>
													<option value="SV">El Salvador</option>
													<option value="GQ">Equatorial Guinea</option>
													<option value="ER">Eritrea</option>
													<option value="EE">Estonia</option>
													<option value="ET">Ethiopia</option>
													<option value="FK">Falkland Islands (Malvinas)</option>
													<option value="FO">Faroe Islands</option>
													<option value="FJ">Fiji</option>
													<option value="FI">Finland</option>
													<option value="FR">France</option>
													<option value="FX">France, Metropolitan</option>
													<option value="GF">French Guiana</option>
													<option value="PF">French Polynesia</option>
													<option value="TF">French Southern Territories</option>
													<option value="GA">Gabon</option>
													<option value="GM">Gambia</option>
													<option value="GE">Georgia</option>
													<option value="DE">Germany</option>
													<option value="GH">Ghana</option>
													<option value="GI">Gibraltar</option>
													<option value="GR">Greece</option>
													<option value="GL">Greenland</option>
													<option value="GD">Grenada</option>
													<option value="GP">Guadeloupe</option>
													<option value="GU">Guam</option>
													<option value="GT">Guatemala</option>
													<option value="GN">Guinea</option>
													<option value="GW">Guinea-Bissau</option>
													<option value="GY">Guyana</option>
													<option value="HT">Haiti</option>
													<option value="HM">Heard and Mc Donald Islands</option>
													<option value="VA">Holy See (Vatican City State)</option>
													<option value="HN">Honduras</option>
													<option value="HK">Hong Kong</option>
													<option value="HU">Hungary</option>
													<option value="IS">Iceland</option>
													<option value="IN">India</option>
													<option value="ID">Indonesia</option>
													<option value="IR">Iran (Islamic Republic of)</option>
													<option value="IQ">Iraq</option>
													<option value="IE">Ireland</option>
													<option value="IL">Israel</option>
													<option value="IT">Italy</option>
													<option value="JM">Jamaica</option>
													<option value="JP">Japan</option>
													<option value="JO">Jordan</option>
													<option value="KZ">Kazakhstan</option>
													<option value="KE">Kenya</option>
													<option value="KI">Kiribati</option>
													<option value="KP">Korea, Democratic People's Republic of</option>
													<option value="KR">Korea, Republic of</option>
													<option value="KW">Kuwait</option>
													<option value="KG">Kyrgyzstan</option>
													<option value="LA">Lao People's Democratic Republic</option>
													<option value="LV">Latvia</option>
													<option value="LB">Lebanon</option>
													<option value="LS">Lesotho</option>
													<option value="LR">Liberia</option>
													<option value="LY">Libyan Arab Jamahiriya</option>
													<option value="LI">Liechtenstein</option>
													<option value="LT">Lithuania</option>
													<option value="LU">Luxembourg</option>
													<option value="MO">Macau</option>
													<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
													<option value="MG">Madagascar</option>
													<option value="MW">Malawi</option>
													<option value="MY">Malaysia</option>
													<option value="MV">Maldives</option>
													<option value="ML">Mali</option>
													<option value="MT">Malta</option>
													<option value="MH">Marshall Islands</option>
													<option value="MQ">Martinique</option>
													<option value="MR">Mauritania</option>
													<option value="MU">Mauritius</option>
													<option value="YT">Mayotte</option>
													<option value="MX">Mexico</option>
													<option value="FM">Micronesia, Federated States of</option>
													<option value="MD">Moldova, Republic of</option>
													<option value="MC">Monaco</option>
													<option value="MN">Mongolia</option>
													<option value="MS">Montserrat</option>
													<option value="MA">Morocco</option>
													<option value="MZ">Mozambique</option>
													<option value="MM">Myanmar</option>
													<option value="NA">Namibia</option>
													<option value="NR">Nauru</option>
													<option value="NP">Nepal</option>
													<option value="NL">Netherlands</option>
													<option value="AN">Netherlands Antilles</option>
													<option value="NC">New Caledonia</option>
													<option value="NZ">New Zealand</option>
													<option value="NI">Nicaragua</option>
													<option value="NE">Niger</option>
													<option value="NG">Nigeria</option>
													<option value="NU">Niue</option>
													<option value="NF">Norfolk Island</option>
													<option value="MP">Northern Mariana Islands</option>
													<option value="NO">Norway</option>
													<option value="OM">Oman</option>
													<option value="PK">Pakistan</option>
													<option value="PW">Palau</option>
													<option value="PA">Panama</option>
													<option value="PG">Papua New Guinea</option>
													<option value="PY">Paraguay</option>
													<option value="PE">Peru</option>
													<option value="PH">Philippines</option>
													<option value="PN">Pitcairn</option>
													<option value="PL">Poland</option>
													<option value="PT">Portugal</option>
													<option value="PR">Puerto Rico</option>
													<option value="QA">Qatar</option>
													<option value="RE">Reunion</option>
													<option value="RO">Romania</option>
													<option value="RU">Russian Federation</option>
													<option value="RW">Rwanda</option>
													<option value="KN">Saint Kitts and Nevis</option>
													<option value="LC">Saint LUCIA</option>
													<option value="VC">Saint Vincent and the Grenadines</option>
													<option value="WS">Samoa</option>
													<option value="SM">San Marino</option>
													<option value="ST">Sao Tome and Principe</option>
													<option value="SA">Saudi Arabia</option>
													<option value="SN">Senegal</option>
													<option value="SC">Seychelles</option>
													<option value="SL">Sierra Leone</option>
													<option value="SG">Singapore</option>
													<option value="SK">Slovakia (Slovak Republic)</option>
													<option value="SI">Slovenia</option>
													<option value="SB">Solomon Islands</option>
													<option value="SO">Somalia</option>
													<option value="ZA">South Africa</option>
													<option value="GS">South Georgia and the South Sandwich Islands</option>
													<option value="ES">Spain</option>
													<option value="LK">Sri Lanka</option>
													<option value="SH">St. Helena</option>
													<option value="PM">St. Pierre and Miquelon</option>
													<option value="SD">Sudan</option>
													<option value="SR">Suriname</option>
													<option value="SJ">Svalbard and Jan Mayen Islands</option>
													<option value="SZ">Swaziland</option>
													<option value="SE">Sweden</option>
													<option value="CH">Switzerland</option>
													<option value="SY">Syrian Arab Republic</option>
													<option value="TW">Taiwan, Province of China</option>
													<option value="TJ">Tajikistan</option>
													<option value="TZ">Tanzania, United Republic of</option>
													<option value="TH">Thailand</option>
													<option value="TG">Togo</option>
													<option value="TK">Tokelau</option>
													<option value="TO">Tonga</option>
													<option value="TT">Trinidad and Tobago</option>
													<option value="TN">Tunisia</option>
													<option value="TR">Turkey</option>
													<option value="TM">Turkmenistan</option>
													<option value="TC">Turks and Caicos Islands</option>
													<option value="TV">Tuvalu</option>
													<option value="UG">Uganda</option>
													<option value="UA">Ukraine</option>
													<option value="AE">United Arab Emirates</option>
													<option value="GB">United Kingdom</option>
													<option value="US">United States</option>
													<option value="UM">United States Minor Outlying Islands</option>
													<option value="UY">Uruguay</option>
													<option value="UZ">Uzbekistan</option>
													<option value="VU">Vanuatu</option>
													<option value="VE">Venezuela</option>
													<option value="VN">Viet Nam</option>
													<option value="VG">Virgin Islands (British)</option>
													<option value="VI">Virgin Islands (U.S.)</option>
													<option value="WF">Wallis and Futuna Islands</option>
													<option value="EH">Western Sahara</option>
													<option value="YE">Yemen</option>
													<option value="YU">Yugoslavia</option>
													<option value="ZM">Zambia</option>
													<option value="ZW">Zimbabwe</option>
												</select>
											</div>
										</div>

								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3>Birthday</h3>
									<div class="row">

									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<h3>Day</h3>
										<select class="day" name="day">
											 <option value="01">01</option>
											 <option value="02">02</option>
											 <option value="03">03</option>
											 <option value="04" >04</option>
											 <option value="05">05</option>
											 <option value="06">06</option>
											 <option value="07">07</option>
											 <option value="08">08</option>
											 <option value="09">09</option>
											 <option value="10">10</option>
											 <option value="11">11</option>
											 <option value="12">12</option>
											 <option value="13">13</option>
											 <option value="14">14</option>
											 <option value="15">15</option>
											 <option value="16">16</option>
											 <option value="17">17</option>
											 <option value="18">18</option>
											 <option value="19">19</option>
											 <option value="20">20</option>
											 <option value="21">21</option>
											 <option value="22">22</option>
											 <option value="23">23</option>
											 <option value="24">24</option>
											 <option value="25">25</option>
											 <option value="26">26</option>
											 <option value="27">27</option>
											 <option value="28">28</option>
											 <option value="29">29</option>
											 <option value="30">30</option>
											 <option value="31">31</option>
										</select>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<h3>Month</h3>
										<select class="month" name="month" required="">
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<h3>Year</h3>
										<select class="year" name="year">
											<script>
												var myDate = new Date();
												var year = myDate.getFullYear();
												for(var i = 1950; i < year+1; i++){
												document.write('<option value="'+i+'">'+i+'</option>');
												}
											</script>
										</select>
										</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
									<select class="gender" name="gender" required="">
										<option value="female" class="gn">Female</option>
										<option value="male" class="gn">Male</option>
									</select>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 terms-info">
								<div class="row">
									<p class="col-xs-6 col-sm-6 col-md-6 col-lg-6">By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy. You may receive SMS message notifications from Facebook and can opt out at any time.</p>
								</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
									<button type="submit" name="submit" class="submit_btn" >Sign Up</button>
									<h1><?php notify();?></h1>
									</div>
							<div class="form-status">
								<?php echo $status ?>
							</div>

								</div>
							</div>
						</form>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bottom-condition">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="copyright">
								<p><i class="fa fa-copyright"></i> 2018-19-loveaccino.com All Rights Reserved</p>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="social-media">
								<ul>
									<li><i class="fa fa-facebook"></i></li>
									<li><i class="fa fa-google-plus"></i></li>
									<li><i class="fa fa-instagram"></i></li>
									<li><i class="fa fa-twitter"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
<script>

var canvas;
var stage;
var container;
var captureContainers;
var captureIndex;

function init() {
  // create a new stage and point it at our canvas:
  canvas = document.getElementById("testCanvas");
  stage = new createjs.Stage(canvas);
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  var w = canvas.width;
  var h = canvas.height;

  container = new createjs.Container();
  stage.addChild(container);

  captureContainers = [];
  captureIndex = 0;

  // create a large number of slightly complex vector shapes, and give them random positions and velocities:
  for (var i = 0; i < 100; i++) {
    var heart = new createjs.Shape();
    heart.graphics.beginFill(createjs.Graphics.getHSL(Math.random() * 30 - 45, 100, 50 + Math.random() * 30));
    heart.graphics.moveTo(0, -12).curveTo(1, -20, 8, -20).curveTo(16, -20, 16, -10).curveTo(16, 0, 0, 12);
    heart.graphics.curveTo(-16, 0, -16, -10).curveTo(-16, -20, -8, -20).curveTo(-1, -20, 0, -12);
    heart.y = -100;

    container.addChild(heart);
  }


  for (i = 0; i < 100; i++) {
    var captureContainer = new createjs.Container();
    captureContainer.cache(0, 0, w, h);
    captureContainers.push(captureContainer);
  }

  // start the tick and point it at the window so we can do some work before updating the stage:
  createjs.Ticker.timingMode = createjs.Ticker.RAF;
  createjs.Ticker.on("tick", tick);
}

function tick(event) {
  var w = canvas.width;
  var h = canvas.height;
  var l = container.numChildren;

  captureIndex = (captureIndex + 1) % captureContainers.length;
  stage.removeChildAt(0);
  var captureContainer = captureContainers[captureIndex];
  stage.addChildAt(captureContainer, 0);
  captureContainer.addChild(container);

  // iterate through all the children and move them according to their velocity:
  for (var i = 0; i < l; i++) {
    var heart = container.getChildAt(i);
    if (heart.y < -50) {
      heart._x = Math.random() * w;
      heart.y = h * (1 + Math.random()) + 50;
      heart.perX = (1 + Math.random() * 2) * h;
      heart.offX = Math.random() * h;
      heart.ampX = heart.perX * 0.1 * (0.15 + Math.random());
      heart.velY = -Math.random() * 2 - 1;
      heart.scaleX = heart.scaleY = Math.random() * 2 + 1;
      heart._rotation = Math.random() * 40 - 20;
      heart.alpha = Math.random() * 0.75 + 0.05;
      heart.compositeOperation = Math.random() < 0.33 ? "lighter" : "source-over";
    }
    var int = (heart.offX + heart.y) / heart.perX * Math.PI * 2;
    heart.y += heart.velY * heart.scaleX / 2;
    heart.x = heart._x + Math.cos(int) * heart.ampX;
    heart.rotation = heart._rotation + Math.sin(int) * 30;
  }

  captureContainer.updateCache("source-over");

  // draw the updates to stage:
  stage.update(event);
}

init();
			</script>
	</body>
</html>
