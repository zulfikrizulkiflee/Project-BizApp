<?php
include("conn.php");

$sql = "SELECT * FROM track_product_category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'><a href='#'>".$row['category']."</a></h4> </div></div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>