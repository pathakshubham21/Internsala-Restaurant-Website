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
                <li><a href="menu.php">Menu</a></li>
                <li><a href="login_r.php">Log Out</a></li>
            
                <li><a href="login.php"> Hi! <?php session_start();  echo $_SESSION['un']; ?></a></li>
            </ul>
             </div>

             <div class="hero" >
              <br>   <br>   <br>
         <h1 id="basic">Add Food Items</h1>

        
          <div class="container">
            <div class="row">
              <div class="col-md-5" style="border: 1; color: white;">
                <form method="post" action="upload_r.php" >
                  <br>    <br>
                  <b>Name Of Dish     :</b>
                  <br>
                  <input type="text" name="nm" placeholder="Enter Dish name..." required>
                  <br>    <br>
                  <b> Name Restaurant:</b><br>
                  <input type="text" name="rname" placeholder="Enter Restaurant name..." required>
                  <br>    <br>
                  <b>Dish Type</b><br>
                   <input type="text" name="type" placeholder="Veg/Non Veg..." required>
                  <br>    <br>
                  <b>Image</b><br>
                  <input type="file" name="img" required>
                  <br>      <br>
                  <input type="submit" name="submit" value=" Add Items ">
                </form>
              </div>
              <div class="col-md-2" >
              </div>
               <div class="col-md-5" style="color: white;" >
                         <h1 id="basic">Order List</h1><br>
                <?php



error_reporting(0);
$con=mysqli_connect("localhost","root","","internsala");
if(!$con)
  die("Server could not connected");
$sql = "SELECT * FROM food_order";
$res= mysqli_query($con,$sql);
$mes= mysqli_query($con,$sql);
$count=0;
while($row = mysqli_fetch_array($res)){
    $count=$count+1;
}

while($count>0){
  $row1 = mysqli_fetch_array($mes);

  echo "<img src='".$row1['image']."' height='100' width='80'><b><br>". $row1['name']."</b><br>"."<b>Restaurant :</b>".$row1['restaurant'].""."<b><br>Food Type :</b>".$row1['pre']."<br><br> "; 
  $count=$count-1; if($count==0) break;
   
}




                ?>
              </div>
            </div>
          </div>
         
        
        </div>

            </header>
       
      


        </body>
        </html>

