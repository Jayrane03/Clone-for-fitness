<?php
 session_start();
//  session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
    <link rel="stylesheet" type="text/css" href="./indexx.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
 
<!--   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <script src="https://use.fontawesome.com/0787724f3c.js"></script>
    <title>Train by your own | J.R Fitness.com</title>

</head>

<body> 
  <section class="header store-header">
    <nav>
    <a href="index.html"><img name="image_store" src="./Images/logo.jpg" alt=""></a>
     <div class="nav-links" id="navLinks">
        <i  class="fa fa-times menu_icons " onclick="hideMenu()"></i>
        <ul>
            <li><a href="./index.html">HOME</a></li>
            <li><a href="./about.html">ABOUT</a></li>
            <li><a href="./blog.html">BLOG</a></li>
            <li><a href="./exercise.html">EXERCISE</a></li>
            <li><a href="./contact.html">CONTACT</a></li>
            <li><a href="./store.php">STORE</a></li>
            <li><a href="./login_page.html">LOGIN</a></li>
            <li><a href="./cart.php"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>l̥ō
     </div>   
     <i  class="fa fa-bars menu_icons" onclick="showMenu()"></i>
</nav>
<div id="la-txt"class="text-box">
    <h1>WELCOME TO OUR STORE</h1>
    <h2>Here you will get gym accessories.<br></h2>
      
</div>
  </section>

  

  <!-- ---Featured Porducts -->

 <div class="small-cont" style="background: radial-gradient(#fff , #ffd6d6);
    max-width: 1200px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;">
   <h2>Gym T-Shirts</h2>
   <div class="row" style="margin-top: 5%;
    display: flex;
    justify-content: space-between;">
      <form action="manage_cart.php" method="POST">
      <div class="cl-1 column-one">
      
<img class="productImage" alt="Product Image">

         <h4>Dark-Grey T-Shirt</h4>   
         <p class="price-p">Rs 250</p>
         <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o" ></i>
         </div>
        <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input type="hidden" name="Item_Name" value="Dark-Grey T-Shirt">
        <input class="priceName" type="hidden" name="Price" value="250">
        <input class="imageName" type="hidden" name="image" value="Images/Products/pr1.jpg">
        <!-- <input class="imageName" type="hidden" name="image" value="Images/Products/pr1.jpg"> -->
      </div>
      </form>
      <form action="manage_cart.php" method="POST">
      <div class="cl-1 column-one">
      <!-- <img class="productImage" alt="Product Image"> -->
         <img name="image_store" src="Images/Products/pr_2.jpg" alt="">
         <h4>Military-Green T-Shirt</h4>   
         <p class="price-p">Rs 300</p>
         <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o" ></i>
         </div>
        <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Military-Green T-Shirt">
        <input class="priceName" type="hidden" name="Price" value="300" >
        <!-- <input class="imageName" type="hidden" name="image" value="Images/Products/pr_2.jpg"> -->
        <!-- <input class="imageName" type="hidden" name="image" > -->
      </div>
      </form>
      <form action="manage_cart.php" method="POST">
      <div class="cl-1 column-one">
         <img name="image_store" src="Images/Products/pr_3.jpg" alt="">
         <h4>White Printed T-Shirt</h4>   
         <p class="price-p">Rs 250</p>
         <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o" ></i>
            <i class="fa fa-star-o" ></i>
         </div>
        <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="White Printed T-Shirt">
        <input class="priceName" type="hidden" name="Price" value="250"> 
        <input class="imageName" type="hidden" name="image" >
      </div>
      </form>
      <form action="manage_cart.php" method="POST">
      <div class="cl-1 column-one">
         <img name="image_store" src="Images/Products/pr3_2.jpg" alt="">
         <h4>Yellow T-Shirt</h4>   
         <p class="price-p">Rs 350</p>
         <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o" ></i>
         </div>
        <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Yellow T-Shirt">
        <input class="priceName" type="hidden" name="Price" value="350" >
        <input class="imageName" type="hidden" name="image">
      </div>
      </form>
      
      </div>
      <h2>Gym Sheevless T-Shirt</h2>
      <div id="shev-t-row"class="row ">
         <form action="manage_cart.php" method="POST">
         <div class="cl-1 column-one">
            <img name="image_store" src="Images/Products/half_1.4.jpeg" alt="">
            <h4>Black Sheevless T-Shirt</h4>   
            <p class="price-p">Rs 200</p>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o" ></i>
               <i class="fa fa-star-o" ></i>
            </div>
           <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
           <input class="itemName"type="hidden" name="Item_Name" value="Black Sheevless T-Shirt">
           <input class="priceName" type="hidden" name="Price" value="200" >
           <input class="imageName" type="hidden" name="image" >
         </div>
