<?php
session_start();
// initializing variables
$password_1=$password_2="";
$username = "";
$email    = "";
$BusName ="";
$Bus="";
$BusinessZipcode="";
$uname="";
$work_phone="";
$cookie_name="";
	$cookie_value="";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'homemart');
if (isset($_POST['reg_vendor'])){
$BusName=mysqli_real_escape_string($db, $_POST['BusName']);
$email=mysqli_real_escape_string($db, $_POST['email']);
 $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

 $work_phone=mysqli_real_escape_string($db, $_POST['work_phone']); 
$Bus=mysqli_real_escape_string($db, $_POST['Bus']);
$BusinessZipcode=mysqli_real_escape_string($db, $_POST['BusinessZipcode']);
$uname=mysqli_real_escape_string($db, $_POST['uname']);
$taskOption=mysqli_real_escape_string($db, $_POST['taskOption']);
if(empty($BusName)){array_push($errors, "Business name is required");}
if(empty($email)){array_push($errors, "Email is required");}
 if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
if(empty($work_phone)){array_push($errors, "work phone is required");}
if(empty($Bus)){array_push($errors, "Business name is required");}
if(empty($BusinessZipcode)){array_push($errors, "Business location is required");}
if(empty($uname)){array_push($errors, "username is required");}
if(empty($taskOption)){array_push($errors, "Occupation is required");}
$user_check_query="SELECT*FROM `vendor` WHERE email='$email' OR work_phone='$work_phone' OR business_name='$Bus' OR username='$uname'";
$result=mysqli_query($db, $user_check_query);
$user=mysqli_fetch_assoc($result);

if($user){
if($user['uname']===$uname){
	array_push($errors, "username already exists");
}
if($user['email']===$email){
	array_push($errors, "Email already exists");
}
if($user['Bus']===$Bus){
	array_push($errors, "Business name exists");
}
if($user['work_phone']===$work_phone){
	array_push($errors, "Work phone already exists");
}
}
if(count($errors)==0){
	$password=md5($password_1);
	$query="INSERT INTO `vendor`(business_owner_name, email, password,  work_phone, business_name, business_location, username, occupation)VALUES('$BusName', '$email', '$password', '$work_phone', '$Bus', '$BusinessZipcode', '$uname', '$taskOption')";
	$x=mysqli_query($db, $query);
	if($x){
	$_SESSION['Bus']==$Bus;
	$_SESSION['success']="You are now logged in";
	header("location:vendors.php");}
}
}

//............

//LOGIN VENDOR
if(isset($_POST['login_user'])){
	$username=mysqli_real_escape_string($db, $_POST['uname']);
	$password=mysqli_real_escape_string($db, $_POST['psw']);
	$_SESSION['username']=$username;

if(empty($username)){
array_push($errors, "Username is required");
}
if(empty($password)){
array_push($errors, "password is required");
}
//$query=$db->query("SELECT * FROM  `vendor_requirement` INNER JOIN `vendor` WHERE vendor_requirement.`vendor_name`=vendor.`username`");
if(count($errors)==0){
	
	$password=md5($password);
	$query="SELECT*FROM `vendor` WHERE username='$username' AND password='$password'";
	$results=mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
		$query2="SELECT * FROM `services` WHERE `vendor_name`='$username'";
		$results2=mysqli_query($db, $query2);
		if(mysqli_num_rows($results2)==1){
            header('location:vendors_job.php');
		}else{
          
		
		$_SESSION[]="You are now logged in";
		header('location:vendors.php');
		}
		
	}else{
		array_push($errors, "Wrong username/password combination");
	}
}
}




/*
service name
location
id
vendor business name
*/

//Interior design code
if(isset($_POST['rior'])){
	$intLoc=mysqli_real_escape_string($db, $_POST['interiorlocation']);
	$_SESSION['man']=$intLoc;
	$cookie_name="s1";
	$cookie_value="Interior Design Services";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$interior="SELECT * FROM `services` WHERE service_name='Interior design' AND location='$intLoc'";
	$ss=mysqli_query($db, $interior);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';
       </script>
		<?php
		
	}
	

}


//Carpentry code

