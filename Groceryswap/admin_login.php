<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    
    <style>
      body{
        background-image:url(img/pur1.jpg);
        background-position: center;
    background-size: cover;
    
      }
        form{
          width:400px;
          height:;
          float:right;
          margin-top:20px;
          color:#fff;
           /* right:50rem; */
            padding: 0px 20px;
            border-radius: 3%;
            border: 2px solid black;
            box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
            background-image:linear-gradient(rgb(4,9,30,0.45),rgb(4,9,30,0.45)),url(img/reg2.jpg);
        }
        .card{
          width:900px;
          border-radius:10px;
    
          background-image:url(img/log2.jpg);
          background-position:center;
    background-size:cover;
        }
        a{
          text-decoration:none;
        }
        @media(max-width:1040px){
          form{
            float: left;
           
          }

    </style>
  </head>
  <body>
  
    <div class="container py-5 h-100">
        <div class="row justify-content-center mt-5"> 
          <div class="col-12 col-md-4 col-lg-6 col-xl-8">
          <div class="card">
          <div class="card-body p-5 text-center">
                <form action="loginAction.php" method="post" class="text-white" style="border-radius: 1rem">
                    <div class="mb-3  text-center" >
                        <h2  class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
                    </div>
                    <div class="mb-3">
                    Email:<br>      
                        <input type="email" class="form-control" name="l_email">
                    </div>
                   
                    <div class="mb-3">
                    Password:<br>
                        <input type="password" class="form-control" name="l_pass">
                    </div>
                    
                
                    <button type="submit" class="btn btn-outline-light btn-lg px-5" ><a href="http://localhost/Groceryswap/admin_page.php
                    " class="text-green-50 fw-bold">Login</a></button> 
                    <br> 

                    <br> <p  class="mb-0"> Don't Have Account?</p><a href="admin_register.php"  class="text-white-50 fw-bold ">create now</a>
                    <br><br>
                    
                 

                    </form>
            </div>
            </div>

        </div>
      
    </div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>