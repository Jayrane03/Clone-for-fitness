

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="indexx.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <script src="https://use.fontawesome.com/0787724f3c.js"></script>
  <title>Train by your own | J.R Fitness.com</title>

</head>

<body>
  <section class="header ">
    <nav>
      <a href="index.html"><img src="./Images/logo.jpg" alt=""></a>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times menu_icons" onclick="hideMenu()"></i>
        <ul>
          <li><a href="./index.html">HOME</a></li>
          <li><a href="./about.html">ABOUT</a></li>
          <li><a href="./blog.html">BLOG</a></li>
          <li><a href="exercise.html">EXERCISE</a></li>
          <li><a href="./contact.html">CONTACT</a></li>
          <li><a href="./store.php" id="store_page">STORE</a></li>
          <li><a href="./login_page.html">LOGIN</a></li>
          <!-- <li><a href="./register_page.html">REGISTER</a></li> -->
          <li><a href="./cart.php"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
      </div>
      <i class="fa fa-bars menu_icons" onclick="showMenu()"></i>
    </nav>

    <div class="text-box">

      <h1>WELCOME TO J-FIT</h1>
      <p>Register yourself first , <br>
        Fill your details.
      </p>
      <a href="./register_page.html" class="bt">Register Here <i id="arr-right" class="fa fa-arrow-right"
          aria-hidden="true"></i> </a>

    </div>

  </section>

  <!-- Courses -->
  <section class="course">
    <div class="course_head">
      <h1>Courses We Provide</h1>
      <p style="font-size:20px ">We provide many courses which is good for your hygiene.</p>
    </div>
    <div class="row">
      <div class="col">
        <img src="./Images/OIP.jpg" alt="">
        <div class="intro">
          <h1 id="personal">PERSONAL TRAINING</h1>

          <p>A personal trainer can give you the tools and support that you need to reach a health and fitness goal.</p>
        </div>
        <div class="effect_btn">
          <a href="#" class="abtn pg_btn"><i class="fa fa-eye"></i> Visit</a>
        </div>
      </div>
      <div class="col">
        <img src="./Images/diet.jpg" alt="">
        <div class="intro">
          <h1>NUTRITION DIET</h1>
          <p>Complete nutrition requires ingestion and absorption of vitamins, minerals, essential amino acids from protein and essential fatty acids from fat-containing food</p>
         
        </div>
        <div class="effect_btn">
          <a href="./carbohydrates.html" class="abtn pg_btn"><i class="fa fa-eye"></i> Visit</a>
        </div>
      </div>
      <div class="col">
        <img src="./Images/yoga2.jpg" alt="">
        <div class="intro">
          <h1>YOGA</h1>
          <p>
            Yoga is a great practice for both the body and the mind, it offers peace and mindfulness to its lovers and
            helps them get through daily stress.

          </p>
        </div>
        <div class="effect_btn">
          <a href="#" class="abtn pg_btn"><i class="fa fa-eye"></i> Visit</a>
        </div>

      </div>
      <div class="col">
        <img src="./Images/zumba.jpg" alt="">
        <div class="intro">
          <h1>ZUMBA</h1>
          <p>What are 3 benefits of Zumba?
            Besides losing weight, Zumba can help lower your risk of heart disease, reduce your blood pressure and bad
            cholesterol, and boost your good cholesterol. </p>
        </div>
        <div class="effect_btn">
          <a href="#" class="abtn pg_btn"><i class="fa fa-eye"></i> Visit</a>
        </div>
      </div>

    </div>


    </p>

  </section>



 



  <section class="footer">
    <h4 class="text-white">About Us</h4>
    <p>At THE GYM, we’re about real fitness. <br> Our no-nonsense, results-driven culture was built on a history rooted
      in weightlifting</p>
    <div class="icons">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      <i class="fa fa-linkedin"></i>
    </div>
    <p>Made with <i class="fa fa-heart-o "></i> by Jay Rane</p>
  </section>









  <!-- scroll revel animation -->
  <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
  <script src="./Images/Products/scrollreveal.min.js"></script>

  <!-- Java script code to toggle the menu bare -->
  <script>
  function storego(){

 var store= document.getElementById('store_page');
 window.location.replace("store.php");

  }
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
      navLinks.style.right = "0px";
      navLinks.style.display = "block";



    }

    function hideMenu() {
      navLinks.style.right = "-200px";

    }
    const sr = ScrollReveal({
      origin: "top",
      distance: "60px",
      duration: 2500,
      delay: 200,

    })


    sr.reveal(`.col`, { delay: 100 })
    sr.reveal(`.text-box`, { origin: "left" })
  

// calculate bmi js //



  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
</body>

</html>

