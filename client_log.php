<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="button2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.btn{
			cursor:pointer;
			color:black;
			font-size:30px;
			  font-family: "Lucida Console", Courier, monospace;
			  text-align: center;
			  display: inline-block;
			  cursor: pointer;
			  padding:20px;
			  border-radius: 12px;
			background-color:rgb(193,187,153); border: 5px solid #000;
			  
		}
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:30px;
			padding:16px;
		}
		
		td{
			font-size:30px;
			color: #fff;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th{
			border-collapse:collapse;
			background-color:black;
			color:rgb(193,187,153);
		}
		td{
			border-collapse:collapse;
			color:black;
			background-color:rgb(193,187,153);
			}
		body{
			background-image:url("abc.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
		}
		.flat-table-1 tr:hover {
		}
		.btn1 {
			background-color:rgb(193,187,153);
			color: black;
			border-radius:23px;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn1:hover {
			background-color:rgb(114,100,63);
		}
	</style>
</head>
    <body>
	  <center>       
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><button class="btn1">HOME</button></li>
	</a>
	</center>
	</ul>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th><u>Name</u></th>
				<th><u>Email</u></th>
				<th><u>BALANCE</u></th>
				
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<td><?php echo $name?></td>
				<td><?php echo $mail?></td>
				<td><?php echo $amount?></td>
			</tr>

        </table>

        </div>
		<br>
        <br>
		<br>
		<br><br><br><br>
     <div class="buttons">
	<a href="funds_transfer.php">
		<button class="btn">Transfer</button>
	</a>
	</div>
	<br>
	<br>


               
    <div class="buttons">
		<a href="bankstatement.php">
		<button class="btn">Bank Statement</button>
		</a>
	
      
	</div>
    </body>
</html>