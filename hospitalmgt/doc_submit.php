<?php require_once './config.php';
$doc_hospital_id=trim($_POST["doc_hospital_id"]);
$doc_name=trim($_POST["doc_name"]);
$doc_mobile=trim($_POST["doc_mobile"]);
$doc_designation=trim($_POST["doc_designation"]);
$doc_specilisation=trim($_POST["doc_specilisation"]);
$doc_adhar=trim($_POST["doc_adhar"]);
$doc_full_address=trim($_POST["doc_full_address"]);
$doc_gender=trim($_POST["gender"]);
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

	
	
	$fileName = time() . '_' .basename($_FILES["doc_report"]["name"]); 
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["doc_report"]["tmp_name"]; 
             
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $imageUploadPath,35); 
             
            if($compressedImage){*/ 



if($doc_name!=""||$doc_mobile!=""||$doc_designation!=""||$doc_specilization!=""||$doc_full_address!=""||$doc_adhar!="")
{
	
	$sql="select doc_adhar from doc_details where doc_adhar='".$doc_adhar."'";
	$stmt=$DB->prepare($sql);
	$stmt->execute();
	$numr=$stmt->rowCount();

	if(!$numr>0){
	
    $sql = "INSERT into `doc_details`(`doc_name`,`doc_mobile`,`doc_full_address`,`doc_adhar`,`doc_gender`,`doc_hospital_id`,`doc_designation`,`doc_specilisation`)
	VALUES "."( :doc_name,:doc_mobile,:doc_full_address,:doc_adhar,:doc_gender,:doc_hospital_id,:doc_designation,:doc_specilisation)";
 $stmt = $DB->prepare($sql);
//$last_insert_id = $DB->lastInsertId();
      // bind the values
$stmt->bindValue(":doc_hospital_id",$doc_hospital_id);
$stmt->bindValue(":doc_name", $doc_name);
$stmt->bindValue(":doc_mobile", $doc_mobile);     	
$stmt->bindValue(":doc_designation", $doc_designation);      
$stmt->bindValue(":doc_specilisation", $doc_specilisation);      
$stmt->bindValue(":doc_full_address", $doc_full_address);	
$stmt->bindValue(":doc_adhar", $doc_adhar);  
$stmt->bindValue(":doc_gender", $doc_gender);      
	  // execute Query
      $stmt->execute();

      $result = $stmt->rowCount();
	  if ($result > 0) {	  

header('location:doctor_details.php?added=success');


			}else{ echo "no";}}else{header('location:doctor_details.php?already=exist');} }

?>