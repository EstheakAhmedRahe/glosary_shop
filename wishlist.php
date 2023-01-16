
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>wishlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="wishlist">

   <h1 class="title">products added</h1>

   <div class="box-container">

   
   <form action="" method="POST" class="box">
      
      <a href="" class="fas fa-eye"></a>
      <img src="" alt="">
      <div class="name"></div>
      <div class="price">$/-</div>
      <input type="number" min="1" value="1" class="qty" name="p_qty">
      
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
   <?php
  
      echo '<p class="empty">your wishlist is empty</p>';
   
   ?>
   </div>

   <div class="wishlist-total">
      <p>grand total : </p>
      <a href="shop.php" class="option-btn">continue shopping</a>
      <a href="#" class="delete-btn">delete all</a>
   </div>

</section>








<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>