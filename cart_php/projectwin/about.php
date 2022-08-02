<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link id= "themeStylesheet" rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <?php include 'header.php'; ?>    
        <div class="heading">
            <h3>About us</h3>
        </div>
        <section class="about">
            <div class="flex">
                <div class="image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Catherine_M._Wood_Old_books.jpg" alt="WinBooks" height="400" width="">
                </div>
                <div class="content">
                    <h3>About us</h3>
                    <p>WinBooks is an online ecommerce bookstore with various books from different genres. <br>
                        Users can view a book of their choice and decide to buy it if they please as we offer several methods of payment and delivery services. 
                          <br> You can keep track of your books and orders, as well as organize them in your profile. You are welcome to leave a review of the site or contact us about any issues you may have with the contact us page </p>
                    <a href="contact.php" class="btn">Contact us</a>
                </div>
            </div>
        </section>
        <section class="reviews">
            <h1 class="title">Reviews</h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/image1.jpg" alt="img1">
                    <p>Extremely polished website design!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Thomas Blair</h3>
                </div>

                <div class="box">
                    <img src="images/image2.jpg" alt="img2">
                    <p>WinBooks provides books at very affordable prices!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Jin Hao</h3>
                </div>

                <div class="box">
                    <img src="images/image3.jpg" alt="img3">
                    <p>They have a good collection of books.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Jane Vance</h3>
                </div>

                <div class="box">
                    <img src="images/image4.jpg" alt="img4">
                    <p>The website is easy to navigate!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>June Summers</h3>
                </div>

                <div class="box">
                    <img src="images/image5.jpg" alt="img5">
                    <p>Seameless checkout process!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Gabriel Walker</h3>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
        
    </body>
</html>