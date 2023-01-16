<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <div class="box">
         <p> user id : <span></span> </p>
         <p> placed on : <span></span> </p>
         <p> name : <span>$</span> </p>
         <p> email : <span></span> </p>
         <p> number : <span>$</span> </p>
         <p> address : <span></span> </p>
         <p> total products : <span></span> </p>
         <p> total price : <span>$/-</span> </p>
         <p> payment method : <span>$</span> </p>
         <form action="" method="POST">
            <input type="hidden" name="order_id" value="">
            <select name="update_payment" class="drop-down">
               <option value="" ></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <div class="flex-btn">
               <input type="submit" name="update_order" class="option-btn" value="udate">
               <a href="admin_orders.php?delete=<?= $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
            </div>
         </form>
      </div>
      <?php
         
         echo '<p class="empty">no orders placed yet!</p>';

      ?>

   </div>

</section>












<script src="js/script.js"></script>

</body>
</html>