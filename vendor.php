<?php include('server.php')?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="homemart.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <title>BECOME A VENDOR</title>
    <style >
      .logo {
    color: #6e6e6e;
    font-size: 100px;
}
    </style>
    </head>
    <body>

<div class="container-fluid">
  
 <br><br><br>
  <div class="row">
    <div class="col-sm-6">
      <h1>Join HOMEMART today and we will send our customers to you</h1>

     <p> <span class="glyphicon glyphicon-ok-circle"></span>Laverage our trust to grow your business</p>
      <p> <span class="glyphicon glyphicon-phone"></span>Choose your customer and set your own schedule-just you normally do</p>







    </div>
    <div class="col-sm-6">
 <p><b>SIGN UP NOW</b></p>
<form class="form-horizontal" action="vendor.php" method="POST">
  <?php include('errors.php'); ?>
  <p>Business owner/Principal name</p>
  <div class="form-group">
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="BusName" placeholder=" Business Owner Name" value="<?php echo $BusName; ?>">
    </div>
</div>
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="password_1" name="password_1" placeholder="Enter password" value="<?php echo $password_1; ?>">
    </div>
</div>
  <div class="form-group">
    <div class="col-sm-10"> 
      <input type="Password"  class="form-control" name="password_2" placeholder="Confirm password" value="<?php echo $password_2; ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="work_phone" placeholder="Work phone" value="<?php echo $work_phone; ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="Bus" placeholder="Business Name" value="<?php echo $Bus; ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="BusinessZipcode" placeholder="Business Location" value="<?php echo $BusinessZipcode; ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="uname" placeholder="Enter Username" value="<?php echo $uname; ?>">
    </div>
</div>
<div class="form-group">

  <div class="col-sm-10">
    <p>Select an occupation</p>
    <select name="taskOption" style="width: 100%;">
      <option value="Interior design">Interior design</option>
      <option value="Carpentry">Carpentry</option>
      <option value="Plumbing">Plumbing</option>
      <option value="Painting">Painting</option>
      <option value="Landscaping">Landscaping</option>
      <option value="Handiwork">Handiwork</option>
      <option value="Contracting">Contracting</option>
      <option value="Electrical">Electrical</option>
    </select>
  </div>
  </div>
  

 
  <div class="form-group"> 
    <div class="input-group col-sm-10">
      <button type="submit" class="btn btn-primary" style="width: 100%;" name="reg_vendor">Get Started Now</button>
    </div>
  </div>

<div class="form-group"> 
    <div class="col-sm-10">
      <p>Already Applied<font color="orange"><a href="#"> Check your status</a></font> </p>
    </div>
  </div>

</form>













    </div>
  </div>
</div>









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
      
     <li><a href="">NEED HELP?CALL +254704565633</a>

 </li>
     <li>
        <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">SIGN IN</button>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SIGN IN</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="vendor.php">
          <?php include('errors.php');?>
        <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter your Username" name="uname" required><br><br>
          <label for="psw"><b>Password</b></label>
          <input type="Password" placeholder="Enter your Password" name="psw" required><br><br>
           
           <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="loginbtn" name="login_user">Login</button>
           </div>
           <p>Forgot<a href="#" style="color: dodgerblue">Password</a></p>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

     </li>
    </ul>
  </div>
</div>
  </nav>


<div class="container text-center">
  <h1>HOMEMART REQUIREMENTS</h1>
  <p>To increase trust and ensure compliance vendors are required to provide a few basic pieces of information. </p>
<div class="row">
  <div class="col-sm-4">
   <p> <span class="glyphicon glyphicon-user logo"></span><br><b> ID Verification</b><br>Your national identity card which include your profile picture help verify your identity and personalize your business.</p>

  </div>
  <div class="col-sm-4">

<p> <span class="glyphicon glyphicon-certificate logo"></span><br><b> COUNTY GOVERNMENT VENDOR LICENSE</b><br>Depending on your occupation and place where you are doing business you may be required to provide your place license information.</p></div>
 <div class="col-sm-4">
<p> <span class="glyphicon glyphicon-check logo"></span><br><b> General Liability License</b><br>Homemart Vendors are required to have a general liability insurance.You need may to provide proof of coverage.</p>



  </div>
</div>
</div>






<div id="OurServices" class="container" style="padding-top: 70px;
      padding-bottom: 70px;"> 
      <h3><center>Services you can offer at HOMEMART</center></h3>
        
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <img src="interior.jpg" alt="Interior designer" style= "border-color: blue" border='3'>
      <div class="content">
   Interior designer
  </div>
    </div>
    <div class="col-sm-4 col-md-3">
      <img src="carpentry.jpg" alt="carpenter" style= "border-color: blue" border='3'>
      <div class="content">
  Carpenter
    
  </div>
    </div>
    <div class="col-sm-4 col-md-3"> 
      <img src="plumbing.jpg" alt="PLUMBER" style= "border-color: blue" border='3'>
      <div class="content">
  PLUMBER
  </div>
    </div>
     <div class="col-sm-4 col-md-3">
      <img src="painting.jpg" alt="Painter" style= "border-color: blue" border='3'>
        <div class="content">
    PAINTER
  </div>

    </div>

  </div>

  <div class="row">
   
  <div class="col-sm-4 col-md-3"> 
      <img src="Landscaping.jpg" alt="Landscaper" style= "border-color: blue" border='3'>
        <div class="content">
          LANDSCAPING
  

  </div>
    </div>
    <div class="col-sm-4 col-md-3"> 
      <img src="handiwork.jpg" alt="Handiworker" style= "border-color: blue" border='3'>
        <div class="content">
  HANDIWORKER

  </div>
    </div>
    <div class="col-sm-4 col-md-3"> 
      <img src="contracting.jpg" alt="Contracter" style= "border-color: blue" border='3'>
        <div class="content">
 CONTRACTING
  </div>
    </div>

    <div class="col-sm-4 col-md-3"> 
      <img src="electrical.jpg" alt="Electrician" style= "border-color: blue" border='3'>
        <div class="content">
   ELECTRICAL
  </div>
    </div>
  </div>
</div>
</div>


















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

   </body>
  </html>
