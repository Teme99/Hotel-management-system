<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>
<h1 id="name">ZHotel</h1>
        <div class="links">
		    <a href="index.php">Home </a>
            <a href="admin/admin-login.php">Admin </a>
            <a href="settings/reserve.php">Reserve Room </a>
            <a href="recep/recep-login.php">Receptionist </a>
            <a href="settings/assig.txt">FAQ </a>
            <a href="settings/about.php">About </a>
            <a href="settings/contact.php">Contact </a>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/nrooms.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/ndine.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/nbath.jpg" style="width:100%;">
      </div>
	  
      <div class="item">
        <img src="images/npool.jpg"  style="width:100%;">
      </div>
	  
      <div class="item">
        <img src="images/nwifi.jpg" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
		<div class="jumbotron">
		<ul> Services We Give
		<li>Online Room Reservation</li>
		<li>Clean Sleeping Rooms</li>
		<li>Awesome Swimming Pools</li>
		<li>24/7 Free Wifi Service</li>
		<li>Steam and Massage Services</li>
		<li>with smilefull worders</li>
		<li>with the best natural view</li>
		</ul>
		<div class="other">
		<ul>Our Workers
		<li>With SmileFull Faces</li>
		<li>Always There For Your Wants</li>
		<li>Never Get Tired</li>
		<li>Amazing Natural Views</li>
		<li>Breathtaking Beauty</li>
		<li>Life At Its Best</li>
		<li>Will be waiting</li>
		</ul>
		</div>
    </div>
    

<style>
.jumbotron{
 text-size: 300%;
}


.links{
background-color: silver;
font-size: 200%;
text-align: center;
font-style: italic;
margin-bottom: 40px;
}
a{
padding-left: 20px;
color: black;
}
a:hover{
background: brown;
text-decoration: none;
color: white;

}
#name{
font-style: italic;
color: red;
margin-top: 5px;
}
body{
   background-image: url(palm.jpg);
   background-size: cover;
}
footer{
background-color: black;
color: white;
font-style: bold;
font-size: 150%;
text-align: center;
padding: 3px;
}
</style>

</body>
<footer>
<p>copyright &copy; G6PLC</p>
</footer>
</html>