<?php
include("conn.php");

$sql = "SELECT * FROM track_product WHERE productname IS NOT NULL AND price IS NOT NULL ORDER BY RAND() LIMIT 16";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//        $image="unavailable.jpg";
        $image_name=$row['attachment'];
        $path1 = "http://corrad.visionice.net/bizapp/upload/product/".$image_name;
        $path2 = "images/home/unavailable.jpg";
        
        if($image_name == null){
            $image=$path2;
        }else{
//            $image=$path1;
            if (@getimagesize($path1)) {
                $image=$path1;
            } else {
                $image=$path2;
            }
        }
        echo"<div class='col-xs-6 col-sm-4 col-lg-3'> <div class='product-image-wrapper'> <div class='single-products'> <div class='productinfo text-center'> <a href='#' class='prod-desired' id='".$row['id']."' data-toggle='modal' data-target='#product-modal'><img class='backup_picture' src='".$image."' alt='".$image."'/></a> <h2>RM".$row['price']."</h2> <p class='truncate' title='".$row['productname']."'>".$row['productname']."</p><br> <a href='javascript:void' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Buy Now</a> </div> </div> <div class='choose'> <ul class='nav nav-pills nav-justified'> <li><a href='javascript:void'><i class='fa fa-plus'></i>Add to buylist</a></li> <li><a href='javascript:void'><i class='fa fa-eye'></i>View shop</a></li> </ul> </div> </div> </div>";    
    }
    echo "<div class='title text-center'><a href='#disc' onclick='discoverProduct();'><button type=\"button\" class=\"btn btn-default get\" style='margin-top:0;margin-bottom: 20px;'>Discover More</button></a></div>";
    $preloader="<div class=\"row preloader\"><div class=\"wrap-loading\"><div class=\"loading loading-4\"></div></div></div>";
    echo "<script>
            $('.prod-desired').on('click', function () {
                $('.product-details').html('".$preloader."');
                var id = $(this).attr('id');
                $.ajax({
                    type: 'POST'
                    , data: {
                        id: id
                    }
                    , url: 'php/product-detail.php'
                    , success: function (data) {
                        $('.product-details').html(data);
                    }
                });
            });
        </script>";
} else {
    echo "0 results";
}
$conn->close();
?>