
<?php 
include 'server.php';
error_reporting(E_ALL & ~E_NOTICE);
if(!isset($_SESSION['username'])){
 $_SESSION['msg']="You must log in first";
 header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="homemart.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style>
      .dot {
  height: 35px;
  width: 35px;
  background-color: #ccc;
  border-radius: 50%;
  display: inline-block;
}


    </style>
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
     <a class="navbar-brand" href="index.php">HOMEMART</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  

    <ul class="nav navbar-nav navbar-right">
    <li> <a href="index.php?logout='1'" style="color: red;"><span class="glyphicon glyphicon-off"></span>logout</a> </li>  
    

 </li>
    </ul>
  </div>
</div>
  </nav>
      <?php
    $db = mysqli_connect('localhost', 'root', '', 'homemart'); 
      $n=$_SESSION['username']; 
      ?>
      <center>
             <div class="alert alert-success" style="padding-top: 70px;">
  <strong>Success!</strong> Welcome <?php echo $_SESSION['username']; ?>
</div>
      </center>
      <center><h2>Current orders are : </h2></center>
      <?php
       $query=$db->query("SELECT * FROM `services` INNER JOIN  `orders` WHERE services.`vendor_name`=orders.`vendor` AND orders.`vendor`='$n'");
 if($query->num_rows > 0){
  while($row=$query->fetch_assoc()){
    $x=$row['fname'];
      ?>
      
      <form method="post" action="tel:<?php echo $row['phone']; ?>">
      <?php     
 
       echo "<div class='container'>";
    echo "<details>";
    echo "<summary>";
    echo "<div class='row'>";
    
    echo "<div class='col-sm-2'>";
    $yes=$row['fname'];
    $yes=SUBSTR($yes, 0, 1);
    echo '<span class="dot">'.$yes.'</span>';
 
    echo "</div>";
    echo "<div class='col-sm-4'>";
    echo  $row['fname'];
    echo " ";
    echo  $row['lname'];
    echo "";
    ?>
    <input type="hidden" name="po" value="<?php echo $row['fname'] ?>">
    <?php
    echo "</div>";

  echo "<div class='col-sm-6'>";
  echo  $row['occupation'];
  echo "</div>";
  echo "</div>";
    echo "</summary>";
    echo "<div class='row'>";
    echo "<div class='col-sm-4 col-md-3'>";
      echo $row['occupation']; 

    echo "</div>";
     echo "<div class='col-sm-4 col-md-3'>"; 
         echo "<span class='glyphicon glyphicon-map-marker'></span>";
          echo $row['location'];

    echo "</div>";
     echo "<div class='col-sm-4 col-md-3'>";
            echo "<span class='glyphicon glyphicon-time'></span>";
           echo  $row['time'];

    echo "</div>";
     echo "<div class='col-sm-4 col-md-3'>";
     echo "<span class='glyphicon glyphicon-calendar'></span>";
            echo $row['due_date'];

    echo "</div>";
    echo "</div>";

 echo "<div class='row'>";
   echo "<div class='col-sm-6'>";

echo "<button class='btn btn-danger' id=".$row['id']." type='button' name='delete'>PASS</button>";
    echo "</div>";
    echo "<div class='col-sm-6'>";
?>
<button class='btn btn-success' type='submit'><?php echo " CONTACT".": ".$row['phone']; ?></button>
<?php
    echo "</div>";
  echo "</div>";
  
    
    
    echo "</details>";
    
    echo "</div>";

 }
 }
 else{
  ?>
  <center>
     <div class="alert alert-info" style="padding-top: 70px;">
  <strong>Sorry!</strong> There are no customers orders at the moment.
</div> 
  </center>

<?php

 }
    




    ?> 
 
 
</form>

<script>
 $(document).ready(function(){
$("#h").click(function(){
  var del_id=$(this).attr('id');
  $.ajax({
    type:'POST',
    url:'delete.php',
    data:'del_id='+del_id,
    success:function(data){

      location.reload();
    }
  });
});








 });





</script>

   
</body>
</html>