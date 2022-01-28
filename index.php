<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
       <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
 
  
    $sql = "INSERT INTO user (name,email,email,password,phone)
VALUES ('".$name."','".$email."','".$email."','".$password."','".$phone."')";

  if (mysqli_query($conn, $sql)) {
    echo " record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>
  <!-- Theme Made By green house -->
  <title>greenhouse.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    font-weight: bold;
    color: black;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 5px;      
    font-size: 20px;
    color: #111;
    font-family: Georgia;
    font-weight: bold;
    color: black;
  }
  h1 {
    font-style: normal;
    font-family: Fantasy;
    font-size: 70px;
    letter-spacing: 5px;
    font-weight: bold;
    color: black;
  }
  h1.b {
    font-style: normal;
    font-family: Monaco;
    font-size: 70px;
    text-align: center;
    font-weight: bold;
    color: black;
  }
  h5 {
    font-style: normal;
    font-family: Times New Roman;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: black;
    
  }
  
  p {
    font-style: normal;
    font-family: Verdana;
    font-size: 20px;
    font-weight: bold;
    color: black;
  }
  h2 {
    font-style: normal;
    font-family: Georgia;
    font-size: 40px;
    font-weight: bold;
    color: black;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #FFFFFF;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    <!--font-family: Montserrat, sans-serif;-->
    margin-bottom: 0;
    background-color: #000000;
    border: 0;
    font-size: 14px !important;
    letter-spacing: 4px;
    opacity: 0.9;
    font-weight: bold;
    font-family: Georgia;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #848482 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #848482 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #000000;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #FFFFFF;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }

<!-- Adding IMAGE -->
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}





  </style>
</head>
<body style="background-image: url('https://images8.alphacoders.com/407/407899.jpg');"  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">


  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>                       
      </button>
      <a target="_blank" href="img\logo.jpg">
      <img src="img\logo.jpg" alt="Logo" width="100" height="100">
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#band">ABOUT</a></li>
        <li><a href="#tour">CATEGORY</a></li>
        <li><a href="#contact">CONTACT</a></li>
       <!-- <li><a href="#student">STUDENT SPECIFIC</a></li>-->
<li class="dropdown">
          <a  data-toggle="dropdown" href="#filter">STUDENT SPECIFIC
          
          <ul class="dropdown-menu">
            <li><a href="https://drive.google.com/drive/folders/1AbnT8dz5vjPTkEKncmcFbrSVE9LYCnX7">Drive Link</a></li>
            
          </ul>
        </li>        
<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#filter">FILTER
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">By Price</a></li>
            <li><a href="#">By Name</a></li>
            <li><a href="#">By plant lifespan</a></li> 
          </ul>
        </li>
        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

</div>



<!-- Container (About Section) -->


<div id="band" class="container text-center">
  <h1><marquee behavior="scroll" direction="left" scrollamount="15"><font color = "Green" size = "20pt"> Smart Greenhouse Temperature Management System </font></marquee></h1>
  <h2><em>We grow brands!</em></h2>
  <p>A greenhouse is a structure with walls and roof made chiefly of transparent material, such as glass, in which plants requiring regulated climatic conditions are grown. These structures range in size from small sheds to industrial-sized buildings. A miniature greenhouse is known as a cold frame. A greenhouse works by converting light energy into heat energy. Light rays from the sun enter the greenhouse, where they are absorbed by plants and objects and converted to heat. The items in the greenhouse release the heat energy, but it is trapped in the small space of the greenhouse by the glass (or plastic sheeting). Greenhouses can get too hot, which is why many have windows, vents or fans to help release hot air as needed. Some also have separate heating systems that raise the temperature when light levels are low.</p>
  <br>
<h2>Controlling Temperatures in a Greenhouse</h2>
<p>In some parts of the world, where outside temperatures are very cold in the winter or where there�s just not enough sunlight to fully heat the greenhouse, it might not get warm enough to sustain plants, without a bit of help from a gardener.
For that reason, many gardeners and large commercial growers need to use an additional heating source to control the temperature inside a greenhouse. According to Scientific American, growers in the Midwest and other colder areas use heaters to keep greenhouses at a relatively balmy 65 degrees throughout the winter.
In the summer, it�s a different story, especially in warmer areas. Since white helps reflect light and prevent heat absorption, greenhouse gardeners in hot places often paint greenhouse roofs white in the summer, removing the paint in the winter. A more cost effective option is to use a white curtain or shade panel to block the sunlight in the summer.</p><br><br><br>
<h2>In our greenhouse we uses a Fans and the light bulbs to control the temperature in greenhouse.</h2>
  

</div>

<!-- Container (CATEGORY Section) -->

<!--CATEGORY FOR FLOWER PLANT -->
<div id="tour" class="bg-1"></div>
<br><br><br><h1 class="text-center"> Categories</h1><br>
<h4>Flower Plants</h4>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img\tuberose.jpg">
      <img src="img\tuberose.jpg" alt="Tuberose Plant" width="300" height="300">
    </a>
<h5>Tuberose (Rajanigandha, Gulchadi)</h5>
    <div class="desc">Required Temperature For plant :- 20-30�C
Environment Needed for plant :- warm humid areas(april,may-cultivation)
Lifespan of a plant :- 1-3 years
Required PH Range of soil :- 6.5 -7.5
Seed Germination Time of plant :- 3-4 months to flowering
Water Needed for a plant :-   2 times a week for first 3 months (reduces supply of water in rainy and winter seasons)
</div>
  </div>
