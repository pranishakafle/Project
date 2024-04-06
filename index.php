
<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
	$message=$_SESSION['message'];
	echo"<script type='text/javascript'>
	alert('$message');
	</script>";
}
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
 $data=mysqli_connect($host,$user,$password,$db);
 $sql="SELECT * FROM teacher";
 $result=mysqli_query($data,$sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institute Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav>
		<label class="logo">Riviera Academy </label>
		<ul>

		<li><a href="index.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="index.php#admin">Admission</a></li>
		<li><a href="login.php" class="btn btn-success">Login</a></li>
	</ul>
	</nav>

	<div class="section1">
		<label class="img_text">We Teach Students With Care</label>

		<img class="main_img" src="school_management.jpg">
	</div>

	<div class="container">
		<div class="row">


			<div class="col-md-4">
				 
				<img class="welcome_img" src="building.png">

				</div>

				<div class="col-md-8">

					<hl>Welcome to Riviera Academy

					<p>Riviera is one of the leading institute in Nepal.We are dedicated to nurturing young minds, fostering a passion for knowledge, and empowering students to reach their full potential. Our institute is renowned for its commitment to academic excellence, holistic development, and a vibrant learning community.. We believe that education is the cornerstone of personal and societal progress,  and we strive to create an environment where students can thrive intellectually, emotionally, and socially. </p>  

				   
			</div>

		 </div>

	</div>

	<center>
		<h1 id="teachers">Our Teachers</h1>
	</center>

	<div class="container">
		<div class="row">
			<?php
			while($info=$result->fetch_assoc())
			{
			?>


			<div class="col-md-4">

				<img class="teacher" src="<?php echo "{$info['image']}" ?>">
				<h3><?php echo "{$info['name']}" ?></h3>
				<h5><?php echo "{$info['description']}" ?></h5>
			</div>
			<?php
		} 

		?>

			
		
	</div>
</div>

<center>
		<h1 id="courses">Our Courses</h1>
	</center>

	<div class="container">
		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="web.jpg">
				<h3>Web Develop</h3>
				

			</div>

			<div class="col-md-4">
				<img class="teacher" src="graphic.jpg">
				<h3>Graphics Design</h3>
				
			</div>

			<div class="col-md-4">
			<img class="teacher" src="marketing.png">
			<h3>Marketing</h3>
			
		</div>
	</div>
</div>

<center>
	<h1 class="adm" id="#admin">Admission Form</h1>
</center>

<div align="center" class="admission_form">
	<form action="data_check.php" method="POST">
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>
		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg"type="text" name="email">
	 	</div>
		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg"type="text"  name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>

		<div class="adm_int">
			
			<input class="btn btn-primary" id="submit" type="Submit" value="Apply" name="apply">
		</div>
	</form>
				
			</div>

			<footer>
				<h3 class="footer_text">&copy; copyright reserved by Pranisha Kafle</h3>
			</footer>

</body> 
</html> 