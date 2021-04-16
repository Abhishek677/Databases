<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register - Cookies Department Store </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style2.css">
        
        <style>

        </style>
        
    </head>
    <body>
        <div id="reg">
            <?php
                require_once 'header.php';
            ?>
        
            <h2>Register</h2>

            <form action="register1.php" method="post">
                <table>
                    <tr>
                        <td class="kes">Username:</td>
                        <td class="kes"><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td class="kes">Password:</td>
                        <td class="kes"><input type="password" name="password" required></td>
                    </tr>
                    <tr class="kes">
                        <td class="login" colspan="2"><input class="ues" type="submit" value="Register"></td>
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
                        echo "<strong>Success!</strong> New user was registered.";
                        echo "</div></div>";
                    }
                    else if ($_REQUEST['result'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<strong>Fail!</strong> New user was not registered.";
                        echo "</div></div>";
                    }
                    else if ($_REQUEST['result'] == "userexists")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<strong>Fail!</strong> This username is already taken up. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
            <br> <br>
            <img src="images/img5.jpg" width="1100" height="500" alt="alt"/>   <br>   <br>     

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
               such as Starbucks.</p><br>
             <img src="images/img4.jpg" width="1100" height="500" alt="alt"/> <br>  <br>  
             
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
               such as Starbucks.</p>
</div>
           

    </body>
</html>