</div>



<div class="responsive">
  <div class="gallery">

    <a target="_blank" href="img\aster.jpg">
      <img src="img\aster.jpg" alt="Aster Plant" width="300" height="300">
    </a>
<h5>Aster</h5>
    <div class="desc">Required Temperature For plant :- Day:20-30, Night: 15-17, Humidity:50-60%<br/>
Environment Needed for plant :- Bright sunlight is required for growth and flowering.<br/>
Lifespan of a plant :- 3-4 months<br/>
Required PH Range of soil :- 6.0 -7.0<br/>
Seed Germination Time of plant :- 1-2 months to flowering<br/>
Water Needed for a plant :-   once in 4-7 days according to soil moisture 
</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img\french_marigold.jpg">
      <img src="img\french_marigold.jpg" alt="French Marigold Plant" width="300" height="300">
    </a>
<h5>French Marigold</h5>
    <div class="desc"><b>Required Temperature For plant :-</b> 18-20�C<br/>
Environment Needed for plant :- mild climate<br/>
Lifespan of a plant :- 9-10 months<br/>
Required PH Range of soil :- 5.6 -6.5 <br/>
Seed Germination Time of plant :-  5-7 days (sprouting)<br/>
Water Needed for a plant :-   0nce in 10 days after 1 month 
</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img\hibiscus.jpg">
      <img src="img\hibiscus.jpg" alt="Hibiscus Plant " width="300" height="300">
    </a>
<h5>Hibiscus</h5>
    <div class="desc">Required Temperature For plant :- 16-32 oC <br/>
Environment Needed for plant :- warm or humid conditions are ideal, you may want to provide a little afternoon shade when it�s overly hot. <br/>
Lifespan of a plant :- 0-5 years<br/>
Required PH Range of soil :- 6.5 -6.8<br/>
Seed Germination Time of plant :- 1 months to Sprouting<br/>
Water Needed for a plant :-   once in 4-5 days according to soil moisture
</div>
  </div>
</div>

<div class="clearfix"></div>



<!-- CATEGORY FOE VEGETABLE-->
<h4>Vegetable Plants</h4>
<div class="responsive">
  <div class="gallery">
      <a target="_blank" href="img\cabbage.jpg">
      <img src="img\cabbage.jpg" alt="Cabbage Plant" width="300" height="300">
    </a>
<h5>Cabbage</h5>
    <div class="desc">Required Temperature For plant :- 15-21 oC<br/>
Environment Needed for plant :- cool and moist climate<br/>
Lifespan of a plant :- 90-100 days<br/>
Required PH Range of soil :- 6.0 -6.5<br/>
Seed Germination Time of plant :- 4-6 weeks <br/>
Water Needed for a plant :-   once a weekly</div>
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img\tomato.jpg">
      <img src="img\tomato.jpg" alt="Tomato Plant" width="300" height="300">
    </a>
<h5>Tomato</h5>
    <div class="desc">Required Temperature For plant :- 21-24 oC <br/>
Environment Needed for plant :- low to medium rainfall, Bright sunshine(at time of fruit set) <br/>
Lifespan of a plant :- 6 months<br/>
Required PH Range of soil :- 5.5-7.5<br/>
Seed Germination Time of plant :- 5-10 days<br/>
Water Needed for a plant :-   Twice a day depends on temp.(one gallon)</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img\pomegranate.jpg">
      <img src="img\pomegranate.jpg" alt="Pomegranate Plant" width="300" height="300">
    </a>
<h5>Pomegrenate</h5>
    <div class="desc">Required Temperature For plant :- 23 -32 �C<br/>
Environment Needed for plant :- rainy season and also in November-December<br/>
Lifespan of a plant :- 6-7 years<br/>
Required PH Range of soil :- 5.5-7.0<br/>
Seed Germination Time of plant :- 5-7 weeks<br/>
Water Needed for a plant :-  Twice a month</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img\kagzi_lemon.jpg">
      <img src="img\kagzi_lemon.jpg" alt="Kagzi Lemon Plant " width="300" height="300">
    </a>
<h5>Kagzi Lemon</h5>
    <div class="desc">Required Temperature For plant :- 25 -35 �C<br/>
Environment Needed for plant :- Dry and arid conditions coupled with well-defined summer having low rainfall<br/>
Lifespan of a plant :- 6-10 years<br/>
Required PH Range of soil :- 5.5- 6.5<br/>
Seed Germination Time of plant :- 1-2 weeks<br/>
Water Needed for a plant :-  Cup of water every day</div>
  </div>
</div>

<div class="clearfix"></div>




<!-- Container (Contact Section) -->

<div id="contact" class="container">
  <h1 class="b" >Contact</h1>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Contact us and we'll get back to you soon.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Pune, Maharashtra</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 1122334455</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: greenhouse@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h2 class="text-center">From The Blog</h2>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Review 1</a></li>
    <li><a data-toggle="tab" href="#menu1">Review 2</a></li>
    <li><a data-toggle="tab" href="#menu2">Review 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <p>Greenhouse is very user friendly.The coustomer service is always quick and helpful.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <p>Everything we got from Greenhouse worked great and we had no problems.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <p>I love how organized the system is-there is a place for all information to live.</p>
    </div>
  </div>
</div>





<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a >Made By greenhouse@gmail.com</a></p> 
</footer>






</body>
</html>