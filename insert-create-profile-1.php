<?php
session_start();
include("db.php");
//print_r($_POST);


if(isset($_POST['submit']))
{
				$user_id = $_SESSION['userid'];
				$user = $_POST['user_name'];
				$liv = $_POST['lives_in'];
				$bfrom = $_POST['birthplace'];
				$position = $_POST['designation'];
				$firm = $_POST['company_name'];
				$studies = $_POST['studied_at'];
				$marr= $_POST['marital_status'];
				$children = $_POST['kids_status'];
				$kids = $_POST['want_kids'];
				$faith = $_POST['religion'];
				$smk = $_POST['smoke'];
				$drk = $_POST['drink'];
				$sld = $_POST['self_desc'];
        $interest = $_POST['hobbies'];
        $play = $_POST['sports'];
        $film = $_POST['movies'];
        $tvs = $_POST['tv_shows'];
        $tps = $_POST['type_songs'];
        $tpb = $_POST['type_books'];
				$fbl = $_POST['facebook_link'];
				$twl = $_POST['twitter_link'];
				$lkl = $_POST['linkedin_link'];
				$instl = $_POST['instagram_link'];
      	$hobbies=implode(",",$interest);$sports=implode(",",$play);$movies=implode(",",$film);$tv_shows=implode(",",$tvs);$type_songs=implode(",",$tps);$type_books=implode(",",$tpb);
				$sql = "INSERT INTO user_profile(user_id,user_name,lives_in,birthplace,designation,company_name,studied_at,marital_status,kids_status,want_kids,religion,smoke,drink,self_desc,fb_link,insta_link,twitter_link,linkedin_link,hobbies,sports,movies,tv_shows,type_songs,type_books)
				VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = $conn->prepare($sql);
				$pdoExec =
				$stmt->execute(array($user_id,$user,$liv,$bfrom,$position,$firm,$studies,$marr,$children,$kids,$faith,$smk,$drk,$sld,$fbl,$instl,$twl,$lkl,$hobbies,$sports,$movies,$tv_shows,$type_songs,$type_books));


					$sql1	= "insert into hobby_likes(user_id,hobby_id) values (?,?)";
					$stmt1 = $conn->prepare($sql1);
     			foreach($interest as $interests){
						print_r($interest);
			//	die();
				$pdo1	= $stmt1->execute(array($user_id,$interests["0"]));
								}

				if($pdo1){
					echo 'data inserted';
				}else echo "failed";

				$sql2	= "insert into movie_likes(user_id,movie_id) values (?,?)";
				$stmt2 = $conn->prepare($sql2);
   			foreach($film as $movie){
					print_r($movies);
		//	die();
				$pdo2	= $stmt2->execute(array($user_id,$movie["0"]));
			}

			if($pdo2){
				echo 'data inserted';
			}else echo "failed";

			$sql3	= "insert into sports_like(user_id,sport_id) values (?,?)";
			$stmt3 = $conn->prepare($sql3);
		foreach($play as $game){
		print_r($game);
		//	die();
		$pdo3	= $stmt1->execute(array($user_id,$game["0"]));}

		if($pdo3){
			echo 'data inserted';
		}else echo "failed";

		$sql4	= "insert into tvshows_likes(user_id,tvshows_id) values (?,?)";

		$stmt4 = $conn->prepare($sql4);
	foreach($tvs as $tvshows){
	print_r($tvshows);
	//	die();
	$pdo4	= $stmt4->execute(array($user_id,$tvshows["0"]));}

	if($pdo4){
		echo 'data inserted';
	}else echo "failed";

	$sql5	= "insert into typebooks_like(user_id,book_id) values (?,?)";

	$stmt5 = $conn->prepare($sql5);
foreach($tpb as $books){
print_r($books);
//	die();
$pdo5	= $stmt5->execute(array($user_id,$books["0"]));}

if($pdo5){
	echo 'data inserted';
}else echo "failed";

$sql6	= "insert into typesong_likes(user_id,song_id) values (?,?)";

$stmt6 = $conn->prepare($sql6);
foreach($tps as $songs){
print_r($songs);
//	die();
$pdo6	= $stmt6->execute(array($user_id,$songs["0"]));}

if($pdo6){
echo 'data inserted';
}else echo "failed";


					if($pdoExec)
         		{

           		echo '-> Your Data Inserted';


         		}
       			else{
       				echo 'Data Not Inserted';
								}
							}
							else echo "failed";
?>