if(isset($_POST['access'])){
	$cap=mysqli_real_escape_string($db, $_POST['accessiblelocation']);
	$_SESSION['pac']=$cap;
	$cookie_name="s2";
	$cookie_value="Accessible Ramb installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$carpentry="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$cap'";
	$ss=mysqli_query($db, $carpentry);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//Code for Born/shed repair

if(isset($_POST['Born'])){
	$gh=mysqli_real_escape_string($db, $_POST['Bornlocation']);
	$_SESSION['or']=$gh;
	$cookie_name="t";
	$cookie_value="Born/shed repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$born="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$gh'";
	$ss=mysqli_query($db, $born);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for carpentry frame repair
if(isset($_POST['pen'])){
	$g=mysqli_real_escape_string($db, $_POST['framelocation']);
	$_SESSION['pen']=$g;
	$cookie_name="rt";
	$cookie_value="Carpentry Frame repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$g'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for stairway build repair
if(isset($_POST['ben'])){
	$gc=mysqli_real_escape_string($db, $_POST['accessiblelocation']);
	$_SESSION['ben']=$gc;
	$cookie_name="rz";
	$cookie_value="Stairway Build";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$gc'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for fence repair
if(isset($_POST['benja'])){
	$ndanu=mysqli_real_escape_string($db, $_POST['fencelocation']);
	$_SESSION['benja']=$ndanu;
	$cookie_name="tc";
	$cookie_value="Fence Repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$ndanu'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for pet door installation
if(isset($_POST['pets'])){
	$petz=mysqli_real_escape_string($db, $_POST['Petlocation']);
	$_SESSION['pets']=$petz;
	$cookie_name="mj";
	$cookie_value="Pet Door Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$petz'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//code for interior trim repair
if(isset($_POST['triml'])){
	$lmirt=mysqli_real_escape_string($db, $_POST['trimlocation']);
	$_SESSION['triml']=$lmirt;
	$cookie_name="ko";
	$cookie_value="Interior trim repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$lmirt'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

// code for interior trim installation
if(isset($_POST['inl'])){
	$vv=mysqli_real_escape_string($db, $_POST['installationlocation']);
	$_SESSION['inl']=$vv;
	$cookie_name="fl";
	$cookie_value="Interior trim installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$vv'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for Exterior awning installation
if(isset($_POST['aloc'])){
	$vp=mysqli_real_escape_string($db, $_POST['awninglocation']);
	$_SESSION['aloc']=$vp;
	$cookie_name="lf";
	$cookie_value="Exterior awning installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$bor="SELECT * FROM `services` WHERE service_name='Carpentry' AND location='$vp'";
	$ss=mysqli_query($db, $bor);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//Plumbing code

if(isset($_POST['plumbingwat'])){
	$waters=mysqli_real_escape_string($db, $_POST['Softenerlocation']);
	$_SESSION['trs']=$waters;
	$cookie_name="s3";
	$cookie_value="Water Softener and purification";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$waters'";
	$ss=mysqli_query($db, $plumbing);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//code for installation
if(isset($_POST['mit'])){
	$mit=mysqli_real_escape_string($db, $_POST['instlocation']);
	$_SESSION['lp']=$mit;
	$cookie_name="mb";
	$cookie_value="Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$mit'";
	$ss=mysqli_query($db, $plumbing);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for Toilet Installation
if(isset($_POST['toi'])){
	$toi=mysqli_real_escape_string($db, $_POST['Toiletlocation']);
	$_SESSION['toi']=$toi;
	$cookie_name="hu";
	$cookie_value="Toilet Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$toi'";
	$ss=mysqli_query($db, $plumbing);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
// code  Hotwater dispenser Installation
if(isset($_POST['hto'])){
	$hto=mysqli_real_escape_string($db, $_POST['Hotwaterlocation']);
	$_SESSION['hto']=$hto;
	$cookie_name="uio";
	$cookie_value="Hotwater dispenser Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$hto'";
	$ss=mysqli_query($db, $plumbing);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//code for Bathtub Installation
if(isset($_POST['thl'])){
	$thl=mysqli_real_escape_string($db, $_POST['Bathtublocation']);
	$_SESSION['thl']=$thl;
	$cookie_name="dfg";
	$cookie_value="Hotwater dispenser Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$plumbing="SELECT * FROM `services` WHERE service_name='Plumbing' AND location='$thl'";
	$ss=mysqli_query($db, $plumbing);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//Painting code

if(isset($_POST['Epaint'])){
	$ExtPaint=mysqli_real_escape_string($db, $_POST['Exteriorlocation']);
	$_SESSION['int']=$ExtPaint;
	$cookie_name="s4";
	$cookie_value="Exterior painting";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$painting="SELECT * FROM `services` WHERE service_name='Painting' AND location='$ExtPaint'";
	$ss=mysqli_query($db, $painting);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}	
}

//code for garage floor painting
if(isset($_POST['garage'])){
	$ExtPaint=mysqli_real_escape_string($db, $_POST['garagelocation']);
	$_SESSION['garage']=$ExtPaint;
	$cookie_name="si";
	$cookie_value="Garage floor painting";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$painting="SELECT * FROM `services` WHERE service_name='Painting' AND location='$ExtPaint'";
	$ss=mysqli_query($db, $painting);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}	
}


if(isset($_POST['paint'])){
	$paints=mysqli_real_escape_string($db, $_POST['Interlocation']);
	
	$_SESSION['paint']=$paints;
	$cookie_name="s6";
	$cookie_value="Interior painting";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$painting="SELECT * FROM `services` WHERE service_name='Painting' AND location='$paints'";
	$ss=mysqli_query($db, $painting);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}	
}

if(isset($_POST['fence'])){
	$fences=mysqli_real_escape_string($db, $_POST['Fenclocation']);
	
	$_SESSION['fence']=$fences;
	$cookie_name="s7";
	$cookie_value="Fence painting";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$painting="SELECT * FROM `services` WHERE service_name='Painting' AND location='$fences'";
	$ss=mysqli_query($db, $painting);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}	
}




//LandScaping

if(isset($_POST['landscaping'])){
	$landscape=mysqli_real_escape_string($db, $_POST['tatlocation']);
	$_SESSION['scap']=$landscape;
	$cookie_name="s5";
	$cookie_value="Tree prunning and Trimming";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$landscape'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//hedge
if(isset($_POST['hedge'])){
	$hedges=mysqli_real_escape_string($db, $_POST['htarlocation']);
	$_SESSION['hedge']=$hedges;
	$cookie_name="s9";
	$cookie_value="Hedge trimming and removal";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$hedges'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//softscape
if(isset($_POST['soft'])){
	$softs=mysqli_real_escape_string($db, $_POST['slocation']);
	$_SESSION['soft']=$softs;
	$cookie_name="s10";
	$cookie_value="softscape";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$softs'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//tree
if(isset($_POST['tree'])){
	$trees=mysqli_real_escape_string($db, $_POST['tsrlocation']);
	$_SESSION['tree']=$trees;
	$cookie_name="s11";
	$cookie_value="Tree stump removal";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$trees'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//lavelling
if(isset($_POST['lavel'])){
	$lavels=mysqli_real_escape_string($db, $_POST['lllocation']);
	$_SESSION['lavel']=$lavels;
	$cookie_name="s12";
	$cookie_value="Landscape lavelling";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$lavels'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//landscape desigh

if(isset($_POST['land'])){
	$lands=mysqli_real_escape_string($db, $_POST['ldlocation']);
	$_SESSION['land']=$lands;
	$cookie_name="s13";
	$cookie_value="Landscape design";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$lands'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//tree planting
if(isset($_POST['plant'])){
	$plants=mysqli_real_escape_string($db, $_POST['tplocation']);
	$_SESSION['plant']=$plants;
	$cookie_name="s14";
	$cookie_value="Tree planting";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$plants'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//garden
if(isset($_POST['garden'])){
	$gardens=mysqli_real_escape_string($db, $_POST['gilocation']);
	$_SESSION['garden']=$gardens;
	$cookie_name="s15";
	$cookie_value="Garden installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$gardens'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//lawn aetation
if(isset($_POST['lawn'])){
	$lawns=mysqli_real_escape_string($db, $_POST['lelocation']);
	$_SESSION['lawn']=$lawns;
	$cookie_name="s17";
	$cookie_value="Lawn aeration";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$pescape="SELECT * FROM `services` WHERE service_name='landscaping' AND location='$lawns'";
	$ss=mysqli_query($db, $pescape);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}

//HANDIWORK
if(isset($_POST['capa'])){
	$carpart=mysqli_real_escape_string($db, $_POST['cpalocation']);
	$_SESSION['rpar']=$carpart;
	$cookie_name="s6";
	$cookie_value="Car part Assembly";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$tartr="SELECT * FROM `services` WHERE service_name='HANDIWORK' AND location='$carpart'";
	$ss=mysqli_query($db, $tartr);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//Bathtub/shower
if(isset($_POST['bath'])){
	$baths=mysqli_real_escape_string($db, $_POST['rcbslocation']);
	$_SESSION['bath']=$baths;
	$cookie_name="k1";
	$cookie_value="Re-caulk bathtub/shower";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$tartr="SELECT * FROM `services` WHERE service_name='HANDIWORK' AND location='$baths'";
	$ss=mysqli_query($db, $tartr);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//gas code
if(isset($_POST['gas'])){
	$gases=mysqli_real_escape_string($db, $_POST['grrlocation']);
	$_SESSION['gas']=$gases;
	$cookie_name="k2";
	$cookie_value="Gas Range Repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$tartr="SELECT * FROM `services` WHERE service_name='HANDIWORK' AND location='$gases'";
	$ss=mysqli_query($db, $tartr);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	}
//mirror code
	if(isset($_POST['mirror'])){
	$mirrors=mysqli_real_escape_string($db, $_POST['hamlocation']);
	$_SESSION['mirror']=$mirrors;
	$cookie_name="k3";
	$cookie_value="Hang a mirror";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$tartr="SELECT * FROM `services` WHERE service_name='HANDIWORK' AND location='$mirrors'";
	$ss=mysqli_query($db, $tartr);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	}


//CONTRACTING
if(isset($_POST['Stair'])){
	$stairs=mysqli_real_escape_string($db, $_POST['sblocation']);
	$_SESSION['Stair']=$stairs;
	$cookie_name="s7";
	$cookie_value="Stairway Build";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$riats="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$stairs'";
	$ss=mysqli_query($db, $riats);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//shower
if(isset($_POST['shower'])){
	$showers=mysqli_real_escape_string($db, $_POST['srlocation']);
	$_SESSION['shower']=$showers;
	$cookie_name="s11";
	$cookie_value="Shower replacement";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$riats="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$showers'";
	$ss=mysqli_query($db, $riats);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//shower installation
if(isset($_POST['showez'])){
	$showerz=mysqli_real_escape_string($db, $_POST['silocation']);
	$_SESSION['showez']=$showerz;
	$cookie_name="s13";
	$cookie_value="Shower installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$riats="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$showerz'";
	$ss=mysqli_query($db, $riats);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//garage remodel
if(isset($_POST['Garage'])){
	$elk=mysqli_real_escape_string($db, $_POST['grlocation']);
	$_SESSION['Garage']=$elk;
	$cookie_name="s9";
	$cookie_value="Garage Remodel";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$elk'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}

	//Bathroom remodel code
if(isset($_POST['room'])){
	$eln=mysqli_real_escape_string($db, $_POST['brlocation']);
	$_SESSION['room']=$eln;
	$cookie_name="s10";
	$cookie_value="Bathroom Remodel";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$eln'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//gas code
if(isset($_POST['gaz'])){
	$gasez=mysqli_real_escape_string($db, $_POST['gfilocation']);
	$_SESSION['gaz']=$gasez;
	$cookie_name="s11";
	$cookie_value="Gas fireplace install";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$gasez'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}

//concrete code
if(isset($_POST['concrete'])){
	$concretes=mysqli_real_escape_string($db, $_POST['pclocation']);
	$_SESSION['concrete']=$concretes;
	$cookie_name="s12";
	$cookie_value="Pour Concrete";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$concretes'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}

//shed repair code

if(isset($_POST['shed'])){
	$sheds=mysqli_real_escape_string($db, $_POST['srlocation']);
	$_SESSION['shed']=$sheds;
	$cookie_name="s13";
	$cookie_value="Shed repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$sheds'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//code for exterior awning

if(isset($_POST['awning'])){
	$awn=mysqli_real_escape_string($db, $_POST['eailocation']);
	$_SESSION['awning']=$awn;
	$cookie_name="s14";
	$cookie_value="Exterior Awning Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$awn'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//windows security

if(isset($_POST['window'])){
	$windows=mysqli_real_escape_string($db, $_POST['wsbilocation']);
	$_SESSION['window']=$windows;
	$cookie_name="s15";
	$cookie_value="Window Security Bar Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$windows'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//kitchen remodel code
if(isset($_POST['kitchen'])){
	$kitchens=mysqli_real_escape_string($db, $_POST['krlocation']);
	$_SESSION['kitchen']=$kitchens;
	$cookie_name="s16";
	$cookie_value="Kitchen Remodel";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$kitchens'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//driveway code
if(isset($_POST['driveway'])){
	$driveways=mysqli_real_escape_string($db, $_POST['drlocation']);
	$_SESSION['driveway']=$driveways;
	$cookie_name="s17";
	$cookie_value="Driveway Repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$driveways'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//drive
if(isset($_POST['drive'])){
	$drives=mysqli_real_escape_string($db, $_POST['dilocation']);
	$_SESSION['drive']=$drives;
	$cookie_name="s18";
	$cookie_value="Driveway installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$drives'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
if(isset($_POST['subfloor'])){
	$subfloors=mysqli_real_escape_string($db, $_POST['sllocation']);
	$_SESSION['subfloor']=$subfloors;
	$cookie_name="s20";
	$cookie_value="subfloor laveling";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Contracting' AND location='$subfloors'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
}
//ELECTRICAL

if(isset($_POST['lih'])){
	$ell=mysqli_real_escape_string($db, $_POST['lsilocation']);
	$_SESSION['ele']=$ell;
	$cookie_name="s8";
	$cookie_value="Light Switch Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$ell'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}

//light floors

if(isset($_POST['fix'])){
	$fixs=mysqli_real_escape_string($db, $_POST['lfrlocation']);
	$_SESSION['fix']=$fixs;
	$cookie_name="s30";
	$cookie_value="Light Fixture Repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$fixs'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//bath fan code
if(isset($_POST['fan'])){
	$fans=mysqli_real_escape_string($db, $_POST['bfrlocation']);
	$_SESSION['fan']=$fans;
	$cookie_name="s31";
	$cookie_value="Bathroom fan repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$fans'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	

}
//wall
if(isset($_POST['wall'])){
	$walls=mysqli_real_escape_string($db, $_POST['ewilocation']);
	$_SESSION['wall']=$walls;
	$cookie_name="s32";
	$cookie_value="Electric wall installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$walls'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}
//outlet installation
if(isset($_POST['outlet'])){
	$outlets=mysqli_real_escape_string($db, $_POST['oilocation']);
	$_SESSION['outlet']=$outlets;
	$cookie_name="s33";
	$cookie_value="Outlet installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$outlets'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}

//panel fixing
if(isset($_POST['panel'])){
	$panels=mysqli_real_escape_string($db, $_POST['epulocation']);
	$_SESSION['panel']=$panels;
	$cookie_name="s35";
	$cookie_value="Electrical panel Upgrade";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$panels'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}

//panels code
if(isset($_POST['panelz'])){
	$panelsz=mysqli_real_escape_string($db, $_POST['epilocation']);
	$_SESSION['panelz']=$panelsz;
	$cookie_name="s36";
	$cookie_value="Electrical  panel Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$panelsz'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}
//spa installation
if(isset($_POST['spa'])){
	$spas=mysqli_real_escape_string($db, $_POST['swrlocation']);
	$_SESSION['spa']=$spas;
	$cookie_name="s37";
	$cookie_value="spa wire repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$spas'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}

//light conversion
if(isset($_POST['conver'])){
	$convers=mysqli_real_escape_string($db, $_POST['lilclocation']);
	$_SESSION['conver']=$convers;
	$cookie_name="s38";
	$cookie_value="LED interior light conversion";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$convers'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}
//light fixture installation
if(isset($_POST['fixt'])){
	$fixts=mysqli_real_escape_string($db, $_POST['lfilocation']);
	$_SESSION['fixt']=$fixts;
	$cookie_name="s39";
	$cookie_value="Light Fixture installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$fixts'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}
// fridge code
if(isset($_POST['frige'])){
	$friges=mysqli_real_escape_string($db, $_POST['rrlocation']);
	$_SESSION['frige']=$friges;
	$cookie_name="s40";
	$cookie_value="Refrigerator repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$friges'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}
//hood code
if(isset($_POST['hood'])){
	$hoods=mysqli_real_escape_string($db, $_POST['rhrlocation']);
	$_SESSION['hood']=$hoods;
	$cookie_name="s41";
	$cookie_value="Range hood repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$hoods'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}

//holiday code
if(isset($_POST['holiday'])){
	$holidays=mysqli_real_escape_string($db, $_POST['hlilocation']);
	$_SESSION['holiday']=$holidays;
	$cookie_name="s42";
	$cookie_value="Holiday Light Installation";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$holidays'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}
//fan code
if(isset($_POST['phan'])){
	$phans=mysqli_real_escape_string($db, $_POST['efrlocation']);
	$_SESSION['phan']=$phans;
	$cookie_name="s43";
	$cookie_value="Exhaust fan repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$phans'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}

//
if(isset($_POST['flo'])){
	$flos=mysqli_real_escape_string($db, $_POST['orlocation']);
	$_SESSION['flo']=$flos;
	$cookie_name="s45";
	$cookie_value="Outlet Repair";
	setcookie($cookie_name, $cookie_value, time()+60, "/");
    $db = mysqli_connect('localhost', 'root', '', 'homemart');
	$trft="SELECT * FROM `services` WHERE service_name='Electrical' AND location='$flos'";
	$ss=mysqli_query($db, $trft);
   if(mysqli_num_rows($ss)==0){
		?>
       <script>
      		alert('Sorry we do not have pro in your area');
      		window.location.href='index.php';
      	</script>
		<?php

	}else{
		?>
		
      	  <script>
       	alert('Good News We have matched you to local qualified pro ');

       	window.location.href='services.php';

       </script>
		<?php
		
	}
	
}


//Submiting customer order details
if(isset($_POST['order'])){

	//wafd-within a few days
	//nw-next week
	//nm-next month
	//optional-do you have anything extra
	$due_date=mysqli_real_escape_string($db, $_POST['due_date']);
	$optional=mysqli_real_escape_string($db, $_POST['optional']);
	$vendor=filter_input(INPUT_POST, 'vendor');
	$email=mysqli_real_escape_string($db, $_POST['femail']);
	$fname=mysqli_real_escape_string($db, $_POST['fname']);
	$lname=mysqli_real_escape_string($db, $_POST['lname']);
	$phone=mysqli_real_escape_string($db, $_POST['fphone']);
	$contact=mysqli_real_escape_string($db, $_POST['contact']);


//Interior design
 if(!empty($_SESSION['man'])){
 if(isset($_COOKIE['s1'])){
  	$x=$_COOKIE['s1'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
 }else{}
 
 }
 //Interior design

 //Carpentry
 elseif (!empty($_SESSION['pac'])) {
   if(isset($_COOKIE['s2'])){
	$x=$_COOKIE['s2'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
 }
 
  elseif (!empty($_SESSION['or'])) {
   if(isset($_COOKIE['t'])){
     	$x=$_COOKIE['t'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

 }
 //Carpentry 


//plumbing
 elseif (!empty($_SESSION['trs'])) {

   if(isset($_COOKIE['s3'])){
     	$x=$_COOKIE['s3'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

 }

elseif (!empty($_SESSION['lp'])) {
          if(isset($_COOKIE['mb'])){
     	$x=$_COOKIE['mb'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
elseif (!empty($_SESSION['toi'])) {   echo "Plumbing";
          if(isset($_COOKIE['hu'])){
    	$x=$_COOKIE['hu'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
elseif (!empty($_SESSION['hto'])) {
          if(isset($_COOKIE['uio'])){
   	$x=$_COOKIE['uio'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
elseif (!empty($_SESSION['thl'])) {
          if(isset($_COOKIE['dfg'])){
    	$x=$_COOKIE['dfg'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
//plumbing

//painting
elseif (!empty($_SESSION['garage'])) {
          if(isset($_COOKIE['si'])){
    	$x=$_COOKIE['si'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}

elseif (!empty($_SESSION['paint'])) {
          if(isset($_COOKIE['s6'])){
     	$x=$_COOKIE['s6'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}

elseif (!empty($_SESSION['fence'])) {
          if(isset($_COOKIE['s7'])){
     	$x=$_COOKIE['s7'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
 elseif (!empty($_SESSION['int'])) {
    if(isset($_COOKIE['s4'])){
     	$x=$_COOKIE['s4'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
   
 }
//painting

//landscaping
 elseif (!empty($_SESSION['scap'])) {
    if(isset($_COOKIE['s5'])){
     	$x=$_COOKIE['s5'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
 }

elseif (!empty($_SESSION['hedge'])) {
          if(isset($_COOKIE['s9'])){
     	$x=$_COOKIE['s9'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}

elseif (!empty($_SESSION['soft'])) {
          if(isset($_COOKIE['s10'])){
     	$x=$_COOKIE['s10'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}

elseif (!empty($_SESSION['tree'])) {
          if(isset($_COOKIE['s11'])){
     	$x=$_COOKIE['s11'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}

elseif (!empty($_SESSION['lavel'])) {
          if(isset($_COOKIE['s12'])){
     	$x=$_COOKIE['s12'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}

elseif (!empty($_SESSION['land'])) {
          if(isset($_COOKIE['s13'])){
     	$x=$_COOKIE['s13'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
elseif (!empty($_SESSION['plant'])) {
          if(isset($_COOKIE['s14'])){
     	$x=$_COOKIE['s14'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }

}
elseif (!empty($_SESSION['garden'])) {
          if(isset($_COOKIE['s15'])){
     	$x=$_COOKIE['s15'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['lawn'])) {
          if(isset($_COOKIE['s17'])){
     	$x=$_COOKIE['s17'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

//landscaping

//handiwork
elseif (!empty($_SESSION['bath'])) {
          if(isset($_COOKIE['k1'])){
     	$x=$_COOKIE['k1'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['gas'])) {
          if(isset($_COOKIE['k2'])){
     	$x=$_COOKIE['k2'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['mirror'])) {
          if(isset($_COOKIE['k3'])){
     	$x=$_COOKIE['k3'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['rpar'])) {
       if(isset($_COOKIE['s6'])){
     	$x=$_COOKIE['s6'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
 }
//handiwork

//contracting
elseif (!empty($_SESSION['net'])) {
         if(isset($_COOKIE['s7'])){
     	$x=$_COOKIE['s7'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }
 }
 elseif (!empty($_SESSION['shower'])) {
          if(isset($_COOKIE['s11'])){
     	$x=$_COOKIE['s11'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['showez'])) {
          if(isset($_COOKIE['s13'])){
     	$x=$_COOKIE['s13'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['Garage'])) {
          if(isset($_COOKIE['s9'])){
     	$x=$_COOKIE['s9'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['room'])) {
          if(isset($_COOKIE['s10'])){
     	$x=$_COOKIE['s10'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['gaz'])) {
          if(isset($_COOKIE['s11'])){
     	$x=$_COOKIE['s11'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['concrete'])) {
          if(isset($_COOKIE['s12'])){
     	$x=$_COOKIE['s12'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['shed'])) {
          if(isset($_COOKIE['s13'])){
     	$x=$_COOKIE['s13'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['awning'])) {
          if(isset($_COOKIE['s14'])){
     	$x=$_COOKIE['s14'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

 elseif (!empty($_SESSION['pen'])) {
          if(isset($_COOKIE['rt'])){
     	$x=$_COOKIE['rt'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
 }
 elseif (!empty($_SESSION['ben'])) {
          if(isset($_COOKIE['rz'])){
     	$x=$_COOKIE['rz'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['benja'])) {
          if(isset($_COOKIE['tc'])){
     	$x=$_COOKIE['tc'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['pets'])) {
          if(isset($_COOKIE['mj'])){
     	$x=$_COOKIE['mj'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['triml'])) {
          if(isset($_COOKIE['ko'])){
     	$x=$_COOKIE['ko'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['inl'])) {
          if(isset($_COOKIE['fl'])){
     	$x=$_COOKIE['fl'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['aloc'])) {
          if(isset($_COOKIE['lf'])){
     	$x=$_COOKIE['lf'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['Stair'])) {
          if(isset($_COOKIE['s7'])){
     	$x=$_COOKIE['s7'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['window'])) {
          if(isset($_COOKIE['s15'])){
     	$x=$_COOKIE['s15'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['kitchen'])) {
          if(isset($_COOKIE['s16'])){
     	$x=$_COOKIE['s16'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}



elseif (!empty($_SESSION['driveway'])) {
          if(isset($_COOKIE['s17'])){
     	$x=$_COOKIE['s17'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['drive'])) {
          if(isset($_COOKIE['s18'])){
     	$x=$_COOKIE['s18'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['subfloor'])) {
          if(isset($_COOKIE['s20'])){
     	$x=$_COOKIE['s20'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}


//contracting

//electrical
elseif (!empty($_SESSION['ele'])) {
          if(isset($_COOKIE['s8'])){
     	$x=$_COOKIE['s8'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['fix'])) {
          if(isset($_COOKIE['s30'])){
     	$x=$_COOKIE['s30'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['fan'])) {
          if(isset($_COOKIE['s31'])){
     	$x=$_COOKIE['s31'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['wall'])) {
          if(isset($_COOKIE['s32'])){
     	$x=$_COOKIE['s32'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['outlet'])) {
          if(isset($_COOKIE['s33'])){
    	$x=$_COOKIE['s33'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['panel'])) {
          if(isset($_COOKIE['s35'])){
     	$x=$_COOKIE['s35'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['panelz'])) {
          if(isset($_COOKIE['s36'])){
    	$x=$_COOKIE['s36'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['spa'])) {
          if(isset($_COOKIE['s37'])){
     	$x=$_COOKIE['s37'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['conver'])) {
          if(isset($_COOKIE['s38'])){
    	$x=$_COOKIE['s38'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['fixt'])) {
          if(isset($_COOKIE['s39'])){
    	$x=$_COOKIE['s39'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['frige'])) {
          if(isset($_COOKIE['s40'])){
     	$x=$_COOKIE['s40'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['hood'])) {
          if(isset($_COOKIE['s41'])){
     	$x=$_COOKIE['s41'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['holiday'])) {
          if(isset($_COOKIE['s42'])){
     	$x=$_COOKIE['s42'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}

elseif (!empty($_SESSION['phan'])) {
          if(isset($_COOKIE['s43'])){
    	$x=$_COOKIE['s43'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}
elseif (!empty($_SESSION['flo'])) {
          if(isset($_COOKIE['s45'])){
     	$x=$_COOKIE['s45'];
  $query4= "INSERT INTO `orders`(due_date, optional_details, vendor, email, fname, lname, phone, contact, occupation)VALUES('$due_date', '$optional', '$vendor', '$email', '$fname', '$lname', '$phone', '$contact', '$x')";
  mysqli_query($db, $query4);
		unset($query4); 
		?>

<script>
    	alert("Thank you. You will be contacted shortly......");
           	window.location.href='index.php';
           </script>
		<?php
   }else{
   }
}












}












//LOGIN VENDOR
if(isset($_POST['Alogin_user'])){
	$username=mysqli_real_escape_string($db, $_POST['Auname']);
	$password=mysqli_real_escape_string($db, $_POST['Apsw']);
if(empty($username)){
array_push($errors, "Username is required");
}
if(empty($password)){
array_push($errors, "password is required");
}
//$query=$db->query("SELECT * FROM  `vendor_requirement` INNER JOIN `vendor` WHERE vendor_requirement.`vendor_name`=vendor.`username`");
if(count($errors)==0){
	
	$password1=md5($password);
	$query="SELECT*FROM `admin` WHERE name='$username' AND password='$password'";
	$results=mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
            header('location:admin.php');
		}
		else{
			?>
         <script type="text/javascript">
         	alert('Wrong password or username combination');
         	window.location.href='index.php';
         </script>
			<?php
		}
		
	}else{
		array_push($errors, "Wrong username/password combination");
		header('location:index.php');
	}
}






	










?>