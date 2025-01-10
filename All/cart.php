<?php
session_start();

require_once("component.php");
require_once("CreateDb.php");
$db=new CreateDb("productdb","producttb");
$sb=new CreateDb("productdb","tshirt");
$bb=new CreateDb("productdb","shoe");
$ab=new CreateDb("productdb","headphones");
$cb=new CreateDb("productdb","electronics");
if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key=>$value){
            if($value["product_id"]==$_GET['Id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been removed....!!!')</script>";
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head> 
<style> 
.shopping-cart{
    padding:3% ;
}
.price_details{
    display:flex;
}
    .cart-items + .cart-items{
        padding:2% 0;
    }
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body class="bd-light">
<?php
require_once("header.php");
?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-70">
                <div class="shopping-cart">
                    <h4>My Cart </h4>
                    <hr>
                    <?php
                    $total=0;
                    if(isset($_SESSION['cart'])){
                        $product_id=array_column($_SESSION['cart'],'product_id');
                    $result=$db->getData();
                    $result_2=$sb->getData();
                    $result_3=$bb->getData();
                    $result_4=$ab->getData();
                    $result_5=$cb->getData();
                    while($row=mysqli_fetch_assoc($result,)){
                        foreach($product_id as $id){
                            if($row['ID']==$id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_actual_price'],$row['product_price'],$row['ID']);
                                $total=$total+(int)$row['product_price'];
                            }
                        }
                    }
                    while($row=mysqli_fetch_assoc($result_2)){
                        foreach($product_id as $id){
                            if($row['ID']==$id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_actual_price'],$row['product_price'],$row['ID']);
                                $total=$total+(int)$row['product_price'];
                            }
                        }
                    }
                    while($row=mysqli_fetch_assoc($result_3)){
                        foreach($product_id as $id){
                            if($row['ID']==$id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_actual_price'],$row['product_price'],$row['ID']);
                                $total=$total+(int)$row['product_price'];
                            }
                        }
                    }
                    while($row=mysqli_fetch_assoc($result_4)){
                        foreach($product_id as $id){
                            if($row['ID']==$id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_actual_price'],$row['product_price'],$row['ID']);
                                $total=$total+(int)$row['product_price'];
                            }
                        }
                    }
                    while($row=mysqli_fetch_assoc($result_5)){
                        foreach($product_id as $id){
                            if($row['ID']==$id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_actual_price'],$row['product_price'],$row['ID']);
                                $total=$total+(int)$row['product_price'];
                            }
                        }
                    }
                    }
                    else{
                        echo "<h5>Cart is Empty</h5>";
                    }
                    ?>
                    
                </div>
            </div>
            <div class="col-md-2 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price_details">
                    <div class="row-md-4 ml-3">
                        <?php
                        if(isset($_SESSION['cart'])){
                            $count= count($_SESSION['cart']);
                            echo "<h6>($count items)</h6>";
                        }else{
                            echo "<h6>Price(0 items)</h6>";
                        }
                        ?>
                        <h6>Delivery Ch.</h6>
                        <hr>
                        <h6>Amount </h6>
                    </div>
                    <div class="row-md-4 ml-3">
                        <h6>$<?php echo $total?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php echo $total?></h6>
                    </div>
                </div>
                </div>
                <a href="./Feedback.php"><button type="submit"  onClick="showAlert()"  href="./Feedback.php" class="btn btn-warning my-3"> Checkout<i class="fas fa-shopping-cart"></i></button></a>
            </div>
        
    </div> 


    <script>

function showAlert() {
    alert ("....Your Product will be delivered within 24 hour....");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>