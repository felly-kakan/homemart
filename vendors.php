<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['msg']="You must log in first";
	header('location:index.php');
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="homemart.css">
    
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <title>Vendor Home</title>
     <style >
      .logo {
    color: #00ff00;
    font-size: 100px;
}
    </style>
</head>
<body>
  <br><br>
   <div class="heaader">
   	
   </div>
   <div class="content">
   	<!-- notification message-->
   	<?php if(isset($_SESSION['success'])) : ?>
   		<div class="error success">
   		<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      	</div>	
      	<?php endif ?>
      	 <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<center><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	

<form enctype="multipart/form-data" action="vendors.php" method="POST">
  <div class="container">
    <h1>HOMEMART REQUIREMENTS</h1>
  <p>To increase trust and ensure compliance <strong><?php echo $_SESSION['username'] ?></strong> you are required to upload a few basic pieces of information. </p>
  <div class="row">
  <div class="col-sm-4 col-md-3"><input type="file"  name="ID">

 <p> <span class="glyphicon glyphicon-user logo"></span><br><b> ID Verification</b><br>Your national identity card which include your profile picture help verify your identity and personalize your business.</p>

  </div>
  <div class="col-sm-4 col-md-3"> <input type="file"  name="license">

<p> <span class="glyphicon glyphicon-certificate logo"></span><br><b> COUNTY GOVERNMENT VENDOR LICENSE</b><br>Depending on your occupation and place where you are doing business you may be required to provide your place license information.</p>
  </div>
  <div class="col-sm-4 col-md-3"><input type="file"  name="insurance">

<p> <span class="glyphicon glyphicon-check logo"></span><br><b> General Liability License</b><br>Homemart Vendors are required to have a general liability insurance.You need may to provide proof of coverage.</p>
  </div>
  <div class="col-sm-4 col-md-3"><button type="submit" class="btn btn-primary" value="upload">upload</button></div>
</div>
</div>
  
 
  
  
</form>

</div>





      </center>

      
    <nav class="navbar  navbar-default navbar-fixed-top" style="position: fixed;">
   <div class="container-fluid">
    <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="index.php">HOMEMART</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  

    <ul class="nav navbar-nav navbar-right">
      
     <li><a href="">NEED HELP?CALL +254704565633</a></li>
     <li> <a href="index.php?logout='1'" style="color: red;"><span class="glyphicon glyphicon-off"></span>logout</a> </li>
     
    </ul>
  </div>
</div>
  </nav> 




    
    <?php endif ?>
</div>
   </div>



</body>
</html>
<?php
if(!empty($_FILES['ID'] and $_FILES['license'] and $_FILES['insurance'])){
$path="upload/ID/";
$path=$path.basename($_FILES['ID']['name']);

$path1="upload/license/";
$path1=$path1.basename($_FILES['license']['name']);

$path2="upload/insurance/";
$path2=$path2.basename($_FILES['insurance']['name']);

if(move_uploaded_file($_FILES['ID']['tmp_name'], $path)){

  if(move_uploaded_file($_FILES['license']['tmp_name'], $path1)){

    if(move_uploaded_file($_FILES['insurance']['tmp_name'], $path2)){
      include('config.php');
     

      $insert=$db->query("INSERT INTO `vendor_requirement`(vendor_name, national_identity_card, county_government_vendor, insurance, uploaded_on)VALUES('{$_SESSION['username']}', '$path', '$path1', '$path2', 'CURTIME()')");


      
      ?>
      <script >
        alert('<?php echo "The file".basename($_FILES['ID']['name'])." ".basename($_FILES['license']['name'])." ".basename($_FILES['insurance']['name'])." "."has been uploaded. Please wait for approval to check your status";?>');
        window.location.href='vendor.php';
      </script>
<?php

    }}}else{
      ?>
      <script>
        alert('<?php echo "There was an error uploading the file please try again later";?>');
      </script><?php
      
    }

}



?>
<footer  style="background-color: #3d3c3a;">
  <div class="row">
  <div class="col-sm-4">
    HOMEMART
    <br><br>
    <ul style="list-style-type: none;">
      <li><a href="index.html#">Home</a></li>
      <li><a href="index.html#OurServices">Services</a></li>
      <li><a href="index.html#contact">Contact Us</a></li>
    </ul>


  </div>
  <div class="col-sm-8">
    HOMEMART
    <br><br>
    <ul style="list-style-type: none;">
      <li><a href="#">BECOME A VENDOR</a></li>
    </ul>


  </div>
</div>

 
  
  </a><br><br>
  <p></p> 
</footer> 


  
  
<footer  style="background-color: black;">
  <center>
  <a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  </center>

<div class="row">
  <div class="col-sm-4"><font color='#ccc'>Privacy Policy</font><br>
    Poweredby HOMEMART
  </div>
  <div class="col-sm-4">
    <br>
    Questions?Call Us at <font color='yellow'>+254704565633</font>or Email us at <font color='yellow'>support@homemart.com</font>
  </div>
  <div class="col-sm-4">
    <font color='#ccc'>Terms of Service</font><br>
    ©HOMEMART | ALL Rights Reserved


  </div>
</div>






</footer>


