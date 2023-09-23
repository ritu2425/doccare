<?php include './config.php';
$hospital_email=$_POST['email'];
$hospital_password=$_POST['password'];
 if($hospital_email!="" || $hospital_password!=""){
 $sql="select hospital_id, hospital_email,hospital_password from hospital_data where hospital_email='".$hospital_email."' AND hospital_password='".$hospital_password."' ";
 $stmt = $DB->prepare($sql);
$stmt->execute();
$countr=$stmt->rowCount();
if($countr == 1){
while($res1=$stmt->fetch(PDO::FETCH_ASSOC))
{
extract($res1);
	
if ($hospital_password==$res1['hospital_password']){
session_start();
$_SESSION['hospital_id'] = $res1['hospital_id'];
$_SESSION['hospital_email'] = $res1['hospital_email'];
		header('location:./hospital_home.php');exit();
}else{?><?php header('location:./index.php?pass=wrong');exit();}
		}



		
  
	}else{

 header('location:./index.php?email=wrong');exit();}}else{ header('location:./index.php?fill=all');
		
		
	}



?>
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
