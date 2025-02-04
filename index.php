<?php

$conn  =  mysqli_connect('localhost','root','','contact',)or die ('connection failed');
if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $country=mysqli_real_escape_string($conn,$_POST['country']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $number=$_POST['number'];
  $guests=$_POST['guests'];

  $insert=mysqli_query($conn, "INSERT INTO `contact_us`(name,country,email,number,guests)VALUES('$name','$country','$email','$number','$guests')")or die ('query fail');

  if($insert){
            $message[]= 'Appointment successfully';
         }else{
            $message[]='Appointment failed';

         }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Coffee</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="#home" class="logo"><img src="images/logo.jpeg" alt=""></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#menu">menu</a>
         <a href="#team">team</a>
         <a href="#contact">contact</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home-bg">

   <section class="home" id="home">

      <div class="content">
	    
         <h3>Royale cafe</h3>
         <p>Discover the taste of real Coffe.Start your day with a block Cofee.</p>
         <a href="#about" class="btn">about us</a>
      </div>

   </section>

</div>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="images/about-img.jpeg" alt="">
   </div>

   <div class="content">
      <h3>A cup of coffee can complete your day</h3>
      <p>We belive a cup of coffe is one of the most important simple life.<br>Experience the highest quality 100% Arabic coffee beans from along the equatorial belt.We focus on hand roasting delicious certified organic coffe and fair trade certified cofee.
	  <br>Include your self and drink the best organic coffee.</p>
      <a href="#menu" class="btn">our menu</a>
   </div>

</section>

<!-- about section ends -->

<!-- facility section starts  -->

<section class="facility">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our facility</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>varieties of coffees</h3>
         <p>The popular coffees on our shop are Espresso, Café Latte, Macchiato, Choc Latte, etc. that may have added milk, or other ingredients like nutmeg.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>coffee beans</h3>
         <p>You can get food with fresh coffe beans here.It will be a brand new experience for you.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>breakfast & sweets</h3>
         <p>You can have breakfast at this place and you are also given a chance to taste sweet dishes.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Enjoy cofee while reading</h3>
         <p>Here we have also provided the opportunity to read freely while enjoying a cup of coffee.</p>
      </div>

   </div>

</section>

<!-- facility section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>popular menu</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/menu-1.png" alt="">
         <h3>love you coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu-2.png" alt="">
         <h3>Cappuccino</h3>
      </div>

      <div class="box">
         <img src="images/menu-3.png" alt="">
         <h3>Mocha coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu-4.png" alt="">
         <h3>Frappuccino</h3>
      </div>

      <div class="box">
         <img src="images/menu-5.png" alt="">
         <h3>black coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu-6.png" alt="">
         <h3>love heart coffee</h3>
      </div>

   </div>

</section>

<!-- menu section ends -->

<!-- team section starts  -->

<section class="team" id="team">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our team</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/our-team-1.jpg" alt="">
         <h3>john deo</h3>
      </div>
      <div class="box">
         <img src="images/our-team-2.jpg" alt="">
         <h3>Alex Brem</h3>
      </div>
      <div class="box">
         <img src="images/our-team-3.jpg" alt="">
         <h3>Elina John</h3>
      </div>
      <div class="box">
         <img src="images/our-team-4.jpg" alt="">
         <h3>Kenel Haam</h3>
      </div>
      <div class="box">
         <img src="images/our-team-5.jpg" alt="">
         <h3>Kristina Markas</h3>
      </div>
      <div class="box">
         <img src="images/our-team-6.jpg" alt="">
         <h3>Jolly Fren</h3>
      </div>

   </div>

</section>

<!-- team section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

  

<div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>contact us</h3>
   </div>

   <div class="row">
   
     <div class="image">
         <img src="images/contact-img.jpg" alt="">
      </div>
  
     
      <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
    <?php
      if(isset($message)){
        foreach($message as $message){
          echo '<p class="message">'.$message.'</p>';

        }
      }
    ?>

      <form>
         <h3>book a table</h3>
         <input type="text" name="name" required class="box"  placeholder="enter your name">
		 <input type="text" name="name" required class="box"  placeholder="enter your Country">
		 <input type="text" name="name" required class="box"  placeholder="Example@gmail.com">
         <input type="number" name="number" required class="box"  placeholder="enter your number">
         <input type="number" name="guests" required class="box"  placeholder="how many guests" >
		 <input type="date" name="birthday" required class="box"  placeholder="fixed Date">
		 <input type="Time" name="Time" required class="box"  placeholder="fixed Time">

         <input type="submit" name="submit" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>our email</h3>
         <p>cofeeroyale@gmail.com</p>
         <p>racofee@gmail.com</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 09:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>shop location</h3>
         <p>colombo 02- Sri lanka</p>
      </div>

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>our number</h3>
         <p>011-65 26 565</p>
         <p>011-25 38 452</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ 2024 by <span>Ravini Thiwanka</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->













<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>