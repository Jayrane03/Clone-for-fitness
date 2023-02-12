<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
    <script src="https://use.fontawesome.com/0787724f3c.js"></script>
    <link rel="stylesheet" href="indexx.css">
    <title>Contact Page</title>
</head>
<body>
    <style>
     *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;

     }
     body{
        width: 100%;
        height: 100vh;
        overflow-y: auto;
      
        
    }
   #nav ul li a{
    color: black
   }
  

     @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
     .container{
        position: relative;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        padding: 22px 100px;
        box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
     }
     .container::after{
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(./Images/bg_home.jpg) no-repeat;
        background-size: cover;
        filter: blur(5px);
        z-index: -1;

     }
     .contact_box{
        max-width: 850px;
       
        display: grid;
        grid-template-columns: repeat(2,1fr);
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: azure;

     }
     .left{
        height: 100%;
        width: 100%;
        background: url(./Images/bg_home.jpg)no-repeat center;
        background-size: cover;

     }
     .right{
        padding: 30px 45px;
        
        color: aquamarine;

     }
     h2{
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 20px;
     }
     h2::after{
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        height: 4px;
        width: 50px;
        border-radius: 2px;
        background-color: blueviolet;

     }
     .field{
        width:100% ;
        padding: 0.5rem 1rem;
        outline: none;
        border: 2px solid rgba(0,0,0,0);
        background-color: rgba(230,230,230,0.6);
        font-size: 1.1rem;
        margin-bottom: 25px ;
        transition: .3s;
        border-radius: 5px;
        text-align: center;
        
    }
    .field:hover{
        background-color: rgba(0,0,0,0.1);
        

    }
    .field:focus{
        background: #fff;
        border: 2px solid rgba(30,85,250,0.47)
    }
    .fa-shopping-cart{
      color: black;
    }
    .area{
     min-height: 155px;

    }
    .send_bt{
        width: 100%;
        padding: 0.5rem 1rem;
        font-size: 1.1rem;
        background-color: blueviolet;
        cursor: pointer;
        outline: none;
        border: none;
        transition: .3s;
        color: #fff;
        border-radius: 7px;
    }
  
   @media screen and (max-width:880px){
    .contact_box{
        grid-template-columns: 1fr;
        justify-content: center;
        align-items: center;
       width: 80vw;
       height: 80vh;
  
    }
    .field{
        font-size: 13px;
        width: 200px;
    }
    .left{
        position: absolute;
        display: none;
    }
    



   }
     
    </style>

 
        <nav id="nav">
        <a href="index.html"><img src="./Images/logo.jpg" alt=""></a>
         <div class="nav-links" id="navLinks">
            <i class="fa fa-times menu_icons" onclick="hideMenu()"></i>
            <ul>
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./about.php">ABOUT</a></li>
                <li><a href="./blog.php">BLOG</a></li>
                <li><a href="exercise.php">EXERCISE</a></li>
                <li><a href="./contact.php">CONTACT</a></li>
                <li><a href="./store.php">STORE</a></li>
                <li><a href="./login_page.html">LOGIN</a></li>
                <li><a href="./cart.php"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
         </div>   
         <i class="fa fa-bars menu_icons"  onclick="showMenu()"></i>
    </nav>
    
    
    

    

  <div class="container">
    <div class="contact_box">
        <div class="left">
            
        </div>
        <div class="right">
            <h2>Contact Us</h2>
            <input type="text" class="field"placeholder="Your Name">
            <input type="email"class="field" placeholder="Your Email">
            <input type="text" class="field"placeholder="Your Phone">
            <textarea class="field area"rows="7" cols="5" placeholder="Message"></textarea>
            <button class="send_bt" onclick="sendmail()">Send</button>
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

<script src="./Images/Products/scrollreveal.min.js"></script>
 <script> 
    function sendmail(){
      var  inputField= document.getElementsByTagName("input")
     if(inputField=" "){
        alert("Enter your details first")

     }
     else{
        alert("Your message is send successfully !")
     }
    }
    var navLinks=document.getElementById("navLinks");

    function showMenu(){
       navLinks.style.right="0";
    }

    function hideMenu(){
       navLinks.style.right="-240px";
    }
        
    const sr = ScrollReveal({
      origin : "top", 
      distance : "80px",
      duration : 1500,
      delay : 300,
    
})

sr.reveal(`.left`)
sr.reveal(`.right`,{origin:"bottom"})

 </script>
</body>
</html>