<?php
session_start();





$email1=$_SESSION['email1'];
include_once("dbcon.php");
$select="select *from registration where email='$email1'  ";
$res=mysqli_query($con,$select);





?>
<?php
if($email1=="")
{
session_destroy();
header('location:index.php');
}

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css2/bootstrap.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script type="text/javascript">
	function myfun()
	
	{
	var t1=document.getElementById('i1').value;
	var t2=document.getElementById('i2').value;
	var t3=document.getElementById('i3').value;
	var t4=document.getElementById('i4').value;
	var t5=document.getElementById('i5').value;
	var t6=document.getElementById('i6').value;
	
	if(t1=="")
	{
	document.getElementById('res').innerHTML="Please enter Firstname";
	document.getElementById('res').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res').innerHTML="";
	
	}
	
	if(t2=="")
	{
	document.getElementById('res1').innerHTML="Please enter Lastname";
	document.getElementById('res1').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res1').innerHTML="";
	
	}
	if(t3=="")
	{
	document.getElementById('res2').innerHTML="Please enter Email";
	document.getElementById('res2').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res').innerHTML="";
	
	}
	
	if(t4=="")
	{
	document.getElementById('res3').innerHTML="Please enter Password";
	document.getElementById('res3').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res3').innerHTML="";
	
	}
	if(t5=="")
	{
	document.getElementById('res6').innerHTML="Please enter ConfirmPassword";
	document.getElementById('res6').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res3').innerHTML="";
	
	}
	if(t4!=t5)
	{
	document.getElementById('res4').innerHTML="Password Must be Matched";
	document.getElementById('res4').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res4').innerHTML="";
	
	}
	if(t6=="")
	{
	document.getElementById('res5').innerHTML="Please enter Mobilenumber";
	document.getElementById('res5').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res5').innerHTML="";
	
	}
	
	
	
	
	
	
	
	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	</script>
	<style type="text/css">
	
*
{
margin:0px;
padding:0px;
}
.card
{
width:400px;
margin:auto;
margin-top:10%;	
}
.signup
{
width:180px;
height:40px;
margin-left:45%;	
}
.box
{
height:40px;
width:250px;	
}
#acc
{
height:80px;
color:blue;	
}
.first
{
height:50px;
background-color:black;
width:100%;
	
}

.third
{
height:50px;
background-color:yellow;
width:100%;
	
}
.onec
{
height:250px;
width:350px;	
}
.twoc
{
height:500px;
width:380px;	
margin:0px;
border:0px;
}
.threec
{
height:250px;
width:350px;	
}

	
.digi

{
	font-family:courier;
}	
	.tag
	{
	font-size:12px;
	line-height:2px;
	}
	input
	{
	border-color:green;
	}
	em
{
	color:red;
}

	.done
	{
	margin:auto;	
	}
	
</style>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</head>
<body>
<nav class="navbar navbar-expand-lg   bg-secondary nav1">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
  
  
      <a href="login.html"><button type="button" class="btn btn-primary mr-2">LOGIN</button></a>
  
  
      
  
    </div>
  </div>
  
  
</nav>	
	<nav class="navbar navbar-expand-lg  bg-dark">
  <a class="navbar-brand text-success " href="#"><h2 class="font-weight-bold digi"><i class="fas fa-lock-open text-primary "></i>DIGILocker</h2>
  <h6 class="font-weight-bold tag ml-5 mb-1 ">Be Protected......</h6></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active ">
        <a class="nav-link ml-5"  href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link ml-5" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" href="#">Jobs</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link ml-5" href="#">Schemes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" href="#">Works</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link ml-5" href="#">About us</a>
      </li>
      
    </ul>
  </div>
</nav>

	
	
	
	
	
	
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-4">
	<div class="card onec">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href=""><img src="images/2.jpg" height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src="images/3.png" height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src="images/5.jpg"  height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
	<div class="carousel-item">
      <a href=""><img src="images/6.jpg"  height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	
	
	
	
	
	</div>
	
	
	
	
	
</div>















<!--register-->
<div class="col-lg-4">
	<div class="card twoc">

	<br />
	
	
	  <?php
$output=mysqli_fetch_array($res);
?>

	
	
	
	

	<form action="accrea2.php" method="post" onsubmit="return myfun()" enctype="multipart/form-data" >
	<table class="  w-100 mx-auto ">
<h6>Chosen Photo</h6>
<tr><td><img src="images/<?php echo $output[6]; ?>"  height="250" width="250"   />
<button type="submit" class="btn btn-info button  done "  >Done</button></td></tr>
</table>

	
	
	</form>
	</div>
	</div>
	
	<!--register-->
	
	
	<div class="col-lg-4">
	<div class="card threec">

	 <div class="card-header  text-white bg-dark"> Latest Notifications</div>
	
	
	<marquee direction="up" scrollamount="infinite" onmouseover="this.stop();" onmouseout="this.start();" >
	<ul>
<a href=""><li class="text-danger"><i class="fas fa-long-arrow-alt-right"></i>Graduate & Technician Apprentice – 13 Posts	Degree (Engg

</li></a>

<a href=""><li><i class="fas fa-long-arrow-alt-right"></i>Executive Engineer, Dy Executive Engineer, Dy Executive, Executive – 10 Posts	Degree (Relevant Discipline), MBA, CA/ CMA.



</li></a>
<a href=""><li><i class="fas fa-long-arrow-alt-right"></i>Project Scientist, Sr Project Officer, Sr Project Asst & Other – 14 Posts	Degree, PG (Relevant Discipline).



</li></a>
<a href=""><li class="text-danger"><i class="fas fa-long-arrow-alt-right"></i>Project Manager, Project Asst Manager, Project Associate & Other – 12 Posts.



</li></a>
<a href=""><li class="text-danger"><i class="fas fa-long-arrow-alt-right"></i>Laboratory Manager, Technical/ Lab Associate – 5 Posts	B.E, B.Tech, M.Sc, M.Tech.



</li></a>




	</ul>
	

	
	
	
	
	
	
</marquee>
	
	<a href="" class="text-danger" align="right">Read More</a>	
	
	
	
	
	
	</div>
	
	
	
	
	
</div>

	
		
		
	</div>

	
	
	
		

		
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	

	
	
	
</body>
</html>