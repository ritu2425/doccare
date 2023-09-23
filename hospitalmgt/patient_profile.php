<!DOCTYPE html>
<html>

<head><?php include'./config.php'; session_start();
$hosp_id=$_SESSION['hospital_id']; 
global $p_id;
global $p_name;

?>
<?php
$sqlhosp="select hospital_id,hopital_name from hospital_data where hospital_id='".$hosp_id."'";
$stmt=$DB->prepare($sqlhosp); $stmt->execute();
$reshosp=$stmt->fetchALL();
 foreach($reshosp AS $resh){ global $hname; $hname .=$resh['hopital_name'];}?>


  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> HOSPITAL MANAGEMENT SYSYTEM BY LOCALVIEW </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	        <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
			
			

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              PATIENT MANAGEMENT 
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="hospital_home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="departments.html">Departments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.html">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <form class="form-inline">
              
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box"><h2 class="text text-warning">
				  
			PATIENT DETAILS</h2>
					
					
					
	<?php  $id=$_POST['id'];
	$sql="select * from patient_details where patient_id='".$id."'";
	$stmt=$DB->prepare($sql);
	
	$stmt->execute();	
$res1 = $stmt->fetchAll();
    //while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
foreach($res1 AS $res){

?>					
				
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputname" class="text text-secondary">Patient Name</label>
        <input type="text" class="form-control text text-white bg-transparent"  value="<?php echo $res['patient_name'];?>" readonly />
      </div>
      <div class="form-group col-md-6">
        <label for="inputConnum" class="text text-secondary">Contact Number</label>
        <input type="text" class="form-control text text-white bg-transparent" value="<?php echo $res['patient_mobile'];?>" readonly />
      </div>

    </div><div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAconnum" class="text text-secondary">Alternate Contact Number</label>
        <input  type="text" class="form-control text text-white bg-transparent" value="<?php echo $res['patient_alternate_mobile'];?>" readonly />
      </div>

    <div class="form-group col-md-6">
      <label for="inputDob" class="text text-secondary">Patient DOB</label>
      <input type="text" class="form-control text text-white bg-transparent" value="<?php echo $res['patient_dob'];?>" readonly />
    </div></div>
	 <div class="form-group">
        <label for="inputAdhar" class="text text-secondary">Adhar Number</label>
        <input type="text" class="form-control text text-white bg-transparent" value="<?php echo $res['patient_adhar'];?>" readonly />
      </div>
      <div class="form-group">
        <label for="inputCity" class="text text-secondary">Full Address</label>
        <textarea type="text" class="form-control text text-white bg-transparent" readonly /><?php echo $res['patient_full_address'];?></textarea>
      </div>

</div><?php }?>
<a class="btn btn-success shadow-sm text text-white  border-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create New Report + </a>
 <a class="btn btn-warning shadow-sm text text-white  border-rounded" href="#scrollspyHeading2">View Medicale History</a>

                  </div>   


    
                </div>                    </div>
            </div>
          </div>

              </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>
  
  

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CREATE PATIENT REPORT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
	             <div class="container ">
              <div class="row">
                  <div class="detail-box">
                    <form method="post" action="patient_submit_report.php" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
<?php foreach($res1 AS $row1){?>
<input type="hidden" name="hospital_id" value="<?php echo $hosp_id;?>" readonly />
<input type="hidden" name="patient_id" value="<?php echo $row1['patient_id'];?>" readonly /><?php }?>

<?php

$docsid=$hosp_id; 
$sqlhosp="select doc_id,doc_name,doc_hospital_id,doc_specilisation from doc_details where doc_hospital_id='".$docsid."'";
$stmt=$DB->prepare($sqlhosp); $stmt->execute();
$resdoc=$stmt->fetchALL();

