<?php require_once './config.php';
$patient_hospital_id=trim($_POST["patient_hospital_id"]);
$patient_name=trim($_POST["patient_name"]);
$patient_mobile=trim($_POST["patient_mobile"]);
$patient_alternate_mobile=trim($_POST["patient_alternate_mobile"]);
$patient_dob=trim($_POST["patient_dob"]);
$patient_deases=trim($_POST["patient_deases"]);
$patient_adhar=trim($_POST["patient_adhar"]);
$patient_full_address=trim($_POST["patient_full_address"]);
$gender=trim($_POST["gender"]);
/*function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
} 
 
 
// File upload path 
$uploadPath = "./upload_rep/"; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 

	
	
	$fileName = time() . '_' .basename($_FILES["patient_report"]["name"]); 
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["patient_report"]["tmp_name"]; 
             
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $imageUploadPath,35); 
             
            if($compressedImage){*/ 



if($patient_name!=""||$patient_mobile!=""||$patient_deases!=""||$patient_alternate_mobile!=""||$patient_dob!=""||$patient_report!=""||$patient_full_address!=""||$patient_adhar!="")
{
	
	$sql="select patient_adhar from patient_details where patient_adhar='".$patient_adhar."'";
	$stmt=$DB->prepare($sql);
	$stmt->execute();
	$numr=$stmt->rowCount();

	if(!$numr>0){
	
    $sql = "INSERT into `patient_details`(`patient_name`,`patient_mobile`,`patient_alternate_mobile`,`patient_dob`,`patient_full_address`,`patient_adhar`,`gender`,`patient_hospital_id`)
	VALUES "."( :patient_name,:patient_mobile,:patient_alternate_mobile,:patient_dob,:patient_full_address,:patient_adhar,:gender,:patient_hospital_id)";
 $stmt = $DB->prepare($sql);
//$last_insert_id = $DB->lastInsertId();
      // bind the values
$stmt->bindValue(":patient_hospital_id",$patient_hospital_id);
$stmt->bindValue(":patient_name", $patient_name);
$stmt->bindValue(":patient_mobile", $patient_mobile);     	
$stmt->bindValue(":patient_alternate_mobile", $patient_alternate_mobile);      
$stmt->bindValue(":patient_dob", $patient_dob);      
$stmt->bindValue(":patient_full_address", $patient_full_address);	
$stmt->bindValue(":patient_adhar", $patient_adhar);  
$stmt->bindValue(":gender", $gender);      
	  // execute Query
      $stmt->execute();

      $result = $stmt->rowCount();
	  if ($result > 0) {	  

header('location:patient_entry.php?added=success');


			}else{ echo "no";}}else{header('location:patient_entry.php?already=exist');} }

?>