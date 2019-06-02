<?php
session_start();
include "dbconnection.php";
if(isset($_POST['submit'])){
	if(!empty($_POST['firstname'])){
		if(!empty($_POST['lastname'])){
			if(!empty($_POST['email'])){
				if(!empty($_POST['password'])){
					if(!empty($_POST['Confirm_password'])){
						if(!empty($_POST['mobile_no'])){
							if(!empty($_POST['city'])){
								if(!empty($_POST['state'])){
									if(!empty($_POST['country'])){
										if(!empty($_POST['day'])){
											if(!empty($_POST['month'])){
												if(!empty($_POST['year'])){
													if(!empty($_POST['gender'])){
														$firstname = $_POST['firstname'];
														$lastname = $_POST['lastname'];
														$email = $_POST['email'];
														$password = $_POST['password'];
														$Confirm_password = $_POST['Confirm_password'];
														$mobile_no = $_POST['mobile_no'];
														$city = $_POST['city'];
														$state = $_POST['state'];
														$country = $_POST['country'];
														$day = $_POST['day'];
														$month = $_POST['month'];
														$year = $_POST['year'];
														$gender = $_POST['gender'];

														if($password==$Confirm_password){
															$sql = "INSERT INTO user(firstname,lastname,email,password,mobile_no,city,state,country,day,month,year,gender)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
									       				$stmt = $conn->prepare($sql);
									      					$pdoExec = $stmt->execute(array($firstname,$lastname,$email,$password,$mobile_no,$city,$state,$country,$day,$month,$year,$gender));
																		if($pdoExec){
									           					$_SESSION['message'] = "data inserted successfully";
																			header('location: index.php');
																			exit();
									         							}
									       							else{
									       							$_SESSION['message'] = "data not inserted";
									        							}
									        				}else {
																		$_SESSION['message'] = "password not matched";
																		header('location: signup.php');
																		exit();
													              }

													}else  {
														$_SESSION['message'] = 'please select gender';
														header('location: signup.php');
														exit();
                                }

												}else  {
													$_SESSION['message'] = 'please select year';
													header('location: signup.php');
													exit();
														}
											}else {
												$_SESSION['message'] = 'please select month';
												header('location: signup.php');
												exit();
												}
										}		else  {
														$_SESSION['message'] = 'please select day';
														header('location: signup.php');
														exit();
													}
									} 	else  {
													$_SESSION['message'] = 'please select country';
													header('location: signup.php');
													exit();
													}

								}else  {
									$_SESSION['message'] = 'please select state';
									header('location: signup.php');
									exit();
								}

							}else  {
								$_SESSION['message'] = 'please select city';
								header('location: signup.php');
								exit();
							}

						}else {
						$_SESSION['message'] = 'please enter mobile number';
						header('location: signup.php');
						exit();
						}
					}else{
					$_SESSION['message'] = 'please set confirm password text field';
					header('location: signup.php');
					exit();
					}
				}else {
					$_SESSION['message'] = 'please set password';
					header('location: signup.php');
					exit();
				}
			}else {
			$_SESSION['message'] = 'please enter email';
			header('location: signup.php');
			exit();
		}
	}else {
		 $_SESSION['message'] = "please enter lastname";
		 header('location: signup.php');
		 exit();
	 }
 }else {
	  $_SESSION['message'] = "please enter firstname";
	 header('location: signup.php');
	 exit();
 }
}else {
	$_SESSION['message'] = "please fill all details";
  header('location: signup.php');
	exit();
}
?>
