<!DOCTYPE html>
<html>

<head><?php session_start();$sid=$_SESSION['hospital_id'];?>
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
               DOCTORS MANAGEMENT 
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
                            <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
			 
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
                  <div class="detail-box"><h2 class="text text-warning">ADD NEW DOCTOR</h2>
                    <form method="post" action="doc_submit.php" enctype="multipart/form-data">
    <div class="form-row"><input type="hidden" name="doc_hospital_id" value="<?php echo $sid;?>">
      <div class="form-group col-md-6">
	    
        <label for="inputname" class="text text-white">DOCTOR NAME</label>
        <input type="text" class="form-control" placeholder="Doctor Full Name" name="doc_name" onkeypress="return /[a-zA-Z]/i.test(event.key)">
      </div>
      <div class="form-group col-md-6">
        <label for="inputConnum" class="text text-white">Contact Number</label>
        <input type="text" class="form-control"  placeholder="Contact Number" name="doc_mobile" onkeypress='validate(event)' min="10" maxlength="10">
      </div>

    </div>
	<div class="form-row">    <div class="form-group col-md-6">
      <label for="inputDob" class="text text-white">Doctor Designation</label>
      <input type="text" class="form-control"  placeholder="Doctor Designation" name="doc_designation">
    </div>

	 <div class="form-group col-md-6">
        <label for="inputAdhar" class="text text-white">Specelization</label>
        <input type="text" class="form-control" name="doc_specilisation" placeholder="Doctor Specelization">
      </div>
	  </div>
	  
	  <div class="form-row">
	<div class="form-group col-md-6">
        <label for="inputAdhar" class="text text-white">GENDER</label>
       <div class="dropdown">
  <select class="dropdown-toggle form-control"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" name="doc_gender">
    Gender
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	<option hidden>SELECT GENDER</a></option>
    <option name="doc_gender" value="MALE"><a class="dropdown-item" >MALE</a></option>
    <option name="doc_gender" value="FEMALE"><a class="dropdown-item" >FEMALE</a></option>
    <option name="doc_gender" value="OTHERS"><a class="dropdown-item" >OTHERS</a></option>
  </ul></select>
</div>
      </div>
	 <div class="form-group col-md-6">
        <label for="inputAdhar" class="text text-white">Adhar Number</label>
        <input type="text" class="form-control" name="doc_adhar" placeholder="Doctor Adhar Number" onkeypress='validate(event)' min="12" maxlength="12">
      </div></div>
      <div class="form-group">
        <label for="inputCity" class="text text-white">Full Address</label>
        <textarea class="form-control" name="doc_full_address" placeholder="Doctor Full Address"></textarea>
      </div>

	  </div></div>
      
    </div>

    <button type="submit" class="btn btn-primary">SUBMIT</button>
  </form> or <a class="btn btn-warning shadow-sm text text-danger  border-rounded" href="#scrollspyHeading2">Manage Doctor's</a>

                  </div>   


    
                </div>                    </div>
            </div>
          </div>

              </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="scrollspyHeading2">LIST OF DOCTORS</h4>
  <table id="example1" class="table table-striped" style="width:100%" cellspacing="0">
	<?php include'./config.php'; $sqlall = "SELECT * FROM  doc_details where doc_hospital_id='".$sid."' order by doc_id desc";
   $stmt = $DB->prepare($sqlall);
    $stmt->execute();  
	?><thead>
    <tr> 							
							
							<td><input type="text" id="search-date" placeholder="search date"></td>
<th></th>
       <th></th>
    <th></th>
	<th></th>
	
		<th></th>
	</tr>
  </thead>
  <tbody><?php $i=0;while($resall=$stmt->fetch(PDO::FETCH_ASSOC))
{
extract($resall);
	
	  ?>
    <tr>
      <td><?php echo ++$i;?></td>
            <td><?php echo $resall['doc_name'];?></td><td><?php echo $resall['doc_designation'];?></td>
      <td><?php echo $resall['doc_specilisation'];?></td>
	
		<td><div class="btn-group">
  <button type="button" class="btn btn-SUCCESS dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Choose
  </button>
  <ul class="dropdown-menu">
    <li><form method="post" action="patient_profile.php"><input type="hidden" name="id" value="<?php echo $resall['patient_id'];?>" readonly/><button class="dropdown-item text text-info" type="submit"><strong></strong></a></form></li>

    <li><a class="dropdown-item text text-danger" href="#"><strong>DELETE</strong></a></li>
     </ul>
</div>
			
			
	
		 </td>
	  </tr>
 
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

<script>function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}


</script>

</body>

</html>
