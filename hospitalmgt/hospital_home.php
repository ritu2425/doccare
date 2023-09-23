<!DOCTYPE html>
<html>

<head>
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
        <?php session_start(); include './config.php';
$hid=$_SESSION['hospital_id'];
$sqlh="select * from hospital_data where hospital_id='".$hid."'";
$stmt=$DB->prepare($sqlh);
$stmt->execute();
$rest=$stmt->fetchALL();
foreach($rest AS $restt){ echo 'Welcome&nbsp;<strong class="text text-warning">' .$restt['hopital_name'].'</strong>';
}?>
		
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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
                  <div class="detail-box">
<style>a{text-decoration:none;
</style>
<div class="card-deck"> <a href="./patient_entry.php" class="card-text shadow-sm" >
  <div class="card">

    <div class="card-body">
      <h5 class="card-title">Patient Management</h5>
      <a href="./patient_entry.php" class="card-text shadow-sm"><img src="data:image/png;base64,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"/></a>
      
    </div>
  </div></a><a href="./doctor_details.php" class="card-text shadow-sm">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Doctor Management</h5>
      <a href="./doctor_details.php" class="card-text shadow-sm"><img src="data:image/png;base64,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"/></a>
      
    </div>
  </div></a><a href="./report.php" class="card-text shadow-sm">
  <div class="card">

  </div></a>
</div>

                  </div>   


    
                </div>                    </div>
            </div>
          </div>

              </div>

      </div>

    </section>
    <!-- end slider section -->
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