</form>
         <form action="manage_cart.php" method="POST">
         <div class="cl-1 column-one">
            <img name="image_store" src="Images/Products/half2.jpg" alt="">
            <h4>Black-Printed Sheevless T-Shirt</h4>   
            <p class="price-p">Rs 350</p>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half-o"></i>
               <i class="fa fa-star-o" ></i>
            </div>
           <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
           <input class="itemName"type="hidden" name="Item_Name" value="Black-Printed Sheevless T-Shirt">
           <input class="priceName" type="hidden" name="Price" value="350" >
           <input class="imageName" type="hidden" name="image" >
         </div>
         </form>
         <form action="manage_cart.php" method="POST">
         <div class="cl-1 column-one">
            <img name="image_store" src="Images/Products/half_3.jpg" alt="">
            <h4>Navy-Blue Sheevless T-Shirt</h4>   
            <p class="price-p">Rs 200</p>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o" ></i>
            </div>
           <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
           <input class="itemName"type="hidden" name="Item_Name" value="Navy-Blue Sheevless T-Shirt">
           <input class="priceName" type="hidden" name="Price" value="200" >
           <input class="imageName" type="hidden" name="image" >
         </div>
         </form>
         <form action="manage_cart.php" method="POST">
         <div class="cl-1 column-one">
            <img name="image_store" src="Images/Products/half4.jpeg" alt="">
            <h4> White Sheevless T-Shirt</h4>   
            <p class="price-p">Rs 200</p>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half-o"></i>
               <i class="fa fa-star-o" ></i>
            </div>
           <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
           <input class="itemName"type="hidden" name="Item_Name" value="White Sheevless T-Shirt">
           <input class="priceName" type="hidden" name="Price" value="200" >
           <input class="imageName" type="hidden" name="image" >
         </div>
         </form>
         
         </div>
         <h2>Shaker</h2>
         <div id="shkaer-row"class="row ">
            <form action="manage_cart.php" method="POST">
            <div class="cl-1 column-one">
               <img name="image_store" src="Images/Products/shaker1.jpg" alt="">
               <h4>White Shaker</h4>   
               <p class="price-p">Rs 350</p>
               <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o" ></i>
               </div>
              <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
              <input class="itemName"type="hidden" name="Item_Name" value="White Shaker">
              <input class="priceName" type="hidden" name="Price" value="350">
              <input class="imageName" type="hidden" name="image" >


            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="cl-1 column-one">
               <img name="image_store" src="Images/Products/shaker2.jpg" alt="">
               <h4 class="productName">Steam Cloud Shaker</h4>   
               <p class="price-p">Rs 300</p>
               <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o" ></i>
               </div>
              <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
              <input class="itemName"type="hidden" name="Item_Name" value="Steam Cloud Shaker">
              <input class="priceName"type="hidden" name="Price" value="300">
              <input class="imageName" type="hidden" name="image" >


            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="cl-1 column-one">
               <img name="image_store" src="Images/Products/shaker 3.jpg" alt="">
               <h4>Neon Green Shaker</h4>   
               <p class="price-p">Rs 250</p>
               <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o" ></i>
                  <i class="fa fa-star-o" ></i>
               </div>
              <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
              <input class="itemName"type="hidden" name="Item_Name" value="Neon Green Shaker">
              <input class="priceName" type="hidden" name="Price" value="250">
              <input class="imageName" type="hidden" name="image" >


            </div>
            </form>
            <form action="manage_cart.php" method="POST">
            <div class="cl-1 column-one">
               <img name="image_store" src="Images/Products/shaker4.jpg" alt="">
               <h4>Red Shaker</h4>   
               <p class="price-p">Rs 350</p>
               <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o" ></i>
               </div>
              <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
              <input class="itemName"type="hidden" name="Item_Name" value="Red Shaker">
              <input class="priceName"type="hidden" name="Price" value="350">
              <input class="imageName" type="hidden" name="image" >


            </div>
            </form>
            
            </div>
            <h2>Mass Gainer</h2>
            <div id="gainer-row" class="row ">
               <form action="manage_cart.php" method="POST">
               <div class="cl-1 column-one">
                  <img name="image_store" src="Images/Products/mb_gainer_2.5kg.jpg" alt="">
                  <h4>Muscle Blaze Weight Gainer 2.5Kg</h4>   
                  <p class="price-p">Rs 3200</p>
                  <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o" ></i>
                  </div>
                 <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                 <input class="itemName"type="hidden" name="Item_Name" value="Muscle Blaze Weight Gainer 2.5Kg">
                 <input class="priceName" type="hidden" name="Price" value="3200">
                 <input class="imageName" type="hidden" name="image" > 
               </div>
               </form>
               <form action="manage_cart.php" method="POST">
               <div class="cl-1 column-one">
                  <img name="image_store" src="Images/Products/mb_gainer_5kg.jpg" alt="">
                  <h4>Muscle Blaze Weight Gainer 5Kg</h4>   
                  <p class="price-p">Rs 5000</p>
                  <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-half-o"></i>
                     <i class="fa fa-star-o" ></i>
                  </div>
                 <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                 <input class="itemName"type="hidden" name="Item_Name" value="Muscle Blaze Weight Gainer 5Kg">
                 <input class="priceName" type="hidden" name="Price" value="5000">
                 <input class="imageName" type="hidden" name="image" >
               </div>
               </form>
               <form action="manage_cart.php" method="POST">
               <div class="cl-1 column-one">
                  <img name="image_store" src="Images/Products/ssn_gainer_2.5kg.jpg" alt="">
                  <h4>SSN Mass Builder 2.5Kg</h4>   
                  <p class="price-p">Rs 2800</p>
                  <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o" ></i>
                     <i class="fa fa-star-o" ></i>
                  </div>
                 <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                 <input class="itemName"type="hidden" name="Item_Name" value="SSN Mass Builder 2.5Kg">
                 <input class="priceName" type="hidden" name="Price" value="2800">
                 <input class="imageName" type="hidden" name="image" >
               </div>
               </form>
               <form action="manage_cart.php" method="POST">
               <div class="cl-1 column-one">
                  <img name="image_store" src="Images/Products/Ssn_gainer_5.1kg.jpg" alt="">
                  <h4>SSN Mass Builder 5Kg</h4>   
                  <p class="price-p">Rs 5200</p>
                  <div class="rating">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-half-o"></i>
                     <i class="fa fa-star-o" ></i>
                  </div>
                 <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                 <input class="itemName"type="hidden" name="Item_Name" value="SSN Mass Builder 5Kg">
                 <input class="priceName" type="hidden" name="Price" value="5200">
                 <input class="imageName" type="hidden" name="image" >
               </div>
               </form>
               
               </div>
               <h2>Whey Protein</h2>
               <div id="whey-row" class="row ">
                  <form action="manage_cart.php" method="POST">
                  <div class="cl-1 column-one">
                     <img name="image_store" src="Images/Products/whey_1.webp" alt="">
                     <h4>One Science Whey Protein 2.5kg</h4>   
                     <p class="price-p">Rs 3200</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o" ></i>
                     </div>
                    <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                    <input class="itemName"type="hidden" name="Item_Name" value="One Science Whey Protein 2.5kg">
                    <input class="priceName" type="hidden" name="Price" value="3200">
                    <input class="imageName" type="hidden" name="image" >
                  </div>
                  </form>
                  <form action="manage_cart.php" method="POST">
                  <div class="cl-1 column-one">
                     <img name="image_store" src="Images/Products/whewy.jpg" alt="">
                     <h4>Nutri Tech Whey Protein 2.5kg</h4>  
                     <p class="price-p">Rs 3000</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o" ></i>
                     </div>
                    <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                    <input class="itemName"type="hidden" name="Item_Name" value="Nutri Tech Whey Protein 2.5kg">
                    <input class="priceName" type="hidden" name="Price" value="3000">
                    <input class="imageName" type="hidden" name="image">

                  </div>
                  </form>
                  <form action="manage_cart.php" method="POST">
                  <div class="cl-1 column-one">
                     <img name="image_store" src="Images/Products/ssn_whey.jpg" alt="">
                     <h4>SSN Whey Protein 2.5Kg</h4>   
                     <p class="price-p">Rs 3500</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o" ></i>
                     </div>
                    <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
                    <input class="itemName"type="hidden" name="Item_Name" value="SSN Whey Protein 2.5Kg">
                    <input class="priceName" type="hidden" name="Price" value="3500">
                    <input class="imageName" type="hidden" name="image">
                  </div>
                  </form>
                  <form action="manage_cart.php" method="POST">
                  <div class="cl-1 column-one">
                     
                     <img name="image_store" src="Images/Products/whey_5kg.webp" alt="">
                     <h4>Impact Whey Protein 5Kg</h4>   
                     <p class="price-p">Rs 6000</p>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    
                     </div>
                    <button type="submit" class="add-tocart" onclick="addtoCart('id')" >Add to Cart</button >
                    <input class="itemName"type="hidden" name="Item_Name" value="Impact Whey Protein 5Kg">
                    <input class="priceName" type="hidden" name="Price" value="6000">
                    <input class="imageName" type="hidden" name="image">
                  </div>
                  </form>
                  
                  </div
      
   </div>
  
         
      </div>
 </div>

      
      



 <section class="footer">
    <h4>About Us</h4>
    <p>At THE GYM, we’re about real fitness. <br> Our no-nonsense, results-driven culture was built on a history rooted in weightlifting</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made with <i class="fa fa-heart-o "></i> by Jay Rane</p>
 </section>




<script src="store.js"></script>
<script src="products.js"></script>
<script src="./Images/Products/scrollreveal.min.js"></script>

    
  
    <!-- Java script code to toggle the menu bare -->
      <script>


  var input = document.querySelector('.imageName');
  var image = document.querySelector('.productImage');
 
   vzr = image.src = input.value;
  console.log(vzr);

 



        document.getElementsByClassName("productName").textContent =   document.getElementsByClassName("itemName").value;
          document.getElementsByClassName("price-p").textContent = document.getElementsByClassName("priceName").value;
   
    var navLinks=document.getElementById("navLinks");
  
     function showMenu(){
        navLinks.style.right="0";
        navLinks.style.display="block";
     }

     function hideMenu(){
        navLinks.style.right="-200px";
       
     }

     
     const sr = ScrollReveal({
      origin : "left", 
      distance : "80px",
      duration : 1500,
      delay : 300,
    
})
sr.reveal(`.row`,{interval :200})
sr.reveal(`.text-box`,{origin:"top"})


      </script>
   
   
</body>


</html>
