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
    <li><a href='#'>1</a></li>  
    

 </li>
    </ul>
  </div>
</div>
  </nav>
<center><h1 style="padding-top: 50px;">Current Jobs</h1></center>

  <?php
      $db = mysqli_connect('localhost', 'root', '', 'homemart'); 

  $query=$db->query("SELECT * FROM orders");
 if($query->num_rows > 0){
  while($row=$query->fetch_assoc()){


    $yes=$row['fname'];
    $yes=SUBSTR($yes, 0, 1);
    echo '<span class="dot">'.$yes.'</span>';
   
    

    
    

    echo  $row['fname'];
    
    echo  $row['lname'];
   


    echo $row['time'];
  

    
    
   


    

 }
 }
    ?>

</body>
</html>