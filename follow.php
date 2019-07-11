<?php include("dbconnection.php");
$business_id = $_REQUEST['business_id'];
$user_id = $_REQUEST['user_id'];
$stmt = $conn->prepare("SELECT * FROM  follow where business_id = ? and user_id =? ");
$stmt->execute(array($business_id,$user_id));
$rows = $stmt->fetchAll();
if(count($rows)==0 ){
  $follow = 1;
  $stmt = $conn->prepare("INSERT INTO follow(user_id,business_id,follow_status) values(?,?,?)");
  $stmt->execute(array($user_id,$business_id,$follow));
   echo"here 0";
}else {
  $follow = 0;
  if ($rows['0']['follow_status'] == 0) {$follow = 1;}
  $stmt = $conn->prepare("UPDATE follow SET follow_status=? where user_id = ? and business_id =?");
  $stmt->execute(array($follow,$user_id,$business_id));
  echo"here 0".$follow;
}
?>
