<?php
require('db.php');

if(filter_has_var(INPUT_POST, "submit"))
  {
    $name = htmlspecialchars($_POST["name"]);
    $contact = htmlspecialchars($_POST["contactct"]);
    $zip = htmlspecialchars($_POST["zip"]);
    $pickup = htmlspecialchars($_POST["pickup"]);
    $rname = htmlspecialchars($_POST["rname"]);
    $rcontact = htmlspecialchars($_POST["rcontact"]);
    $rzip = htmlspecialchars($_POST["zip"]);
    $drop = htmlspecialchars($_POST["drop"]);
    $weight = htmlspecialchars($_POST["weight"]);
    
    $query = "INSERT INTO order(FNAME,MNAME,LNAME,RNO,PREF1,PREF2,PREF3,EMAILID) VALUES ('$fname','$mname','$lname','$rno','$pref1','$pref2','$pref3','$email')";
    
      if(mysqli_query($conn, $query))
      {
      $msg =  'Submitted';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ship</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/flash.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

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
          <li><a href="index.php">Home</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
      
    </div>
  </header><!-- #header -->
<section id="intro"> 
  <div class="intro-img">
        <img src="img/flash.png" alt="" class="img-fluid">
      </div>
<div class="testbox">
      <form method="POST" action="confirmation.php" style="padding-top: 10px; width: 100%">
        <div class="item">
          <p>Your Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="name" placeholder="Name" required/> 
            <input type="text" name="contact" placeholder="Contact" required/> 
          </div>
          <p>Pickup ZipCode<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="zip" placeholder="ZipCode" required/> 
          </div>
         
        </div>
        
        <div class="item">
          <p>Pickup address<span class="required">*</span></p>
          <input type="text" name= "pickup" placeholder="Address"/>
        </div>
        <div class="item">
          <p>Receipient's Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="rname" placeholder="Name" required/> 
            <input type="text" name="rcontact" placeholder="Contact" required/> 
          </div>
          <p>Drop ZipCode<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="rzip" placeholder="ZipCode" required/> 
          </div>
         
        </div>
        
        <div class="item">
          <p>Drop address<span class="required">*</span></p>
          <input type="text" name= "drop" placeholder="Address"/>
        </div>
        <div class="item">
          <p>Parcel Weight<span class="required">*</span></p>
          <input type="text" name= "weight" placeholder="Weight in kg"/>
        </div>
        <p>Amount</p>
        <input type="text" name="amount" value="calc($kg*300)" readonly><br>
        
        <div class="btn-block">
          <button type="submit" name="submit" href="/">Ship</button>
        </div>
  </div>
      </form>
    </div>
  </section>
</body>
<style type="text/css">
html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 36px;
      color: #fff;
      z-index: 2;
      }
      span.required {
      color: red;
      }
      .testbox {
      display: flex;
      justify-content: left;
      align-items: left;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      margin-left: 60px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #095484; 
      }
 
      input, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, input:hover::placeholder {
      color: #000;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 5px 0 #000;
      color: #000;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
    
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #000;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #000;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      </style>
</html>