
<?php
include("dbconnection.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

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

      $hobbies=implode(",",$interest);$sports=implode(",",$play);$movies=implode(",",$film);$tv_shows=implode(",",$tvs);$type_songs=implode(",",$tps);$type_books=implode(",",$tpb);




				$sql = "INSERT INTO user_profile(user_name,lives_in,birthplace,designation,company_name,studied_at,marital_status,kids_status,want_kids,religion,smoke,drink,self_desc,
          hobbies,sports,movies,tv_shows,type_books,type_songs)
				VALUES(:user,:liv,:bfrom,:position,:firm,:studies,:marr,:children,:kids,:faith,:smk,:drk,:sld,:hobbies,:sports,:movies,:tv_shows,:type_songs,:type_books)";

       	$stmt = $conn->prepare($sql);


      	$pdoExec = $stmt->execute(array(':user'=>$user,':liv'=>$liv,':bfrom'=>$bfrom,':position'=>$position,':firm'=>$firm,':studies'=>$studies,':marr'=>$marr,
				':children'=>$children,':kids'=>$kids,':faith'=>$faith,':smk'=>$smk,':drk'=>$drk,':sld'=>$sld,
        ':hobbies'=>$hobbies,':sports'=>$sports,':movies'=>$movies,':tv_shows'=>$tv_shows,':type_books'=>$type_books,':type_songs'=>$type_songs));


        if($pdoExec)
         {
           echo '-> Your Data Inserted';
         }
       else{
       echo 'Data Not Inserted';

        }

}


				?>
