<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>City Taxi (PVT) Ltd</title>
	  <link rel="stylesheet" href="animate.css.">
		<style>
			ul li p{
				color:rgb(255,179,79);
			}
			
			body{
				background-color: rgba(62,88,113);
				color:black;
			}
					
						
			.bgimg {
				background-image: url('taxi4.jpg');
				height:470; 
				width:1035;
				opacity:0.5;
			}

			.container {
				display: grid;
				grid-template-columns: 1fr 1fr;
				column-gap: 2px;
			}
		</style>
   </head>
   
   <body class="hold-transition sidebar-mini layout-fixed">

		<div style="position:absolute; top:35px";>
		<div style="border:2px solid black;width:1345">
		<div style="margin:5px;border:2px solid black;width:300">
		<div class="wrapper">  
	  
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <br><center><img src="taxilogo.jpeg"  width="200" top="40px"></center><br>
            <div class="sidebar">
               
			   <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				
				<li class="nav-item animated bounceInLeft">
               <a href="Dashboard.php" class="nav-link">
               <p>Dashboard</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
					<p>Vehicle Owner Dashboard</p>
				</li>
			   
               <li class="nav-item animated bounceInLeft">
               <p>Register</p>
               <ul class="nav nav-treeview">         
			   <li class="nav-item">
               <a href="VehicleOwnerRegistration.php" class="nav-link">
               <p>Vehicle Owner Registration</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <p>Vehicle</p>
               <ul class="nav nav-treeview">         
			   <li class="nav-item">
               <a href="VehicleRegistration.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Login.php" class="nav-link"> 
               <p>Exit</p>
               </a>
               </li>
			   
               </ul>
               </li>
               </ul>
               </nav>
              </div>
       </aside>
      </div>
		</div>
	  
	  <div class="bgimg" style="position:absolute;top:7px; left:310px;border:2px solid black;width:1035">
		<form name="f1" method="post">
		
		<h2><center>Vehicle Registration </center></h2>
		
		<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Vehicle Number :&emsp;&emsp;&emsp;&nbsp;</label>
		<input type="text" name="t1">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Model :&emsp;</label>
		<input type="text" name="t2">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Fuel Type :&emsp;&nbsp;&nbsp;</label>
		<input type="text" name="t3">
        </div>
        </div>
		</div><br>

		&emsp;&emsp;<input type="submit" name="s1" value="Register">
		</form>
		</div>
		</div>
		
		<?php
		$VehicleNo=$_POST["t1"];
		$Model=$_POST["t2"];
		$FuelType=$_POST["t3"];


$con=mysqli_connect("localhost","root","","asedb");
if(isset($_POST["s1"]))
{$sql="insert into tblVehicle values('$VehicleNo','$Model','$FuelType')";
$result=mysqli_query($con,$sql);
}
?>
	
   </body>
   
</html>