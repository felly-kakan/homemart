<?php 
include 'server.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="homemart.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style>
   .phone {
    color: #f4511e;
    font-size: 50px;
}
.email {
    color: black;
    font-size: 50px;
}
    </style>
    <title>HOMEMART SERVICES</title>
</head>
<body>
    
<form method="POST" action="server.php">
<div class="row" style="padding-top: 50px;">

  <div class="col-sm-2">
 <?php
 

//Interior design
 if(!empty($_SESSION['man'])){
  echo "Interior design Services";
 if(isset($_COOKIE['s1'])){
  echo " /  Interior design services";
 }else{}
 
 }
 //Interior design

 //Carpentry
 elseif (!empty($_SESSION['pac'])) {
   echo "Carpentry";
   if(isset($_COOKIE['s2'])){
     echo " / Accessible Ramb Installation";
   }else{
   }
 }
 
  elseif (!empty($_SESSION['or'])) {
   echo "Carpentry";
   if(isset($_COOKIE['t'])){
     echo " / Born / shed repair";
   }else{
   }

 }

 elseif (!empty($_SESSION['pen'])) {
   echo "Carpentry";
          if(isset($_COOKIE['rt'])){
     echo " / Carpentry frame repair";
   }else{
   }
 }
 elseif (!empty($_SESSION['ben'])) {
   echo "Carpentry";
          if(isset($_COOKIE['rz'])){
     echo " / Stairway Build";
   }else{
   }
}
elseif (!empty($_SESSION['benja'])) {
   echo "Carpentry";
          if(isset($_COOKIE['tc'])){
     echo " / Fence Repair";
   }else{
   }
}

elseif (!empty($_SESSION['pets'])) {
   echo "Carpentry";
          if(isset($_COOKIE['mj'])){
     echo " / Pet Door Installation";
   }else{
   }
}
elseif (!empty($_SESSION['triml'])) {
   echo "Carpentry";
          if(isset($_COOKIE['ko'])){
     echo " / Interior trim repair";
   }else{
   }
}
elseif (!empty($_SESSION['inl'])) {
   echo "Carpentry";
          if(isset($_COOKIE['fl'])){
     echo " / Interior trim Installation";
   }else{
   }
}
elseif (!empty($_SESSION['aloc'])) {
   echo "Carpentry";
          if(isset($_COOKIE['lf'])){
     echo " / Exterior awning installation";
   }else{
   }
}
 //Carpentry 


//plumbing
 elseif (!empty($_SESSION['trs'])) {
   echo "Plumbing";
   if(isset($_COOKIE['s3'])){
     echo " / Water softener and purification";
   }else{
   }

 }

elseif (!empty($_SESSION['lp'])) {
   echo "Plumbing";
          if(isset($_COOKIE['mb'])){
     echo " / Installation";
   }else{
   }

}
elseif (!empty($_SESSION['toi'])) {   echo "Plumbing";
          if(isset($_COOKIE['hu'])){
     echo " /Toilet Installation ";
   }else{
   }

}
elseif (!empty($_SESSION['hto'])) {
   echo "Plumbing";
          if(isset($_COOKIE['uio'])){
     echo " /Hotwater dispenser Installation ";
   }else{
   }

}
elseif (!empty($_SESSION['thl'])) {
   echo "Plumbing";
          if(isset($_COOKIE['dfg'])){
     echo " / Bathtub Installation ";
   }else{
   }

}
//plumbing

//painting
elseif (!empty($_SESSION['garage'])) {
   echo "Painting";
          if(isset($_COOKIE['si'])){
     echo " / Garage floor painting ";
   }else{
   }

}

elseif (!empty($_SESSION['paint'])) {
   echo "Painting";
          if(isset($_COOKIE['s6'])){
     echo " / Interior painting ";
   }else{
   }

}

