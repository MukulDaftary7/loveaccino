<?php
include "db.php";
if(isset($_REQUEST['country_id'])){
  $dbh = connect_db();
  $sql = $dbh->prepare("SELECT * FROM states WHERE country_id = ?");
  $sql->execute(array($_REQUEST['country_id']));
  $rows = $sql->fetchAll();
  echo "<option value='0'>Select state</option>";
  foreach($rows as $row){
    echo "<option value='".$row['state_id']."'>".$row['state_name']."</option>";
  }
}
?>
