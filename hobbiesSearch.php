<?php
try{
    $pdo = new PDO("mysql:host=localhost;port=3307;dbname=loveaccino", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
if(isset($_POST["query"]))
{
$hobbieslist= "<ul><li>data not found!</li></ul>";

$sql = " SELECT * FROM hobby where hobby_name LIKE :query ";
$stmt=$pdo->prepare($sql);
$term = $_POST["query"] . '%';
// bind parameters to statement
$stmt->bindParam(":query", $term);
// execute the prepared statement
$stmt->execute();



if($stmt->rowCount() > 0)
{
  $hobbieslist = "<ul>";

       while($row =  $stmt->fetch())
        $hobbieslist .= "<li>".$row['hobby_name']."</li>";


       $hobbieslist .= "</ul>";

}
exit($hobbieslist);
}
?>
