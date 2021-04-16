<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product - Cookies Department Store</title>

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
            <h2>Add Product</h2>

            <form action="add-product1.php" method="post">
                <table class="jes">
                    <tr >
                    <td class="mes">Product Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                    <td class="mes">Quantity:</td> 
                        <td>
                            <input type="text" name="quantity">
                        </td>
                    </tr>
                    <tr>
                    <td class="mes">Price:</td> 
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p class="login"><input class="ues" type="submit" value="Add Product"></p>
                        </td>
                    </tr>
                </table>
            </form>
            
                        <?php
     
            if (isset($_REQUEST['result']))
            {

                if ($_REQUEST['result'] == "success")
                {
                    echo "<br><div id='msg'>";
                    echo "<div class='alert alert-success alert-dismissable fade in'>";
                    echo "<strong>Success!</strong> New product was added.";
                    echo "</div></div>";
                } else if ($_REQUEST['result'] == "fail")
                {
                    echo "<br><div id='msg'>";
                    echo "<div class='alert alert-danger alert-dismissable fade in'>";
                    echo "<strong>Fail!</strong> New product was not added.";
                    echo "</div></div>";
                }
            }
            ?>
            
            
            <br> <br>
            
            <p>A cookie is a baked or cooked food that is typically small, flat and sweet. It usually
                contains flour, sugar and some type of oil or fat. It may include other ingredients 
                such as raisins, oats, chocolate chips, nuts, etc.
                In most English-speaking countries except for the United States, crunchy cookies are called
                biscuits. Many Canadians also use this term. Chewier biscuits are sometimes called cookies 
                even in the United Kingdom.[3] Some cookies may also be named by their shape, such as date
                squares or bars.
               Biscuit or cookie variants include sandwich biscuits, such as custard creams, Jammie Dodgers, 
               Bourbons and Oreos, with marshmallow or jam filling and sometimes dipped in chocolate or another 
               sweet coating. Cookies are often served with beverages such as milk, coffee or tea and sometimes 
               "dunked", an approach which releases more flavour from confections by dissolving the sugars,[4]
               while also softening their texture. Factory-made cookies are sold in grocery stores, convenience
               stores and vending machines. Fresh-baked cookies are sold at bakeries and coffeehouses, 
               with the latter ranging from small business-sized establishments to multinational corporations 
               such as Starbucks.</p>
            <img src="images/img6.jpg" width="800" height="500" alt="alt"/>  <br> <br>
            
            <p>A cookie is a baked or cooked food that is typically small, flat and sweet. It usually
                contains flour, sugar and some type of oil or fat. It may include other ingredients 
                such as raisins, oats, chocolate chips, nuts, etc.
                In most English-speaking countries except for the United States, crunchy cookies are called
                biscuits. Many Canadians also use this term. Chewier biscuits are sometimes called cookies 
                even in the United Kingdom.[3] Some cookies may also be named by their shape, such as date
                squares or bars.
               Biscuit or cookie variants include sandwich biscuits, such as custard creams, Jammie Dodgers, 
               Bourbons and Oreos, with marshmallow or jam filling and sometimes dipped in chocolate or another 
               sweet coating. Cookies are often served with beverages such as milk, coffee or tea and sometimes 
               "dunked", an approach which releases more flavour from confections by dissolving the sugars,[4]
               while also softening their texture. Factory-made cookies are sold in grocery stores, convenience
               stores and vending machines. Fresh-baked cookies are sold at bakeries and coffeehouses, 
               with the latter ranging from small business-sized establishments to multinational corporations 
               such as Starbucks.</p>
                
             
            <p>A cookie is a baked or cooked food that is typically small, flat and sweet. It usually
                contains flour, sugar and some type of oil or fat. It may include other ingredients 
                such as raisins, oats, chocolate chips, nuts, etc.
                In most English-speaking countries except for the United States, crunchy cookies are called
                biscuits. Many Canadians also use this term. Chewier biscuits are sometimes called cookies 
                even in the United Kingdom.[3] Some cookies may also be named by their shape, such as date
                squares or bars.
               Biscuit or cookie variants include sandwich biscuits, such as custard creams, Jammie Dodgers, 
               Bourbons and Oreos, with marshmallow or jam filling and sometimes dipped in chocolate or another 
               sweet coating. Cookies are often served with beverages such as milk, coffee or tea and sometimes 
               "dunked", an approach which releases more flavour from confections by dissolving the sugars,[4]
               while also softening their texture. Factory-made cookies are sold in grocery stores, convenience
               stores and vending machines. Fresh-baked cookies are sold at bakeries and coffeehouses, 
               with the latter ranging from small business-sized establishments to multinational corporations 
               such as Starbucks.</p>  <br>
            <img src="images/img01.jpg" width="800" height="500" alt="alt"/>
</div>


    </body>
</html>
