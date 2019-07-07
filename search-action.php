<?php
include "dbconnection.php";
if(isset($_POST['search'])){
$search = $_POST['search']."%";
$sql = "SELECT user_name from user_profile where user_name
        like ? OR studied_at like ?
        UNION
        select firstname from user
        where firstname like ? OR lastname like ?
        UNION
        select page_name from business_profile
        where page_name like ? OR page_user_name like ? limit 20";
$stmt = $conn->prepare($sql);
$stmt->execute(array($search,$search,$search,$search,$search,$search));
$rows = $stmt->fetchAll();


foreach($rows as $row){
echo "<ul>".$row['user_name']."</ul>";
}
}else if($_POST['search'] = ""){

};
?>
