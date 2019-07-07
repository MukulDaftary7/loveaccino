<?php
include "dbconnection.php";
if(isset($_POST['submit'])){
	if(!empty($_POST['firstname'])){
		if(!empty($_POST['lastname'])){
			if(!empty($_POST['email'])){
				if(!empty($_POST['username'])){
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

														$sql1 ="SELECT * from user where email=?";
														$stmt1 = $conn->prepare($sql1);
														$stmt1->execute(array($email));
														$rows = $stmt1->fetchAll();

															if(count($rows) == 1){
																$_SESSION['message'] = "email already exists";
																header('location: signup.php');
																exit();
															}	else if($password==$Confirm_password){
																	$sql = "INSERT INTO user(username,firstname,lastname,email,password,mobile_no,
																		city,state,country,day,month,year,gender)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
																		$stmt = $conn->prepare($sql);
																		$pdoExec = $stmt->execute(array($_POST['username'],$firstname,$lastname,$email,$password,$mobile_no
																		,$city,$state,$country,$day,$month,$year,$gender));
																		if($pdoExec){
																			$stmt2 = $conn->prepare($sql1);
																			$stmt2->execute(array($email));
																			$rows2 = $stmt2->fetchAll();
																				$row = $rows2[0];
																				$_SESSION['user_id'] = $row['id'];
																				$_SESSION['name'] = $row['firstname'];
																				$_SESSION['username'] = $row['username'];
																				$_SESSION['message'] = "Registration Successfull";
																				header('location: user-profile.php');
																				exit();
																						}else $_SESSION['message'] = "Registration Failed";
																					}else $_SESSION['message'] = "password not matched";
																			}else $_SESSION['message'] = 'please select gender';
																		}else  $_SESSION['message'] = 'please select year';
																	}else $_SESSION['message'] = 'please select month';
																}else $_SESSION['message'] = 'please select day';
															}else $_SESSION['message'] = 'please select country';
														}else $_SESSION['message'] = 'please select state';
													}else  $_SESSION['message'] = 'please select city';
												}else $_SESSION['message'] = 'please enter mobile number';
											}else $_SESSION['message'] = 'please set confirm password text field';
										}else $_SESSION['message'] = 'please set password';
									}else $_SESSION['message'] = 'please enter email';
						  	}else $_SESSION['message'] = "please enter username";
							}else  $_SESSION['message'] = "please enter lastname";
						}else $_SESSION['message'] = "please enter firstname";
					}else $_SESSION['message'] = "please fill all details";

				// echo $_SESSION['user_id'];
				// echo $_SESSION['name'];
			header('location: signup.php');
			exit();
	?>
