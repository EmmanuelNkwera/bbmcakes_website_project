<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if(isset($_POST['submit']))
  {
  	$bid=$_GET['bookid'];
  	
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $edate=$_POST['edate'];
 $est=$_POST['est'];
  $eetime=$_POST['eetime'];
 $vaddress=$_POST['vaddress'];
 $eventtype=$_POST['eventtype'];
 $addinfo=$_POST['addinfo'];
 $bookingid=mt_rand(100000000, 999999999);
$sql="insert into tblbooking(BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
$query->bindParam(':bid',$bid,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':est',$est,PDO::PARAM_STR);
$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Bbmcakes</title>
<link rel="shortcut icon" href="images/favicon.jpg" type="image/jpg">
<link href="css2/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css2/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js1/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<link href="css2/main.css" rel="stylesheet">
	

<!---//End-css-style-switecher----->
<script type="text/javascript" src="js1/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css2/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body style="background-image: url(images/background.jpg); height: auto; width: auto;>

<div class="contact content>
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php"><legend style="color:rgb(0, 0, 0);">&nbsp;<b>Home</b></a></li>
		  <li class="active">Booking Services</li>	  
		 </ol>
		 
		
			 <div class="contact-grids"  style="background-image: url(images/blog.jpg); height: auto; width: auto; border: 0px solid rgb(236, 236, 245);"  data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
				 <div class="col-md-6 contact-right">
					 <p><legend style="color:rgb(255, 0, 0);">&nbsp; <h2 class="header-h"> <div class="text-center"><h style="color:rgb(236, 236, 245);">&nbsp;<b> Make An Order for Your Event</b></h2></p>
					 <form method="post">
					 	
						 <ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;<b>Name:</b> </li>
							 <li><input type="text" class="wow fadeInUp form-control" name="name" placeholder="Enter Your Name" required="true"></li>
						 </ul>					 				 
						 
						 	 <ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;Mobile Number: </li>
							 <li><input type="text" class="wow fadeInUp text" name="mobnum" placeholder="Enter Your Phone_Number" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;Event Date: </li>
							 <li><input type="date" class="wow fadeInUp form-control" name="edate" required="true"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;Pick Up Time:</li>
							 <li><select type="text" class="wow fadeInUp form-control" name="est" required="true">
							 	<option value="">Select Pick Up Time</option>
							 	<option value="1 a.m">1 a.m</option>
							 	<option value="2 a.m">2 a.m</option>
							 	<option value="3 a.m">3 a.m</option>
							 	<option value="4 a.m">4 a.m</option>
							 	<option value="5 a.m">5 a.m</option>
							 	<option value="6 a.m">6 a.m</option>
							 	<option value="7 a.m">7 a.m</option>
							 	<option value="8 a.m">8 a.m"</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 a.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 	<option value="6 p.m">6 p.m</option>
							 	<option value="7 p.m">7 p.m</option>
							 	<option value="8 p.m">8 p.m</option>
							 	<option value="9 p.m">9 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="12 a.m">12 a.m</option>
							 </select></li>
						 </ul>
						
						 <ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;Location:</li>
							 <li><textarea type="text" class="wow fadeInUp form-control" name="vaddress"placeholder="Enter Your Location" required="true" ></textarea></li>
						 </ul>
						 <ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;Type of Event:</li>
							 <li><select type="text" class="wow fadeInUp form-control" name="eventtype" required="true" >
							 	<option value="">Choose Event Type</option>
							 	<?php 

$sql2 = "SELECT * from   tbleventtype ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
 <?php } ?>
							 </select></li>
						 </ul>	
						 <ul>
							 <li class="text-info"><i style="color:rgb(252, 49, 191);">&nbsp;Additional Information:</li>
							 <li><textarea type="text" class="wow fadeInUp form-control" name="addinfo" placeholder="Enter Your Details" required="true"></textarea></li>
						 </ul><br>					
						<button  input type="submit"  class="wow fadeInUp btn btn-default submit-btn" name="submit" value="Submit">Submit</button>					 
					 </form>				 
					 </form></br>
				 </div>
				 <div class="col-md-6 contact-right">
					 	<div class="contact-map">
					
						</div>
				 </div>
				 <div class="clearfix"></div>

				 
			 </div>
		 
</div>
<br>

<div class="contact content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php"><legend style="color:rgb(0, 0, 0);">&nbsp;</a></li>
		  <li class="active"></li>	  
		 </ol>
</div>


<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
	
	<!--PRELOAD-->
<div id="preloader">
	<div id="status"></div>
  </div>
  <!--end PRELOAD--> 
<!---->

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
	
	<script src="themes/js/jquery-1.7.2.min.js"></script>
	<script src="themes/bootstrap/js/bootstrap.min.js"></script>				
	<script src="themes/js/superfish.js"></script>
	

<script src="assets/js/jquery-1.11.1.min.js"></script> 
<script src="assets/js/jquery.backstretch.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/retina.min.js"></script> 
<script src="assets/js/tweetie.min.js"></script> 
<script src="assets/js/jquery.downCount.js"></script> 
<script src="assets/js/jquery.form.min.js"></script> 
<script src="assets/js/jquery.validate.min.js"></script> 
<script src="assets/js/jquery.simple-text-rotator.min.js"></script> 
<script src="assets/js/main.js"></script>
<!---->
</body>
</html>