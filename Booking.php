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
				height:570; 
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
				<p>Customer Dashboard</p>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <p>Register</p>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="CustomerRegistration.php" class="nav-link">
               <p>Customer Registration</p>
               </a>
               </li>          
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <p>Booking</p>
               <ul class="nav nav-treeview">         
			   <li class="nav-item">
               <a href="Booking.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <p>Payment</p>
               <ul class="nav nav-treeview">         
			   <li class="nav-item">
               <a href="0000.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Rating.php" class="nav-link">
               <p>Rate Driver</p>
               </a>
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
		
		<h2><center>Taxi Booking </center></h2>
		
		<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Booking ID :&emsp;&emsp;&emsp;&nbsp;</label>
		<input type="text" name="t1">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Customer NICNo :&emsp;</label>
		<input type="text" name="t2">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Customer Name :&emsp;&nbsp;&nbsp;</label>
		<input type="text" name="t3">
        </div>
        </div>
		</div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Contact Number :&emsp;&nbsp;&nbsp;</label>
		<input type="text" name="t4">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Driver NICNo :&emsp;&emsp;</label>
		<input type="text" name="t5">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Driver Contact :&emsp;&emsp;</label>
		<input type="text" name="t6">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;Vehicle Number :&emsp;&emsp;</label>
		<input type="text" name="t7">
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Booking From :&emsp;&emsp;</label>
        <input type="text" name="t8">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Departure :&emsp;&emsp;&emsp;&emsp;</label>
        <input type="text" name="t9">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Pickup Time :&emsp;&emsp;&emsp; </label>
        <input type="text" name="t10">
        </div>
        </div><br>

		&emsp;&emsp;<input type="submit" name="s1" value="Booking">
		</form>
		</div>
		</div>
		
		<?php
			$BookindID=$_POST["t1"];
			$CustomerNICNo=$_POST["t2"];
			$CustomerName=$_POST["t3"];
			$CustomerContact=$_POST["t4"];
			$DriverNICNo=$_POST["t5"];
			$DriverContact=$_POST["t6"];
			$VehicleNo=$_POST["t7"];
			$BookingFrom=$_POST["t8"];
			$Departure=$_POST["t9"];
			$PickupTime=$_POST["t10"];
			$con=mysqli_connect("localhost","root","","asedb");
			if(isset($_POST["s1"]))
			{$sql="insert into tblbooking values('$BookindID','$CustomerNICNo','$CustomerName','$CustomerContact', '$DriverNICNo', '$DriverContact', '$VehicleNo', '$BookingFrom','$Departure','$PickupTime')";
			$result=mysqli_query($con,$sql);
			}
			
			$con=mysqli_connect("localhost","root","","asedb");
			$sql="select*from tbldriver";
			$result=mysqli_query($con,$sql);
			echo "<table border=2> 
				<tr>
					<th>NIC Number</th>
					<th>Driver Name</th>
					<th>Gender</th>
					<th>Contact</th>
					<th>Email</th>
				</tr>";
			while($row=mysqli_fetch_array($result))
			{echo "<tr>
				<td>".$row['NICNo']."</td>
				<td>".$row['Name']."</td>
				<td>".$row['Gender']."</td>
				<td>".$row['Contact']."</td>
				<td>".$row['Email']."</td>
			</tr>";
			}
			
			$con=mysqli_connect("localhost","root","","asedb");
			$sql="select*from tblvehicle";
			$result=mysqli_query($con,$sql);
			echo "<table border=2> 
				<tr>
					<th>Vehicle Number</th>
					<th>Vehicle Model</th>
					<th>Fuel Type</th>
				</tr>";
			while($row=mysqli_fetch_array($result))
			{echo "<tr>
				<td>".$row['VehicleNo']."</td>
				<td>".$row['Model']."</td>
				<td>".$row['FuelType']."</td>
			</tr>";
			}
		?>
	
   </body>
   
</html>