?>        <label for="inputname" class="text text-info">Doctor Name</label>		  
	  <select class="form-control" name="doc_id">
	  <option hidden>SELECT DOCTOR</option>
 <?php  foreach($resdoc AS $resd){ ?>
	
	<option name="doc_id"  value="<?php echo $resd['doc_name'];?>-<?php echo $resd['doc_specilisation']; //echo $resd['doc_id'];?>"><?php echo $resd['doc_name'];?>-<?php echo $resd['doc_specilisation'];?></option>
	  <?php }?>
	  </select>

		
             </div>
      <div class="form-group col-md-6">
        <label for="inputConnum" class="text text-info">Patient Diseases</label>
        <input type="text" class="form-control"  placeholder="Diseases" name="patient_deases">
      </div>

    </div>
      <div class="form-group">
        <label for="inputConnum" class="text text-info">Patient Report PIC</label>
        <input type="file" class="form-control"  placeholder="file" name="patient_report" accept="image/*">
      </div>


    
	  <div class="form-group">
        <label for="inputCity" class="text text-info">Description</label>
        <textarea class="form-control" name="patient_full_report" placeholder="Report Description"></textarea>
      </div>

    </div>

    <button type="submit" class="btn btn-primary">SUBMIT</button>
  </form> 

                  </div>   


    
                </div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>
  
  

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <table id="example1" class="table table-striped" style="width:100%">
	<?php
foreach($res1 AS $res){ $p_id .=$res['patient_id'];
$p_name .=$res['patient_name'];
 }?>
 <h4 id="scrollspyHeading2">Report's of <?php echo $res['patient_name'];?></h4>

 <?php
	$sqlall = "SELECT * FROM  patient_reports where patient_id='".$p_id."' order by report_id desc";
   $stmt = $DB->prepare($sqlall);
    $stmt->execute();  
	?><thead>
    <tr><th>SL.NO</th> 
        <th>Date Time</th> 
    
	<th>Diseases</th>
		<th>Report</th>
		
	</tr>
  </thead>
  <tbody><?php $i=0; //while($resall=$stmt->fetch(PDO::FETCH_ASSOC))
$resalld=$stmt->fetchALL();
foreach($resalld AS $resall)
{
	
	
extract($resall);
	
	  ?>
    <tr>
      <td><?php echo ++$i;?></td>
  <td><?php 
  $currentDateTime =$resall['report_date_time'];
$newDateTime = date('d-m-y h:i A', strtotime($currentDateTime));

  
  echo $newDateTime;?></td>

      <td><?php echo $resall['patient_deases'];?></td>

	
		<td><div class="btn-group">
    <a style="cursor:pointer;" class="text text-info" data-toggle="modal" data-target="#exampleModal<?php echo $resall['report_id'];?>"><strong>View Report</strong></a>

    </div>
			
			
	
		 </td>
	  </tr>
 
 

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $resall['report_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <small class="modal-title" id="exampleModalLabel">Medicale Report of <?php echo $p_name;?> created on <?php echo $newDateTime;?>
		</small>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>      <div class="modal-body">
        <p>Hospital Nme &nbsp;:&nbsp;<?php echo $hname;?></p>
		<p>Doctor Name&nbsp;:&nbsp;<?php echo $resall['doctor_id'];?></p></p>
		<p>Patient Deases:<?php echo $resall['patient_deases'];?></p>
		<p>Doctor Report:<?php echo $resall['patient_full_report'];?></p>
		<p>Report Pic:<img src="./upload_rep/<?php echo $resall['patient_report'];?>" height="30%" width="30%" download>
		
		
	 <a href="./upload_rep/<?php echo $resall['patient_report'];?>" download>Download Report</a>

		
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
    </div>
  </div>
</div>
 
 
 
 
 
 
 
 
 
<?php }?>     </tbody></table>   
</div>






  <!-- department section -->

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">

        </div>
      </div>
      <div class="footer-info">
        

      </div>
    </div>
  </footer>
  
  
  
  
  
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <!-- End Google Map -->
  
  	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script> <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

	  <script>$(document).ready(function() {
   $('#example1').dataTable( {
"aaSorting": [],
	 } ); 
		 } ); 
	</script>


</body>

</html>
