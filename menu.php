<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="style.css" rel="stylesheet">

    

</head>
<body>
    <header>
        <div class="rows">

            <div class="logo">
                <img src="">
            </div>

            <ul class="main-nav">
               <li><a href="index.php">Home</a></li>
                <li><a href="register_r.php">Restaurant Sign Up</a></li>
                <li><a href="login_r.php">Restaurant Login </a></li>
                <li><a href="register_c.php">Customer Sign UP</a></li>
                <li><a href="login.php">Customer Login</a></li>
            </ul>

             <div class="hero" >
           <h1  id="basic" style="font-size: 80px;">First we eat, </h1><h1  id="basic">then we do everything else</h1>
          <div class="button">
     
           <a href="#data" class="btn btn-full"  >Order Now</a>
           
        </div>
        </div>

            </header>

<?php
session_start();
$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
  die("Server could not connected");
$sql = "SELECT * FROM menu";
$res= mysqli_query($con,$sql);
$mes= mysqli_query($con,$sql);
$count=0;
while($row = mysqli_fetch_array($res)){
    $count=$count+1;
}
while($count>0){
  $row1 = mysqli_fetch_array($mes);

  echo "<form method='post' action='item_c.php'><br><br><div class='container' id='data'> <div class='row' ><div class='col-md-3' ><img src='".$row1['Image']."' height='190' width='260'><h3>". $row1['name']."</h3>"."<b>Restaurant :</b>".$row1['restaurant'].""."<p><b>Food Type :</b>".$row1['type']."</p><center><input type='button' value='Order' name='".$row1['name']."'id='".$row1['code']."' onclick='fun(this);'  class='btn btn-full'></center> </div>";$row1 = mysqli_fetch_array($mes); $count=$count-1; if($count==0) break; echo " <div class='col-md-1'></div><div class='col-md-3'><img src='".$row1['Image']."' height='190' width='260'><h3>". $row1['name']."</h3><p>"."<b>Restaurant :</b>".$row1['restaurant']."<br>"."<b>Food Type :</b>".$row1['type']."</p><center><input type='button' value='Order' id='".$row1['code']."' onclick='fun(this);' class='btn btn-full' name='".$row1['name']."'></center> </div>";$row1 = mysqli_fetch_array($mes); $count=$count-1; if($count==0) break; echo " <div class='col-md-1'></div><div class='col-md-3' style='color:black; background-color:white;'><img src='".$row1['Image']."' height='190' width='260' ><h3>". $row1['name']."</h3><p>"."<b>Restaurant :</b>".$row1['restaurant']."<br>"."<b>Food Type :</b>".$row1['type']."</p><center><input type='button' id='".$row1['name']."' onclick='fun(this);' value='Order'  class='btn btn-full' name='".$row1['code']."'></center> </div></div><br></div>"."<br></form>";
    $count=$count-1;
}


?>
<br>
<br>
       
 <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Rail Vihar, Sector 47, Gurgaon (Haryana)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 9621254911</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>pathakshubham1228@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<script type="text/javascript">
	function fun(obj)
	{
		var x=0;
		var flag = 0;
		var cookie = document.cookie && document.cookie.split(";");
		for(var i=0; i<cookie.length; i++){
			var a = cookie[i].split('=');
			if(a[0]=='login') {
				alert("Your Order recoded");
				
document.cookie = "my = " + obj.name;

  <?php
error_reporting(0);

$item= $_COOKIE['my'];

$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
  die("Server could not connected");
$sql = "SELECT * FROM menu";
$res= mysqli_query($con,$sql);
$mes= mysqli_query($con,$sql);
$count=0;
while($row = mysqli_fetch_array($res)){
    $count=$count+1;
}

while($count>0){
  $row1 = mysqli_fetch_array($mes);
if($row1['name']== $item)
{
	//$sqldata="insert into food_order values('".$row1['name']."','".$row1['type']."','".$row1['restaurant']."','".$row1['Image']."')";
$rs=mysqli_query($con,$sqldata);
if($rs!=0)

break;
}
  $count=$count-1; if($count==0) break;
}
   
?>

				flag =1;
			}
		}
        if(flag ==0){
        	window.location.href='login.php';
        }
     
      
	}



	
</script>
</body>
</html>