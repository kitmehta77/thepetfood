<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>The Pet Food Store</title>
  <link rel = "stylesheet" type = "text/css" href = "css/style.css" >
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="js/script.js"></script>
</head>
<body onload="moveAd(), moveText()">
    <div class = "header">
        <div class="mainimage"><img src = "images/mainimage.png" alt="Petfood Main Image"></div>
        <div class="logo"><img src="images/logo.png" alt="Petfood Logo"></div>
        <div id="dogfp"><span style="alignment: center">The Pet Food Store</span></div>
    </div>

<div id = "nav">
  <ul>
    <li><a class="active" href="index.php">Home</a></li>
    <?php include "category.php";?>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a href="register.php">Register Now</a></li>
  </ul>
</div>
<div id = "Main">
  <table id = "maintable">
    <tr>
      <td id="leftside">
        <div id ="sideAdv">
          <img src = "images/sideimage.png" id="sideImage">
          <p id = "text1">Welcome!</p>
          <p id = "text2">The Pet food Shop</p>
        </div>
      </td>
      <td id="middlecontent">
          <div>
              <?php include "products.php"; ?>
          </div>

      </td>

      <td id="rightside">
          <div id = "rightAdv">
            <br><br>
              <?php include "login.php"; ?><br>
<!--              --><?php //include "category.php"; ?><!--<br><br>-->


            <?php
            @session_start();
            if (isset($_SESSION["userID"])){
              ?>

                <li class="button" style="alignment: center"><a href="showCart.php">My Shopping Cart</a></li><br>
                <li class="button" style="alignment: center"><a href="yourOrder.php">My Orders</a></li>

                        <?php
              }

             ?>
            <h2 id = "quote" style="alignment: center">Free Delivery for purchase over $300</h2>
         </div>
      </td>

    </tr>
  </table>
</div>



</body>
<?php include "footer.php" ?>

</html>