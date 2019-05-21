<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

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

				if($firstname && $lastname && $email && $password && $Confirm_password && $mobile_no && $city && $state && $country && $day && $month && $year && $gender){
				if($password==$Confirm_password){

				$sql = "INSERT INTO user(firstname,lastname,email,password,mobile_no,city,state,country,day,month,year,gender)
				VALUES(:firstname,:lastname,:email,:password,:mobile_no,:city,:state,:country,:day,:month,:year,:gender)";

       	$stmt = $conn->prepare($sql);

      	$pdoExec = $stmt->execute(array(':firstname'=>$firstname,':lastname'=>$lastname,':email'=>$email,':password'=>$password,':mobile_no'=>$mobile_no,':city'=>$city,':state'=>$state,
				':country'=>$country,':day'=>$day,':month'=>$month,':year'=>$year,':gender'=>$gender));

        if($pdoExec)
         {
           echo '-> Your Data Inserted';
         }
       else{
       echo 'Data Not Inserted';
        }
        }
				}
				}

				?>
