<html>
   <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-pUA-Compatible" content="ie=edge" />
		<title>City Taxi (PVT) Ltd</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
		<script src="script.js" defer></script>
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
			
			.rating-box {
				position: relative;
				background: #fff;
				padding: 25px 50px 35px;
				border-radius: 25px;
				box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
				width:300;
				height:70;			  
			}
			
			.rating-box header {
				font-size: 22px;
				color: #dadada;
				font-weight: 500;
				margin-bottom: 20px;
				text-align: center;
			}
			
			.rating-box .stars {
				display: flex;
				align-items: center;
				gap: 25px;
			}
			
			.stars i {
				color: #e6e6e6;
				font-size: 35px;
				cursor: pointer;
				transition: color 0.2s ease;
			}
			
			.stars i.active {
				color: #ff9c1a;
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
		<h2><center>Driver Rating </center></h2>
		
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
		
		
		<div class="rating-box">
			<header>How was your experience?</header>
			<div class="stars" name="t3">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
			</div>
		</div>
		<br><div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Rate Level :&emsp;&emsp;</label>
		<input type="text" name="t3">
        </div>
        </div><br>
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Your Comment :</label>
		<input type="text" name="t4">
        </div>
        </div><br>
		&emsp;&emsp;<input type="submit" name="s1" value="Submit">
		</form>
	
	
	</div>
	</div>
	
	<?php
			$BookindID=$_POST["t1"];
			$CNIC=$_POST["t2"];
			$Rate=$_POST["t3"];
			$Comment=$_POST["t4"];
			$con=mysqli_connect("localhost","root","","asedb");
			if(isset($_POST["s1"]))
			{$sql="insert into tblRating values('$BookindID','$CNIC','$Rate','$Comment')";
			$result=mysqli_query($con,$sql);
			}
			
			
		?>
   </body>
   
</html>