<?php
session_start();


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
    <link rel="stylesheet" href="indexx.css">
    <!-- <script src="store.js" async ></script> -->
    
    <script src="https://use.fontawesome.com/0787724f3c.js"></script>
    <title>Train by your own | J.R Fitness.com</title>

</head>

<body id="cart-body">


  <section class="cart-header ">
    <nav>
    <a href="index.html"><img id="image-logo"src="./Images/logo.jpg" alt=""></a>
     <div class="nav-links" id="navLinks">
        <i id="menu_icons" class="fa fa-times " onclick="hideMenu()"></i>
        <ul id="u_links">
            <li><a href="./index.php">HOME</a></li>
            <li><a href="./about.php">ABOUT</a></li>
            <li><a href="./blog.php">BLOG</a></li>
            <li><a href="./exercise.php">EXERCISE</a></li>
            <li><a href="./contact.php">CONTACT</a></li>
            <li><a href="./store.php">STORE</a></li>
            <li><a href="./cart.php"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
     </div>   
     <i id="menu_icons"class="fa fa-bars" onclick="showMenu()"></i>
</nav>


<!--  -->
</section>
<!-- Cart page with add and remove items  -->

<div class="cart-page ">
  
<table>
      <tr id="table_row">
        <!-- <th>Sr No</th> -->
         <th>Product</th>
         <th id="qua">Quantity</th>
         <th>Sub Total</th>
      </tr>
         <?php
         $total = 0;
        
         if(isset($_SESSION['cart'])){
          foreach($_SESSION['cart'] as $key=> $value){ 
           
                     
          // $sr = $key+1; 
         
          $total = 0;
           
            echo '
           
            <tr class="tb-row">
            
                <td>
                  <div class="cart-info">
                  
                    <div id="para">
                      
                      <p>'.$value['Item_Name'].'</p>
                      <p>Rs <span class="iprice">'.$value['Price'].'<input type="hidden" class="iprice" value="'.$value['Price'].'"></span></p>
                      <form action="manage_cart.php" method="POST">
                        <button name="Remove_Item" class="btn btn-sm btn-danger" style="background: blueviolet;
                        color: white;
                        padding: 8px;
                        margin-top: 12px;
                        outline: none;
                        border: none;
                        cursor:pointer;
                        border-radius: 8px;
                        letter-spacing: 1px;">Remove</button>
                        <input type="hidden" name="Item_Name" value='.$value['Item_Name'].'>
                      </form>
                    </div>
                  </div>
                </td>
                <td>
                <input class="iquantity" type="number" onchange="subtot()" value="<?php echo '.$value['Quantity'].'; ?>" min="1" max="10" style="width: 50px; height: 50px; margin: 0 28px; text-align: center;">

                </td>
                <td>
                  <div class="cart-price">
                    <p>Rs <span class="itotal">'.$value['Price'].'</span></p>
                  </div>
                </td>
              </tr>';
  
           
            
          }
         }
         ?>
      
      
   </table>
   <div class="total-price">
      <table>
         <tr>
          
            <td>Sub Total</td>
            <td></td>
            <td>
          <?php
          // $subtotal = $total + (int)$value['Price'];
        
          $subtotal = 0;
     
$value = array();
if (is_array($value)) {
  if (!array_key_exists('Price', $value)) {
    $value['Price'] = 0;
  }
  $subtotal = $subtotal + (int)$value['Price'];
} else {
  echo "Error: value is not an array";
}

           
          

$subtotal = $subtotal + $value['Price'];
            echo $subtotal
            ?></td>
           
         </tr>
         <tr>
            <td>Tax</td>
            <td>Rs <span id="tax">50</span></td>
         </tr>
         <tr>
            <td>Total</td>
            <td>Rs <span id="grand-total"><?php echo $total ?></span></td>
         </tr>
      </table>
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






    
    <!-- Java script code to toggle the menu bare -->
      <script>
       var iprice = document.getElementsByClassName('iprice');
var iquant = document.getElementsByClassName('cartiquantity');
var itotal = document.getElementsByClassName('itotal');

function subtot(){

  for(var i=0; i<iprice.length; i++){
    itotal[i].innerText = (iprice[i].value)* (iquant[i].value);

  }
}

subtot();



         var navLinks=document.getElementById("navLinks");
  
         function showMenu(){
            navLinks.style.right="0px";
            navLinks.style.display="block";
            
           
      
         }
    
         function hideMenu(){
            navLinks.style.right="-200px";
        
          }


      </script>
</body>

</html>
