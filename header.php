<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://github.com/skanw/HTML-Project" class="fab fa-github"></a>
            
            <select name="themeSelect" id="themeSelect">
               <option value="style">default</option>
               <option value="template1">theme 1</option>
               <option value="template2">theme 2</option>
               <option value="template3">theme 3</option>
            </select>          
         </div>
         
         
        <!-- <p><a href="login.php">Login</a> | <a href="register.php">Register</a> </p> -->
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
      
         <a href="home.php" class="logo"><img src = "images/image.png"></a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Products</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav>

         <div class="icons">
            <!--3 lined bar wont show -->
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

   <!-- custom js file link  -->
   <script src="js/theme.js"></script>
</header>