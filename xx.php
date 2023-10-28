<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$vendors_ids=array();
//session_destroy();

//Check if add_to_service has been submitted
if(filter_input(INPUT_POST, 'add_to_service')){
if(isset($_SESSION['homemart'])){


$count=count($_SESSION['homemart']); 

$vendors_ids=array_column($_SESSION['homemart'], $id);

if(!in_array(filter_input(INPUT_POST, 'id'), $vendors_ids)){
$_SESSION['homemart'][$count]=array(

$service_name=filter_input(INPUT_POST, 'Occupation'),
$location=filter_input(INPUT_POST, 'business_location'),
$id=filter_input(INPUT_POST, 'id'),
$vendor_name=filter_input(INPUT_POST, 'business_name')





);
}
else{
for($i=0; $i <count($vendors_ids); $i++){
   if($vendors_ids[$i]==filter_input(INPUT_POST, 'id')){

   }
}

}
//pre_r($vendors_ids);
}
else{
//if the homemart does not exists create first product with array key 0
//create array using submitted form data, start from key 0 and fill it with values
$_SESSION['homemart'][0]=array(

$service_name=filter_input(INPUT_POST, 'Occupation'),
$location=filter_input(INPUT_POST, 'business_location'),
$id=filter_input(INPUT_POST, 'id'),
$vendor_name=filter_input(INPUT_POST, 'business_name')





);

}





}
function pre_r($array){
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}








?>











<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminHomemart</title>
      <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="homemart.css">
    <link rel="stylesheet" href="cart.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
   <nav class="navbar  navbar-default navbar-fixed-top" style="position: fixed;">
   <div class="container-fluid">
    <div class="navbar-header">
    	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="#">HOMEMART</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
    
    </ul>

    <ul class="nav navbar-nav navbar-right">
      
    <li><a href="#"><form class="navbar-form navbar-right"><input type="text" name="" class="form-control " placeholder="search"></form></a></li>






    <li><a href="#"><span class="glyphicon glyphicon-user" style="font-size: 20px;">ADMIN</span></a> </li>


    </ul>
  </div>
</div>
  </nav> 
  <div class="row" style="padding: 60px; padding-top: 70px;">
  <div class="col-sm-3"><span class="glyphicon glyphicon-th">DASHBOARD</span></div>
  <div class="col-sm-6"></div>
  <div class="col-sm-3"></div>
</div>
<hr>
<center>Vendors requests</center>



<?php
include 'config.php';
$query=$db->query("SELECT * FROM  `vendor_requirement` INNER JOIN `vendor` WHERE vendor_requirement.`vendor_name`=vendor.`username`");

if($query->num_rows >0 ){
	while ($row=$query->fetch_assoc()) {
		$name=$row['vendor_name'];
        $dname=$row['vendor_name']."d";
		$id_card=$row['national_identity_card'];
		$license=$row['county_government_vendor'];
		$insurance=$row['insurance'];
		$work_phone=$row['work_phone'];
		$Business_name=$row['business_name'];
		$Business_location=$row['business_location'];
		$Occupation=$row['occupation'];
        $id=$row['id_v'];
   



		?>
        <form id="myform" method="post" action="xx.php" >
            <input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="container">
  <div class="row">
     
    <div class="col-sm-2">
    	<h6>National_identity_card</h6>
    	<div class="thumbnail">
    	
    	 <img src="<?php echo "$id_card";?>" alt="no image"/>
    	</div>
    </div>
    <div class="col-sm-2">
    	<h6>License</h6>
    	<div class="thumbnail">
    	
    	<img src="<?php echo "$license";?>" alt="no image"/>
    </div>
    </div>
    <div class="col-sm-2">
    	<h6>Insurance</h6>
    	<div class="thumbnail">
    	
    	<img src="<?php echo "$insurance";?>" alt="no image"/>
    
    </div>
    </div>

  

    
    <div class="col-sm-2">
        
    	<h6>Phone number</h6>
    	<?php echo $work_phone;?>
        <input type="hidden" name="phone" value="<?php echo $work_phone ?>">
        
    </div>
    <div class="col-sm-1">
    	<h6>Business_name</h6>
    	<?php echo $Business_name; ?>
         <input type="hidden" name="business_name" value="<?php  echo $Business_name ?>">
    </div>
    <div class="col-sm-1">
    	<h6>Location</h6>
    	<?php echo $Business_location; ?>
        <input type="hidden" name="business_location" value="<?php echo $Business_location?>">
    </div>
    <div class="col-sm-1">
    	<h6>Occupation</h6>
    	<?php echo $Occupation; ?>
        <input type="hidden" name="Occupation" value="<?php echo "$Occupation"?>">
    </div>
    <div class="col-sm-1">
    	<input type="submit" id="ii"  name="add_to_service" class="btn btn-info" value="Add Vendor"  />
    
    	
    </div>
    </div>

  </div>

</div>
</form>

   
     
      


		
		
		

<?php  } }?>
    </body>
</html>





<form action="xx.php" method="post">

<div class="row">
    <center><h3>Vendors To Be Added</h3></center>
   
  <div class="col-sm-4 col-md-3">
     <p style="color: blue;">Occupation</p>
    <?php
     if(!empty($_SESSION['homemart'])){
foreach ($_SESSION['homemart'] as $key){
   
    echo  $key['0'], '<br>';
    ?>
    <input type="hidden" name="service" value="<?php echo  $key['0'];   ?>">
    <?php
}}
     ?>
  
</div>
 
  <div class="col-sm-4 col-md-3">
      <p style="color: blue;">Location</p>
         <?php
         if(!empty($_SESSION['homemart'])){
foreach ($_SESSION['homemart'] as $key){
  
    echo  $key['1'], '<br>';
    ?>
    <input type="hidden" name="location" value="<?php echo  $key['1']; ?>">
    <?php
}}
     ?> 
  </div>

  <div class="col-sm-4 col-md-3">
     <p style="color: blue;">Business name</p>
         <?php
         if(!empty($_SESSION['homemart'])){
foreach ($_SESSION['homemart'] as $key){
    
    echo  $key['3'], '<br>';
    ?>
    <input type="hidden" name="name" value="<?php echo  $key['3']; ?>">
    <?php
}}
     ?>  
  </div>
<div class="col-sm-4 col-md-3">
    <p style="color: blue;">Remove</p>
             <?php
             if(!empty($_SESSION['homemart'])){
foreach ($_SESSION['homemart'] as $key){

 ?>
 <a href="xx.php?action=delete&id=<?php echo $key['2'];?>">
    <div class="btn-danger">Remove</div>
  </a>
 <?php   
}}
     ?>

</div>
</div>
<button class="btn btn-success" name='add_vendors' style="width: 100%;"> ADD VENDORS</button>
</form>

<?php
$service_name=filter_input(INPUT_POST, 'service');
$location=filter_input(INPUT_POST, 'location');
$vendor_name=filter_input(INPUT_POST, 'name');
if(!empty($service_name AND $location AND $vendor_name )){
  if(isset($_POST['add_vendors'])){
  $sqlo="INSERT INTO `services`(service_name, location, vendor_name)VALUES('$service_name', '$location', '$vendor_name')";
  mysqli_query($db, $sqlo);

  ?>
  <script>
    alert(
  "<?php echo  $service_name;
 echo $location;
 echo $vendor_name; echo  "have been added successfully" ?>" 


  );
  </script>
  <?php
  session_destroy();  
  }
  
}else{
  

}?>




  