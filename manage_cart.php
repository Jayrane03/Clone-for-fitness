<?php
session_start();
// session_destroy();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['add-to-cart'])) {
    
        if(isset($_SESSION['cart'])) {
            $my_items = array_column($_SESSION['cart'], 'Item_Name');
           
            
            if(in_array($_POST['Item_Name'], $my_items)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href = 'store.php';
                      </script>";
            } else {
                $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'], 'image'=>$_POST['image'], 'Price'=>$_POST['Price'], 'Quantity'=>'1');
                echo "<script>
                        alert('Item Added');
                        window.location.href = 'store.php';
                      </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_Name'], 'image'=>$_POST['image'], 'Price'=>$_POST['Price'], 'Quantity'=>'1');

            echo "<script>
                    alert('Item Added');
                    window.location.href = 'store.php';
                  </script>";
        }
    }


    if(isset($_POST['Remove_Item'])) 
    {
        // 'foreach($_SESSION['cart'] as $key => $value){
        //     print_r($value['Item_Name']);
    
        //     if($value['Item_Name']==$_POST['Item_Name'])
        //     {
        //         unset($_SESSION['cart'][$key]);
        //         $_SESSION['cart']=array_values($_SESSION['cart']);
        //         echo "
        //         <script>
        //         alert('Item Removed');
        //         window.location.href = 'cart.php';
        //         </script>";
        //     }
        // }

        foreach($_SESSION['cart'] as $key => $value){
            print_r($value['Item_Name']);

            if($value['Item_Name']==$_POST['Item_Name']){


                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"
                <script>
                alert('Item Removed');
                window.location.href = 'cart.php';
                </script>
                
                ";

            }
            else{
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"
                <script>
                alert('Item Removed');
                window.location.href = 'cart.php';
                </script>
                
                ";

            }
          
        
        }
    }
}
?>