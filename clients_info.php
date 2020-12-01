<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>Client Details</title>
   <link rel="stylesheet" href="button2.css">
   
	<style>
	.btn{
			cursor:pointer;
			COLOR:black;
			background-color:rgb(83,163,189);
			font-size: 30px;
			font-family: "Lucida Console", Courier, monospace;
			border-radius: 12px;
			
		}
		body{
			text-align:center;
		}
		.flat-table-1 {
		}
		.flat-table-1 tr:hover {
		}
		h1{
			font-family: Arial, Times, serif;
			font-size:50px;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			
			border-collapse:collapse;
			}
		th{
			color:white;
			font-size:30px;
			padding:16px;
		}
		
		td{
			text-align:center;
			font-size:25px;
			color: #fff;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			
			text-shadow: 1px 1px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:black;
			COLOR:white;
			font-size: 25px;
			border-radius: 12px;
			text-align:center;
			padding-top:2px;
		}
		
		.button1:hover{
			background-color:grey;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("ha.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	
</head>
	
<body>
	<h1 style="color:#fff;text-shadow: 2px 2px black;" ><u>CLIENT DETAILS</h1></u>
    <table class="flat-table-1">
		<thead>
			<th>S.No.</th>
			<th>NAME </th>
			<th>E-MAIL</th>
			<th>BALANCE</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Anirudhi">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2.</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Kanika">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Ruchi">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Rekha">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Garima">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Sakshi">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Vidhi">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Sneha">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Pranjali">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10.</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="client_log.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Richa">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

<div class="buttons">
	<a href="index.php">
    <button class="btn">HOME</button>
	</a>
</div>
</body>
</html>
