<!Doctype Html>
<meta charset="UTF-8">
<title>Register</title>
<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/script.js"></script>

<body onload="moveAd(), moveText()">

<?php
if (isset($_SESSION["userID"])){
    echo "<h4>You are already Registered</h4>";
    echo "<h3>Please click <a href='index.php'>here</a>to return to main page</h3>";
}
else {
?>


<div class = "header">
    <div class="mainimage"><img src = "images/mainimage.jpg" alt="Petfood Main Image"></div>
    <div class="logo"><img src="images/logo.png" alt="Petfood Logo"></div>
    <div id="dogfp"><span style="alignment: center">The Pet Food Store</span></div>
</div>
<div id="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <?php include "category.php" ?>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a class="active">Register Now</a></li>
    </ul>
</div>

<div class="regform">
    <form method="post" action="registernow.php" class="contact-form">
        <div class="row">
            <div>
                <label>First Name:</label>
                <input class="input" name="firstname" type="text" placeholder="First Name" required>
            </div>
            <br>
            <div>
                <label>Last Name:</label>
                <input class="input" name="lastname" type="text" placeholder="Last Name" required>
            </div>
            <br>
            <div>
                <label>Username:</label>
                <input class="input" name="username" type="text" placeholder="Username" required>
            </div>
            <br>
            <div>
                <label>Password:</label>
                <input class="input" name="password" type="password" placeholder="Password" required>
            </div>
            <br>
            <div>
                <label>Full Address:</label>
                <textarea class="input" name="address" placeholder="Your Address"></textarea>
            </div>
            <br><br>
            <div>
                <label>Phone Number </label>
                <input class="input" name="phoneNumber" type="text" placeholder="Phone Number">
            </div>
            <br><br>
            <div>
                <input class="button" type="submit" value="Submit">
            </div>
        </div>

    </form>


</div>

<div><img class="regpic" src="images/register.png" alt="Register pic"</div>

</body>
<?php
}
?>
<?php include "footer.php"?>

