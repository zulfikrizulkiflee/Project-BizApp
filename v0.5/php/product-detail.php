<?php
include("conn.php");

$id = $_POST['id'];
//$id = 21909;
//$sql = "SELECT * FROM track_product WHERE id=".$id." LIMIT 1";
$sql = "SELECT track_user.pid AS userid,track_user.nama AS namaseller,track_product.pid AS barangid,track_product.id,track_product.attachment,track_product.productname,track_product.price FROM track_user,track_product WHERE track_user.pid = track_product.pid AND track_product.id = ".$id." LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//        $image="unavailable.jpg";
        $image_name=$row['attachment'];
        $path1 = "http://corrad.visionice.net/bizapp/upload/product/".$image_name;
        $path2 = "images/home/unavailable.jpg";
        $sharepath="images/product-details/share.png";
        
        if($image_name == null){
            $image=$path2;
        }else{
            //$image=$path1;
            if (@getimagesize($path1)) {
                $image=$path1;

            } else {
                $image=$path2;
            }
        }
        echo"<div class='col-sm-4'> <div class='view-product'> <img src='".$image."' alt='' /> </div></div> <div class='col-sm-8'> <div class='product-information'> <!--/product-information--> <h2>".$row['productname']."</h2> <p>Product ID: ".$row['id']."</p>  <span> <span>RM".$row['price']."</span> <label>Quantity:</label> <input type='number' min='1' value='1' />  </span> <p><b>Availability:</b> In Stock</p> <!-- <p><b>Condition:</b> New</p>--> <p><b>Penjual:</b> <a href='#' style='color:#FE980F;font-weight:bold'>".$row['namaseller']."</a></p> <div class='choose'> <ul class='nav nav-pills nav-justified'><li style='text-align:center'><button type='button' class='btn btn-fefault cart' style='margin-bottom: 0;margin-left: 0; '> <i class='fa fa-shopping-cart'></i> Buy Now! </button></li> <li><a href='javascript:void'><i class='fa fa-plus'></i>Add to buylist</a></li>  </ul> </div><a href=''><img src='".$sharepath."' class='share img-responsive' alt='' /></a><br><h2>Butiran Produk</h2><p style='text-align:justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> </div> <!--/product-information--> </div>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>