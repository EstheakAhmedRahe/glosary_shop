<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<style>
   
 .p-category{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:1.5rem;
    justify-content: center;
    align-items: flex-start;
 }
 
 .p-category{
    padding-bottom: 0;
 }
 
 .p-category a{
    padding:1.5rem;
    text-align: center;
    border:var(--border);
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    font-size: 2rem;
    text-transform: capitalize;
    color:var(--black);
 }
 
 .p-category a:hover{
    background-color: var(--black);
    color: var(--white);
 }
</style>
<body>
   
<?php include 'header.php'; ?>

<section class="p-category">

   <a href="#">fruits</a>
   <a href="#">vegitables</a>
   <a href="#">fish</a>
   <a href="#">meat</a>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

  

</section>








<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>