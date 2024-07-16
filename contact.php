<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="CSS/header.css"/>
    <link rel="stylesheet" href="CSS/contact.css"/>

</head>
<body>
    <!-- header -->

    <?php
        include "includes/header.php";
    ?>

    <div class="contact">

        <div class="contactus">
            <h1>#Let's Connect</h1>
            <p>For any query you can contact us. We will always available for you...</p>
        </div>

        <div class="contactMe">
            <div class="contactText">
                <h1>Visit Our office or Contact <br>
                    Us Today</h1>
                <p>Adress : Jameshedpur,Jharkhand,India</p> 
                <p>Contact : trends@gmail.com</p> 
                <p>Adress : 123456789</p> 
            </div>
            <img src="https://whereismap.net/wp-content/uploads/2022/01/Map-of-Jamshedpur-1024x450.jpg" alt="">
        </div>

        <!-- Contact Form -->

        <div class="form">
            <h1>Connect with US. Fill Form</h1>
            <input type="text" placeholder="Enter your First Name"> <br>
            <input type="text" placeholder="Enter your Last Name"> <br>
            <input type="text" placeholder="Enter your Email"> <br>
            <input type="text" placeholder="Enter your Number"> <br>
            <input type="text" placeholder="Enter your Address"> <br>
            <button>Submit</button>
        </div>
    </div>
</body>
</html>