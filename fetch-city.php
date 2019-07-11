<?php
include "db.php";
if(isset($_REQUEST['state_id'])){
  $dbh = connect_db();
  $sql = $dbh->prepare("SELECT * FROM cities WHERE state_id = ?");
  $sql->execute(array($_REQUEST['state_id']));
  $rows = $sql->fetchAll();
  echo "<option value='0'>Select city</option>";
  foreach($rows as $row){
    echo "<option value='".$row['city_id']."'>".$row['city_name']."</option>";
  }
}
?>
