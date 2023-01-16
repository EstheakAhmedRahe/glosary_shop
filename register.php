<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
 
  <body>
    <style> body{
       
        background:url(img/pur1.jpg);
        background-position: center;
    background-size: cover;
      }
        form{
          width:400px;
          height:580px;
          float:right;
          margin-top:20px;
           right:50rem;
            padding: 0px 20px;
            border-radius: 3%;
            border: 2px solid black;
            box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
            background-image:url(img/reg1.jpg);
            background-position:center;
    background-size:cover;
       
          }
        .card{
          width:900px;
          border-radius:10px;
    
          background-image:linear-gradient(rgb(4,9,30,0.05),rgb(4,9,30,0.051)),url(img/reg.jpg);
          background-position:center;
    background-size:cover;
        }
        a{
          text-decoration:none;
          color:#000;
        }
        h3{
          font-size:22px;
        }
        
        @media(max-width:1040px){
          form{
            float: left;
            background-image:linear-gradient(rgb(4,9,30,0.65),rgb(4,9,30,0.65)),url(img/reg1.jpg);
            color:#fff;
          }
          .btn{
            background:#fff;
          }
        }
        p{
          margin:0;
          font-weight:400;

        }
        a{
          text-decoration:none;
        
        }
        
        
    </style>
  </head>
  <body>
    <div class="container-fluid  h-100">
        <div class="row justify-content-center mt-5"> 
            <div class="col-md-4 col-md-6 col-sm-12">
            
            <div class="card">
          <div class="card-body p-5 text-center">
                <form action="insert.php" method="post" class=" text-black"> <br>
                    <div class="mb-1 text-center" >
                      <p>Looks Like You're New here!</p>
                        <h3 class="text-denger"> Register Now</h3>
                    </div>
                    <div class="mb-3">
                    Username:<br>      
                    <input type="text" name="ruser_name" class="form-control" placeholder="enter your name" required>
                    </div>
                    <div class="mb-1">
                    E-mail:<br>
                    <input type="email" name="email" class="form-control" placeholder="enter your email" required>
                    </div>
                    <div class="mb-1">
                    Password:<br>
                        <input type="password" class="form-control" name="rpassword"  placeholder="new password" required>
                    </div>
                    <div class="mb-1">
                    Confirm Password:<br>
                        <input type="text" class="form-control" name="rcon_pass" placeholder="confirm password" required>
                    </div>
                    <div class="mb-1">
                    Phone:<br>
                        <input type="text" class="form-control" name="rphone"  value="+880" required>
                    </div>
                    
                    <div class="mb-1">
                    Photo:<br>
                    <input type="file" name="rimage" class="box" required accept="image/jpg, image/jpeg, image/png">
                  <br>
                   <br> <button type="submit" class="btn btn-outline-dark btn-md px-5 "> Submit</button> 
                   <br> Already Registered?<a href="login.php"  class="text-dark-50 fw-bold  ">Login here</a>

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