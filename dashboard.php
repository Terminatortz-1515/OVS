<?php
require "login.php";
require "booking.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONLINE VEHICLE SERVICES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
.box {
	text-align: center;
}
.button {
	font-size: 1em;
	padding: 15px 35px;
	color: #fff;
	text-decoration: none;
	cursor: pointer;
	transition: all 0.3s ease-out;
	background: #403e3d;
	border-radius: 50px;
}
.overlay {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: rgba(0, 0, 0, 0.8);
	transition: opacity 500ms;
	visibility: hidden;
	opacity: 0;
}
.overlay:target {
	visibility: visible;
	opacity: 1;
}
.wrapper {
	margin: 70px auto;
	padding: 20px;
	background: #e7e7e7;
	border-radius: 5px;
	width: 70%;
	position: relative;
	transition: all 5s ease-in-out;
}
.wrapper h2 {
	margin-top: 0;
	color: #333;
}
.wrapper .close {
	position: absolute;
	top: 20px;
	right: 30px;
	transition: all 200ms;
	font-size: 30px;
	font-weight: bold;
	text-decoration: none;
	color: #333;
}
.wrapper .close:hover {
	color: #06D85F;
}
.wrapper .content {
	max-height: 30%;
	overflow: auto;
}

.container {
	border-radius: 5px;
	background-color: #e7e7e7;
	padding: 20px 0;
    padding-left:20px;
}


    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>ONLINE VEHICLE SERVICES</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

        </div>
        <div>
            <a href="#" class="clickme" style="float:right;";>PROFILE</a>
                    
        </div>
    </nav>
    <!-- Navbar End -->
    <container style="float:right";>
        <div id="popup">
        <div class="content" style="font-size:large;">
      <p align="center"><img src="<?php echo $row['photo']; ?>" width="50" height="50"></p>
      <p align="center"><?php echo $row['firstname' ]; echo ' '; echo $row['secondname'];echo ' '; echo $row['lastname'] ?></p>
      <p align="center"><?php echo $row['email']; ?></p>
      <p align="center"><?php echo $row['phone']; ?></p>
    <hr><br>
    <div align="center">
    <a href="login.html">log out</a>
    <br>
    </div>
    <div class="clicktoclose"><a href="#">CLOSE</a></div>
</div>
        </div>
</container>
<main>
    <div align="center">
<h3>Darshboard<br>
</div>
      <div class="container">
        <h1>hi, <?php echo $row['firstname']; ?></h1>
        <h3>welcome!</h3>
      </div></h3>
</div>
</main>
<br>
<div class="box">
        <a href="#divOne" class="button"> NEW REQUESTS</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>NEW REQUESTS</h2>
            <a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">	
                <div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		
			<form method="POST" action="save_cart.php">
			<table class="table table-bordered table-striped">
				<thead>
					<th>name:</th>
					<th>number: </th>
					<th>company: </th>
					<th>model: </th>
					<th>service:  </th>
                    <th>phone: </th>
					<th>date:  </th>
					<th>mode: </th>
          <th>location coordinates: </th>
                    <th>action:</th>
				</thead>
				<tbody>
                    <?php
				if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". $row["name"]. "</td>";
    echo "<td>". $row["number"]. "</td>";
    echo "<td>". $row["company"]. "</td>";
    echo "<td>". $row["model"]. "</td>";
    echo "<td>". $row["service"]. "</td>";
    echo "<td>". $row["phone"]. "</td>";
    echo "<td>". $row["date"]. "</td>";
    echo "<td>". $row["mode"]. "</td>";
    echo "<td>"."<a href='https://www.google.com/maps/dir/?api=1&destination={$row["latitude"]},{$row["longitude"]}' target='_blank'>VIEW LOCATION</a>"."</td>";
    echo "<td>"."<a href='#done'>DONE</a>"."</td>";
    echo "</tr>";
  }
} else {
  echo "No new data found";
}
?>
                    <br>
				</tbody>
            
			</table>
			<a href="dashboard.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
			</form>
		</div>
	</div>

				</div>
			</div>
		</div>
	</div>
<br><br>
    <div class="box">
		<a class="button" href="#divtwo">COMPLETED REQUESTS</a>
	</div>
    <div class="overlay" id="divtwo">
		<div class="wrapper">
			<h2>COMPLETED REQUESTS</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					

				</div>
			</div>
		</div>
	</div>
    
<br><br>

    <div class="box">
		<a class="button" href="#divthree">ALL REQUESTS</a>
	</div>
    <div class="overlay" id="divthree">
		<div class="wrapper">
			<h2>ALL REQUESTS</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					
                <div class="container">	
                <div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		
			<form method="POST" action="save_cart.php">
			<table class="table table-bordered table-striped">
				<thead>
					<th>name:</th>
					<th>number: </th>
					<th>company: </th>
					<th>model: </th>
					<th>service:  </th>
          <th>phone: </th>
					<th>date:  </th>
					<th>mode: </th>
          <th>action:</th>
				</thead>
				<tbody>
                    <?php
				if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>". $row["name"]. "</td>";
    echo "<td>". $row["number"]. "</td>";
    echo "<td>". $row["company"]. "</td>";
    echo "<td>". $row["model"]. "</td>";
    echo "<td>". $row["service"]. "</td>";
    echo "<td>". $row["phone"]. "</td>";
    echo "<td>". $row["date"]. "</td>";
    echo "<td>". $row["mode"]. "</td>";
    echo "<td>"."<a href='#done'>DONE</a>"."</td>";
    echo "</tr>";
  }
} else {
  echo "No new data found";
}
?>
                    <br>
				</tbody>
            
			</table>
			<a href="dashboard.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
			</form>
		</div>

				</div>
			</div>
		</div>
	</div>
<br>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function() {
  $('.clickme').click(function(e) {
    e.preventDefault();
    $('#popup').fadeIn();
  });
  $('.clicktoclose').click(function() {
    $('#popup').fadeOut();
  });
});
    </script>
</body>

</html>