elseif (!empty($_SESSION['fence'])) {
   echo "Painting";
          if(isset($_COOKIE['s7'])){
     echo " / Fence painting ";
   }else{
   }

}
 elseif (!empty($_SESSION['int'])) {
   echo "Painting";
    if(isset($_COOKIE['s4'])){
     echo " / Exterior painting";
   }else{
   }
   
 }
//painting

//landscaping
 elseif (!empty($_SESSION['scap'])) {
   echo "Landscaping";
    if(isset($_COOKIE['s5'])){
     echo " / Tree prunning and Trimming";
   }else{
   }
 }

elseif (!empty($_SESSION['hedge'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s9'])){
     echo " / Hedge trimming and removal";
   }else{
   }

}

elseif (!empty($_SESSION['soft'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s10'])){
     echo " / softscape";
   }else{
   }

}

elseif (!empty($_SESSION['tree'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s11'])){
     echo " / Tree stump removal";
   }else{
   }

}

elseif (!empty($_SESSION['lavel'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s12'])){
     echo " / Landscape lavelling";
   }else{
   }

}

elseif (!empty($_SESSION['land'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s13'])){
     echo " / Landscape design";
   }else{
   }

}
elseif (!empty($_SESSION['plant'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s14'])){
     echo " / Tree planting";
   }else{
   }

}
elseif (!empty($_SESSION['garden'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s15'])){
     echo " / Garden installation";
   }else{
   }
}

elseif (!empty($_SESSION['lawn'])) {
   echo "Landscaping";
          if(isset($_COOKIE['s17'])){
     echo " / Lawn aeration";
   }else{
   }
}

//landscaping

//handiwork
elseif (!empty($_SESSION['bath'])) {
   echo "Handiwork";
          if(isset($_COOKIE['k1'])){
     echo " / Re-caulk bathtub/shower";
   }else{
   }
}

elseif (!empty($_SESSION['gas'])) {
   echo "Handiwork";
          if(isset($_COOKIE['k2'])){
     echo " / Gas Range Repair";
   }else{
   }
}

elseif (!empty($_SESSION['mirror'])) {
   echo "Handiwork";
          if(isset($_COOKIE['k3'])){
     echo " / Hang a mirror";
   }else{
   }
}
elseif (!empty($_SESSION['rpar'])) {
   echo "Handiwork";
       if(isset($_COOKIE['s6'])){
     echo " / Car part Assembly";
   }else{
   }
 }
//handiwork

//contracting
elseif (!empty($_SESSION['net'])) {
   echo "Contracting";
         if(isset($_COOKIE['s7'])){
     echo " / Stairway Build";
   }
 }
 elseif (!empty($_SESSION['shower'])) {
   echo "Contracting";
          if(isset($_COOKIE['s11'])){
     echo " / Shower Replacement";
   }else{
   }
}
elseif (!empty($_SESSION['showez'])) {
   echo "Contracting";
          if(isset($_COOKIE['s13'])){
     echo " / Shower Installation";
   }else{
   }
}
elseif (!empty($_SESSION['Garage'])) {
   echo "Contracting";
          if(isset($_COOKIE['s9'])){
     echo " / Garage Remodel";
   }else{
   }
}
elseif (!empty($_SESSION['room'])) {
   echo "Contracting";
          if(isset($_COOKIE['s10'])){
     echo " / Bathtub Remodel";
   }else{
   }
}
elseif (!empty($_SESSION['gaz'])) {
   echo "Contracting";
          if(isset($_COOKIE['s11'])){
     echo " / Gas fireplace Installation";
   }else{
   }
}
elseif (!empty($_SESSION['concrete'])) {
   echo "Contracting";
          if(isset($_COOKIE['s12'])){
     echo " / Pour concrete";
   }else{
   }
}
elseif (!empty($_SESSION['shed'])) {
   echo "Contracting";
          if(isset($_COOKIE['s13'])){
     echo " / Shed Repair";
   }else{
   }
}


elseif (!empty($_SESSION['Stair'])) {
   echo "Contracting";
          if(isset($_COOKIE['s7'])){
     echo " / Stairway Build";
   }else{
   }
}
elseif (!empty($_SESSION['window'])) {
   echo "Contracting";
          if(isset($_COOKIE['s15'])){
     echo " / Window Security Bar Installation";
   }else{
   }
}

elseif (!empty($_SESSION['kitchen'])) {
   echo "Contracting";
          if(isset($_COOKIE['s16'])){
     echo " / Kitchen Remodel";
   }else{
   }
}



elseif (!empty($_SESSION['driveway'])) {
   echo "Contracting";
          if(isset($_COOKIE['s17'])){
     echo " / Driveway Repair";
   }else{
   }
}
elseif (!empty($_SESSION['drive'])) {
   echo "Contracting";
          if(isset($_COOKIE['s18'])){
     echo " / Driveway installation";
   }else{
   }
}

elseif (!empty($_SESSION['subfloor'])) {
   echo "Contracting";
          if(isset($_COOKIE['s20'])){
     echo " / subfloor laveling";
   }else{
   }
}


//contracting

//electrical
elseif (!empty($_SESSION['ele'])) {
   echo "Electrical";
          if(isset($_COOKIE['s8'])){
     echo " / Light switch Installation";
   }else{
   }
}

elseif (!empty($_SESSION['fix'])) {
   echo "Electrical";
          if(isset($_COOKIE['s30'])){
     echo " / Light Fixture Repair";
   }else{
   }
}

elseif (!empty($_SESSION['fan'])) {
   echo "Electrical";
          if(isset($_COOKIE['s31'])){
     echo " / Bathroom fan repair";
   }else{
   }
}
elseif (!empty($_SESSION['wall'])) {
   echo "Electrical";
          if(isset($_COOKIE['s32'])){
     echo " / Electric wall installation";
   }else{
   }
}

elseif (!empty($_SESSION['outlet'])) {
   echo "Electrical";
          if(isset($_COOKIE['s33'])){
     echo " / Outlet installation";
   }else{
   }
}
elseif (!empty($_SESSION['panel'])) {
   echo "Electrical";
          if(isset($_COOKIE['s35'])){
     echo " / Electrical panel Upgrade";
   }else{
   }
}

elseif (!empty($_SESSION['panelz'])) {
   echo "Electrical";
          if(isset($_COOKIE['s36'])){
     echo " / Electrical  panel Installation";
   }else{
   }
}

elseif (!empty($_SESSION['spa'])) {
   echo "Electrical";
          if(isset($_COOKIE['s37'])){
     echo " / spa wire repair";
   }else{
   }
}
elseif (!empty($_SESSION['conver'])) {
   echo "Electrical";
          if(isset($_COOKIE['s38'])){
     echo " / LED interior light conversion";
   }else{
   }
}
elseif (!empty($_SESSION['fixt'])) {
   echo "Electrical";
          if(isset($_COOKIE['s39'])){
     echo " / Light Fixture installation";
   }else{
   }
}
elseif (!empty($_SESSION['frige'])) {
   echo "Electrical";
          if(isset($_COOKIE['s40'])){
     echo " / Refrigerator repair";
   }else{
   }
}
elseif (!empty($_SESSION['hood'])) {
   echo "Electrical";
          if(isset($_COOKIE['s41'])){
     echo " / Range hood repair";
   }else{
   }
}

elseif (!empty($_SESSION['holiday'])) {
   echo "Electrical";
          if(isset($_COOKIE['s42'])){
     echo " / Holiday Light Installation";
   }else{
   }
}

elseif (!empty($_SESSION['phan'])) {
   echo "Electrical";
          if(isset($_COOKIE['s43'])){
     echo " / Exhaust fan repair";
   }else{
   }
}
elseif (!empty($_SESSION['flo'])) {
   echo "Electrical";
          if(isset($_COOKIE['s45'])){
     echo " / Outlet Repair";
   }else{
   }
}
//electrical
 ?>
    
  </div>
<div class="col-sm-2">
 <?php
 if(!empty($_SESSION['man'])){

  echo $_SESSION['man'] ;
 }elseif (!empty($_SESSION['pac'])) {
   echo $_SESSION['pac'];
 }
 elseif (!empty($_SESSION['trs'])) {
   echo $_SESSION['trs'];
 }
 elseif (!empty($_SESSION['int'])) {
   echo $_SESSION['int'];
 }elseif (!empty($_SESSION['scap'])) {
   echo $_SESSION['scap'];
 }elseif (!empty($_SESSION['rpar'])) {
   echo $_SESSION['rpar'];
 }elseif (!empty($_SESSION['net'])) {
   echo $_SESSION['net'];
 }elseif (!empty($_SESSION['ele'])) {
   echo $_SESSION['ele'];
 }
 elseif (!empty($_SESSION['or'])) {
   echo $_SESSION['or'];
 }
 elseif (!empty($_SESSION['pen'])) {
   echo $_SESSION['pen'];
 }
 elseif (!empty($_SESSION['ben'])) {
   echo $_SESSION['ben'];
 }
elseif (!empty($_SESSION['benja'])) {
   echo $_SESSION['benja'];
 }

 elseif (!empty($_SESSION['pets'])) {
   echo $_SESSION['pets'];
 }
 elseif (!empty($_SESSION['triml'])) {
   echo $_SESSION['triml'];
 }
 elseif (!empty($_SESSION['inl'])) {
   echo $_SESSION['inl'];
 }
elseif (!empty($_SESSION['aloc'])) {
   echo $_SESSION['aloc'];
 }
 elseif (!empty($_SESSION['lp'])) {
   echo $_SESSION['lp'];
 }
 elseif (!empty($_SESSION['toi'])) {
   echo $_SESSION['toi'];
 }
 elseif (!empty($_SESSION['hto'])) {
   echo $_SESSION['hto'];
 }
 elseif (!empty($_SESSION['thl'])) {
   echo $_SESSION['thl'];
 }elseif (!empty($_SESSION['garage'])) {
   echo $_SESSION['garage'];
 }
 elseif (!empty($_SESSION['paint'])) {
   echo $_SESSION['paint'];
 }

 elseif (!empty($_SESSION['fence'])) {
   echo $_SESSION['fence'];
 }

  elseif (!empty($_SESSION['hedge'])) {
   echo $_SESSION['hedge'];
 }
 elseif (!empty($_SESSION['soft'])) {
   echo $_SESSION['soft'];
 }

 elseif (!empty($_SESSION['lavel'])) {
   echo $_SESSION['lavel'];
 }

 elseif (!empty($_SESSION['land'])) {
   echo $_SESSION['land'];
 }
 elseif (!empty($_SESSION['plant'])) {
   echo $_SESSION['plant'];
 }
 elseif (!empty($_SESSION['garden'])) {
   echo $_SESSION['garden'];
 }
  elseif (!empty($_SESSION['lawn'])) {
   echo $_SESSION['lawn'];
 }
 elseif (!empty($_SESSION['bath'])) {
   echo $_SESSION['bath'];
 }
elseif (!empty($_SESSION['gas'])) {
   echo $_SESSION['gas'];
 }
elseif (!empty($_SESSION['mirror'])) {
   echo $_SESSION['mirror'];
 }
 elseif (!empty($_SESSION['Stair'])) {
   echo $_SESSION['Stair'];
 }
elseif (!empty($_SESSION['shower'])) {
   echo $_SESSION['shower'];
 }
elseif (!empty($_SESSION['showez'])) {
   echo $_SESSION['showez'];
 }
 elseif (!empty($_SESSION['Garage'])) {
   echo $_SESSION['Garage'];
 }
 elseif (!empty($_SESSION['room'])) {
   echo $_SESSION['room'];
 }

 elseif (!empty($_SESSION['gaz'])) {
   echo $_SESSION['gaz'];
 }
 elseif (!empty($_SESSION['concrete'])) {
   echo $_SESSION['concrete'];
 }

  elseif (!empty($_SESSION['shed'])) {
   echo $_SESSION['shed'];
 }
  elseif (!empty($_SESSION['awning'])) {
   echo $_SESSION['awning'];
 }
   elseif (!empty($_SESSION['window'])) {
   echo $_SESSION['window'];
 }
elseif (!empty($_SESSION['kitchen'])) {
   echo $_SESSION['kitchen'];
 }
elseif (!empty($_SESSION['driveway'])) {
   echo $_SESSION['driveway'];
 }
elseif (!empty($_SESSION['drive'])) {
   echo $_SESSION['drive'];
 }
 elseif (!empty($_SESSION['subfloor'])) {
   echo $_SESSION['subfloor'];
 }
 elseif (!empty($_SESSION['fix'])) {
   echo $_SESSION['fix'];
 }
elseif (!empty($_SESSION['fan'])) {
   echo $_SESSION['fan'];
 }
 
elseif (!empty($_SESSION['wall'])) {
   echo $_SESSION['wall'];
 }
 elseif (!empty($_SESSION['outlet'])) {
   echo $_SESSION['outlet'];
 }
elseif (!empty($_SESSION['panel'])) {
   echo $_SESSION['panel'];
 }
 elseif (!empty($_SESSION['panelz'])) {
   echo $_SESSION['panelz'];
 }
elseif (!empty($_SESSION['spa'])) {
   echo $_SESSION['spa'];
 }
elseif (!empty($_SESSION['conver'])) {
   echo $_SESSION['conver'];
 }
elseif (!empty($_SESSION['fixt'])) {
   echo $_SESSION['fixt'];
 }
 elseif (!empty($_SESSION['frige'])) {
   echo $_SESSION['frige'];
 }
  elseif (!empty($_SESSION['hood'])) {
   echo $_SESSION['hood'];
 }
 elseif (!empty($_SESSION['holiday'])) {
   echo $_SESSION['holiday'];
 }
 elseif (!empty($_SESSION['phan'])) {
   echo $_SESSION['phan'];
 }
elseif (!empty($_SESSION['flo'])) {
   echo $_SESSION['flo'];
 }


 ?>
  </div>

  <div class="col-sm-2">
<p style="color: red;">Start Over</p>
  </div>
  <div class="col-sm-6">

  </div>
</div>
<ul class="nav nav-tabs" style="padding: 50px;">
  <li class="active"><a data-toggle="tab" href="#home">ADD SERVICE DETAILS</a></li>
  <li><a data-toggle="tab" href="#menu1">FIND VENDORS</a></li>
  <li><a data-toggle="tab" href="#menu2">SUBMIT REQUESTS</a></li>

</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row" style="padding-left: 50px;">
   
  <center><p><b>When do you want the service to begin?</b></p></center>
   <center> <select name="due_date" style="width: 100%; padding-left: 600px;" class="form-control">
      <option value="Within a few days">Within a few days</option>
      <option value="Next Week">Next Week</option>
      <option value="Next month">Next month</option>
    </select></center>






    </div>
    <br><br>
    <center><p> Do you have anything to share?(optional)</p></center>
     <textarea class="form-control" rows="5" placeholder="Include service details" style="padding-left: 50px;" name="optional"></textarea>
    <br>
    <ul class="nav nav-tabs">
      <li style="color: purple;"><a data-toggle="tab" href="#menu1" class="btn btn-primary">Show my Vendors</a></li>
   </ul>
  </div>
  <div id="menu1" class="tab-pane fade">
    <center><p>Available vendors based on the service you selected.<b> Please select one vendor</b></p></center>
    <div class="row" style="padding-left: 50px;">
     
<?php 

if(!empty($_SESSION['man'])){
 $intLoc =$_SESSION['man'];
  $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $interior="SELECT * FROM `services` WHERE service_name='Interior design' AND location='$intLoc' ";
  $ss=mysqli_query($db, $interior);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
 
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }



}elseif(!empty($_SESSION['pac'])){

 
  $cap =$_SESSION['pac'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}
// Born shed repair
elseif(!empty($_SESSION['or'])){

 
  $cap =$_SESSION['or'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}
//Carpentry frame Repair
elseif(!empty($_SESSION['pen'])){

 
  $cap =$_SESSION['pen'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}
//code for Stairway Build

elseif(!empty($_SESSION['ben'])){

 
  $cap =$_SESSION['ben'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}

//code for Fence repair
elseif(!empty($_SESSION['benja'])){

 
  $cap =$_SESSION['benja'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}

//code for pet door installation
elseif(!empty($_SESSION['pets'])){

 
  $cap =$_SESSION['pets'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}
//code for Interior trim repair
elseif(!empty($_SESSION['triml'])){

 
  $cap =$_SESSION['triml'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}

// code for interior trim installation
elseif(!empty($_SESSION['inl'])){

 
  $cap =$_SESSION['inl'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}
//code for Exterior awning installation
elseif(!empty($_SESSION['aloc'])){

 
  $cap =$_SESSION['aloc'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
  $ss=mysqli_query($db, $carpentry);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 
 }

}

//Plumbing
elseif (!empty($_SESSION['trs'])) {
 $waters =$_SESSION['trs'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$waters'";
  $ss=mysqli_query($db, $plumbing);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
   if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }

}
//code for installation
elseif (!empty($_SESSION['lp'])) {
 $mit =$_SESSION['lp'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$mit'";
  $ss=mysqli_query($db, $plumbing);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
   if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }

}
//code for Toilet Installation
elseif (!empty($_SESSION['toi'])) {
 $toi =$_SESSION['toi'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$toi'";
  $ss=mysqli_query($db, $plumbing);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
   if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }

}
// code  Hotwater dispenser Installation
elseif (!empty($_SESSION['hto'])) {
 $toi =$_SESSION['hto'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$toi'";
  $ss=mysqli_query($db, $plumbing);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
   if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }

}
//code for Bathtub Installation
elseif (!empty($_SESSION['thl'])) {
 $toi =$_SESSION['thl'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$toi'";
  $ss=mysqli_query($db, $plumbing);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
   if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }

}
//code for painting
elseif (!empty($_SESSION['garage'])) {
 $ell =$_SESSION['garage'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Painting' AND location='$ell'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//code for exterior painting
elseif (!empty($_SESSION['paint'])) {
 $ec =$_SESSION['paint'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Painting' AND location='$ec'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

elseif (!empty($_SESSION['fence'])) {
 $ek=$_SESSION['fence'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Painting' AND location='$ek'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//landscaping

elseif (!empty($_SESSION['hedge'])) {
 $ez=$_SESSION['hedge'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$ez'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//softcare
elseif (!empty($_SESSION['soft'])) {
 $ekk=$_SESSION['soft'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$ekk'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//tree

elseif (!empty($_SESSION['tree'])) {
 $ekl=$_SESSION['tree'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$ekl'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//laveling
elseif (!empty($_SESSION['lavel'])) {
 $epl=$_SESSION['lavel'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$epl'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//design

elseif (!empty($_SESSION['land'])) {
 $epx=$_SESSION['land'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$epx'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//tree planting
elseif (!empty($_SESSION['plant'])) {
 $epp=$_SESSION['plant'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$epp'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//garden installation
elseif (!empty($_SESSION['garden'])) {
 $epa=$_SESSION['garden'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$epa'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//lawn installation
elseif (!empty($_SESSION['lawn'])) {
 $kas=$_SESSION['lawn'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Landscaping' AND location='$kas' ";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//hands on Handiwork-bath
elseif (!empty($_SESSION['bath'])) {
 $j1=$_SESSION['bath'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Handiwork' AND location='$j1' ";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//gas range repair code
elseif (!empty($_SESSION['gas'])) {
 $j2=$_SESSION['gas'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Handiwork' AND location='$j2'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//mirror code
elseif (!empty($_SESSION['mirror'])) {
 $j3=$_SESSION['mirror'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Handiwork' AND location='$j3' ";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//contracting codes
//shower
elseif (!empty($_SESSION['shower'])) {
 $j6=$_SESSION['shower'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j6' ";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//shower installation
elseif (!empty($_SESSION['showez'])) {
 $j7=$_SESSION['showez'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j7'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//garage code
elseif (!empty($_SESSION['Garage'])) {
 $j6=$_SESSION['Garage'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j6'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//bathroom

elseif (!empty($_SESSION['room'])) {
 $j9=$_SESSION['room'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j9'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//gas code
elseif (!empty($_SESSION['gaz'])) {
 $j10=$_SESSION['gaz'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j10'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//concrete code
elseif (!empty($_SESSION['concrete'])) {
 $j11=$_SESSION['concrete'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j11'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//shed repair
elseif (!empty($_SESSION['shed'])) {
 $j12=$_SESSION['shed'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j12'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//awning code

elseif (!empty($_SESSION['awning'])) {
 $j13=$_SESSION['awning'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j13'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//windows security code
elseif (!empty($_SESSION['window'])) {
 $j14=$_SESSION['window'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j14'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//kitchen remodel
elseif (!empty($_SESSION['kitchen'])) {
 $j15=$_SESSION['kitchen'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j15'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//driveway code

elseif (!empty($_SESSION['driveway'])) {
 $j14=$_SESSION['driveway'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j14'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//
elseif (!empty($_SESSION['drive'])) {
 $j15=$_SESSION['drive'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j15'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//
elseif (!empty($_SESSION['subfloor'])) {
 $j16=$_SESSION['subfloor'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$j16'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}


//
elseif (!empty($_SESSION['int'])) {
$ExtPaint =$_SESSION['int'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $painting="SELECT * FROM `services` WHERE service_name='Painting' AND location='$ExtPaint'";
  $ss=mysqli_query($db, $painting);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
   if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }
 
}elseif (!empty($_SESSION['scap'])) {
 $landscape =$_SESSION['scap'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$landscape'";
  $ss=mysqli_query($db, $pescape);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }

}elseif (!empty($_SESSION['rpar'])) {
$carpart =$_SESSION['rpar'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $tartr="SELECT * FROM `services` WHERE service_name='Handiwork' AND location='$carpart'";
  $ss=mysqli_query($db, $tartr);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }
 
}elseif (!empty($_SESSION['Stair'])) {
$stairz =$_SESSION['Stair'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $riats="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$stairz'";
  $ss=mysqli_query($db, $riats);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 }
  
}elseif (!empty($_SESSION['ele'])) {
 $ell =$_SESSION['ele'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$ell'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//Electrical fix
elseif (!empty($_SESSION['fix'])) {
 $elf =$_SESSION['fix'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elf'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//Bathroom fan repair
elseif (!empty($_SESSION['fan'])) {
 $elt =$_SESSION['fan'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elt'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//Electrical wall instalation

elseif (!empty($_SESSION['wall'])) {
 $elm =$_SESSION['wall'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elm'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//outlet instalation code

elseif (!empty($_SESSION['outlet'])) {
 $elx =$_SESSION['outlet'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elx'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//panel code

elseif (!empty($_SESSION['panel'])) {
 $ela =$_SESSION['panel'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$ela'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//panel installation
elseif (!empty($_SESSION['panelz'])) {
 $elq =$_SESSION['panelz'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elq'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//spa code
elseif (!empty($_SESSION['spa'])) {
 $elr =$_SESSION['spa'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elr'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//led interior
elseif (!empty($_SESSION['conver'])) {
 $elx =$_SESSION['conver'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elx'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//
elseif (!empty($_SESSION['fixt'])) {
 $elw =$_SESSION['fixt'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$elw'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//fridge code
elseif (!empty($_SESSION['frige'])) {
 $eka =$_SESSION['frige'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$eka'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
//hood code
elseif (!empty($_SESSION['hood'])) {
 $ekb =$_SESSION['hood'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$ekb'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

elseif (!empty($_SESSION['holiday'])) {
 $ekc =$_SESSION['holiday'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$ekc'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//fan code
elseif (!empty($_SESSION['fans'])) {
 $ekd =$_SESSION['fans'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$ekd'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}

//
elseif (!empty($_SESSION['flo'])) {
 $eke =$_SESSION['flo'];
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
  $trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$eke'";
  $ss=mysqli_query($db, $trft);
 while ($row=$ss->fetch_assoc()){
  echo "<button type='button' class=' btn btn-default'>".$row['vendor_name']."</button>";
  ?>
  <input type="hidden" name="vendor" value="<?php echo $row['vendor_name']; ?>">
  <?php
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 15)){
    session_unset();
    session_destroy();
  }
$_SESSION['LAST_ACTIVITY']= time();
 } 

}
?>
  <br><br>
     <ul class="nav nav-tabs">
      <li style="color: purple;"><a data-toggle="tab" href="#menu2" class="btn btn-primary">Continue</a></li>
    </ul>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
   <div class="alert alert-success" style="padding-left: 50px;">
  <strong>You 're almost done!</strong><br>
  Your privacy is our top priority. This information is required so as vendors can contact you.
</div>
 <center><p>Your Contact Information</p></center>
 <div class="container-fluid">
 <div class="row">
  <div class="col-sm-6">
    <input class="form-control" type="text" name="femail" placeholder="Email" required>
     </div>
    <div class="col-sm-6">
    <input class="form-control" type="password" name="password" placeholder="Password" required>
  </div>
 
  
</div>
<br>
<div class="row">
  <div class="col-sm-6" >
      <input  class="form-control" type="text" name="fname" placeholder="First Name" required>
  </div>
 
  <div class="col-sm-6">
    <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
  </div>
  <br>
 </div>
 <br>
 <div class="row">
  <div class="col-sm-6">
   <input class="form-control" type="text" name="fphone" placeholder="Phone" required>  
  </div>
  <br>
  
 </div>
 <br>
</div>
<div class="row">
  <div class="col-sm-12">
  <center><p><b>How do you prefer to be contacted?</b></p></center>
   <center> <select name="contact" style="width: 100%; padding-left: 600px;" class="form-control">
      <option value="Phone">Phone</option>
      <option value="Email">Email</option>
    </select></center>
  </div>
 
  </div>
  <center><p style="padding-top: 20px;"><b>By Clicking  "Submit My Request"  below. I confirm acceptance of HOMEMART Terms Of Service.</b></p></center>
  <br>
  <button type="submit" class="btn btn-success" name="order">Submit My Request</button>
  </div>
  <br>
</div>
  </div>
</div>
</form>
















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
    <ul class="nav navbar-nav">
     
    </ul>

    <ul class="nav navbar-nav navbar-right">
      
     
 

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
           <?php include('server.php');?>
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

<footer  style="background-color: #3d3c3a;">
	<div class="row">
  <div class="col-sm-4">
  	HOMEMART
  	<br><br>
  	<ul style="list-style-type: none;">
  		<li><a href="#">Home</a></li>
  		<li><a href="#OurServices">Services</a></li>
  		<li><a href="#Contact">Contact Us</a></li>
  	</ul>


  </div>
  <div class="col-sm-8">
  	HOMEMART
  	<br><br>
  	<ul style="list-style-type: none;">
  		<li><a href="VENDOR.php#">BECOME A VENDOR</a></li>
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












