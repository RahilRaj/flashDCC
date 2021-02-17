<?php
require('db.php');

  $query = 'SELECT id FROM main';

  $result= mysqli_query($conn,$query);

  while ($row = $result->fetch_assoc()) 
  {
    $id= $row['id'];
  }
  

  // $main = mysqli_fetch_all($result,MYSQLI_ASSOC);

  // mysqli_free_result($result);

  // mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>track your order</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/flash.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>
<body>
	  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
      	<h3><em><strong>flash</strong></em></h3>
        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
<section id="tracking" class="clearfix">
	<div class="intro-img">
        <img src="img/flash.png" alt="" class="img-fluid">
	</div>
<h2>Pay in cash when handing over the parcel to our delivery man. Thank You.
Tracking ID : <?php echo $main ;?></h2>
</section>

</body>
</html>