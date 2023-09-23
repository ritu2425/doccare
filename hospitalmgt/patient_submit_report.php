<?php require_once './config.php';
$hospital_id=trim($_POST["hospital_id"]);
//$doctor_id=trim($_POST["doc_id"]);  
$doctor_id=trim($_POST["doc_id"]);  
$patient_id=trim($_POST["patient_id"]);
$patient_deases=trim($_POST["patient_deases"]);
$patient_full_report=trim($_POST["patient_full_report"]);
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
        case 'image/jpeg': 
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
			
			
			$filename = "";
$error = FALSE;
 if (is_uploaded_file($_FILES["patient_report"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["patient_report"]["name"];
    $filepath = './upload_rep/' . $filename;
    if (!move_uploaded_file($_FILES["patient_report"]["tmp_name"], $filepath)) {
      $error = TRUE;
 }}


    $sql = "INSERT into `patient_reports`(`hospital_id`,`doctor_id`,`patient_id`,`patient_deases`,`patient_report`,`patient_full_report`)
	VALUES "."( :hospital_id,:doctor_id,:patient_id,:patient_deases,:patient_report,:patient_full_report)";
 $stmt = $DB->prepare($sql);
//$last_insert_id = $DB->lastInsertId();
      // bind the values
 $stmt->bindValue(":hospital_id", $hospital_id);
$stmt->bindValue(":doctor_id", $doctor_id);     	
$stmt->bindValue(":patient_id", $patient_id);      
$stmt->bindValue(":patient_deases", $patient_deases);      
$stmt->bindValue(":patient_report", $filename);	
$stmt->bindValue(":patient_full_report", $patient_full_report);  

	  // execute Query
      $stmt->execute();

      $result = $stmt->rowCount();
	  if ($result > 0) {	  

header('location:patient_entry.php?added=success');


		}else{ echo "no";} 
			
?>