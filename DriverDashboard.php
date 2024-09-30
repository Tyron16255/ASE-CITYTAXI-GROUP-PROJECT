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
					<p>Driver Dashboard</p>
				</li>
			   
               <li class="nav-item animated bounceInLeft">
               <p>Register</p>
               <ul class="nav nav-treeview">
			   <li class="nav-item">
               <a href="DriverRegistration.php" class="nav-link">
               <p>Driver Registration</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <p>Vehicle</p>
               <ul class="nav nav-treeview">         
			   <li class="nav-item">
               <a href="VehicleManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="0000.php" class="nav-link"> 
               <p>Driver Status</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <p>Payment</p>
               <ul class="nav nav-treeview">         
			   <li class="nav-item">
               <a href="PaymentManage.php" class="nav-link">
               <p>Manage</p>
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
		
	
   </body>
   
</html>