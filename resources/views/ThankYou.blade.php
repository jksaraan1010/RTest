<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
body{
    background-color:#B6B6B4;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="ContactUs" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <div class="w3-dropdown-content w3-bar-block w3-card-4">

      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-left w3-padding-64" style="max-width:800px" id="jasmine">
  <div class="w3-container w3-content w3-padding-54" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-left">~Contact Jasmine ~ </h2><br><br><br>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> 25951 Creek Crossing, Novi, MI, 48375<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: 248-225-8709<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: jasminesaraan@gmail.com<br>

      </div>

      <div class="w3-col m7">
      <p style="font-size:25px; font-weight:bold; font-style:italic;">Thanks for contacting me. I will get back to you soon... </p>
      </div>
    </div>
  </div>
