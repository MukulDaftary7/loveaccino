<?php
session_start();
include "db.php";
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
														$sql2= "SELECT id,email FROM user where email=?";
														$stmt1 = $conn->prepare($sql2);
														$stmt1->execute(array($_POST['email']));
													$rows	= $stmt1->fetchAll();
													//print_r($rows);
													if($email != $rows['0']['email'] || $rows['0']['email'] == ''){
														if($rows['0']['id'] != ""){
														$_SESSION['userid'] = $rows['0']['id'];


														if($password==$Confirm_password){
															$sql = "INSERT INTO user(firstname,lastname,email,password,mobile_no,
																city,state,country,day,month,year,gender)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
																$stmt = $conn->prepare($sql);
																$pdoExec = $stmt->execute(array($firstname,$lastname,$email,$password,$mobile_no
																,$city,$state,$country,$day,$month,$year,$gender));
																if($pdoExec){
									          				$_SESSION['message'] = "Registration Successfull";
																		header('location: create-user-profile1.php');
																		exit();
									         				}else{
									       							$_SESSION['message'] = "data not inserted";
																			header('location: signup.php');
																			exit();
																		}
																		}else {
																			$_SESSION['message'] = "password not matched";
																			header('location: signup.php');
																			exit();
																		}
																		 }
																		}else $_SESSION['message'] = 'email address already exists';
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
							}else  $_SESSION['message'] = "please enter lastname";
						}else $_SESSION['message'] = "please enter firstname";
					}else $_SESSION['message'] = "please fill all details";

header('location: signup.php');
exit();
?>
