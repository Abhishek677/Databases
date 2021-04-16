<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - Cookies Department Store</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style2.css">

        <style>

        </style>


    </head>
    <body>

        <div id="reg">

      <div class = "header">      <h1>Cookies Department Store</h1>

            <a href="index.php">Home</a> | 
            <a href="register.php">Register</a> | 
            <a href="login.php">Logout</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>

            <hr>
      </div>
        </div>
            <h2 id="reg">View Products</h2>



            <?php
            
            require_once 'Connection.php';

           
            $query = "select * from Product";

          
            $result = mysqli_query($conn, $query);

           
            if (mysqli_num_rows($result) > 0) {
               
                echo "<table id='products'>";
                echo "<tr><th>Serial No.</th>";
                echo "<th>Product Name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Product Price</th></tr>";

                $i = 1;    
               
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>$i</td>";
                    echo "<td>" . $row['productName'] . "</td>";
                    echo "<td>" . $row['quantity'] . "</td>";
                    echo "<td>" . $row['productprice'] . "</td></tr>";

                    $i++;
                }

                echo "</table>";
            } else {
                echo "<h3>The table is empty.</h3>";
            }
            ?>

    </body>
</html>
