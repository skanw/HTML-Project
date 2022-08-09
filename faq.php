<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>FAQs</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!--Ion Icons link-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link id= "themeStylesheet" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="heading">
        <h3>FAQs</h3>
        <!-- <p> <a href="home.php">home</a> / FAQ </p> -->
        </div>
        
        <section>
            <div class="faqContainer">
                
                <div class="dropdown">
                    <div class="dropdown-item" id="question1">
                        <a class="dropdown-link" href="#question1">
                            What is "Open Source" Library?
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="answer">
                            <p>Open Source Libraries can be freely accessed, used, and shared by users.</p>
                        </div>
                    </div>
     
                    <div class="dropdown-item" id="question2">
                        <a class="dropdown-link" href="#question2">
                            Can I sell a book from WinBooks?
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="answer">
                            <p>No, WinBooks is not a bookstore. We don't offer any physical books.</p>
                        </div>
                    </div>

                    <div class="dropdown-item" id="question3">
                        <a class="dropdown-link" href="#question3">
                            How do I search for a book on WinBooks?
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="answer">
                            <p>You can enter the name of the book and the author's name in the search bar.
                                If you still don't see the book, that means the book has not been added to the library.</p>
                        </div>
                    </div>

                    <div class="dropdown-item" id="question4">
                        <a class="dropdown-link" href="#question4">
                            Can I add a book to WinBooks?
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="answer">
                            <p>Unfortunately, we have not added that feature to our website yet.</p>
                        </div>
                    </div>

                    <div class="dropdown-item" id="question5">
                        <a class="dropdown-link" href="#question5">
                            Can I add books to my profile?
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="answer">
                            <p>Yes, absolutely. You can see an "add to profile" button when you click on the book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>
</html>