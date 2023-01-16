<?php

include 'config.php';

?>
<link rel="stylesheet" href="css/component.css">
<style>
   @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@100;300;400;500&display=swap');

 
:root{
   --meganda:rgb(237, 21, 100);
    --maroon:#f6073f;
    --orange:#ff7800;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
   --green:#27ae60;
   --red:#e74c3c;
   --white:#fff;
   --light-bg:#f6f6f6;
}

*{
   font-family: 'poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
 border:none;
   text-decoration: none;
   color:var(--black);
}

/* *::selection{
   background-color: var(--green);
   color:var(--white);
} */

*::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--green);
}

body{
   background-color: var(--light-bg);
   /* padding-bottom: 6.5rem; */
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 6.5rem;
}

section{
   padding:3rem 2rem;
   max-width: 1200px;
   margin:0 auto;
}

.disabled{
   user-select: none;
   pointer-events: none;
   opacity: .5;
}

.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
   margin-top: 1rem;
   border-radius: .5rem;
   color:var(--white);
   font-size: 2rem;
   padding:1.3rem 3rem;
   text-transform: capitalize;
   cursor: pointer;
   text-align: center;
}

.btn{
   background-color: var(--maroon);
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--green);
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
}


*/
.header{
     position: fixed; 
    top: 0; left: 0;right: 0;
    z-index: 1000;
    /* display: flex; */
    align-items: center;
    justify-content: space-between;
    background: #fff;
    box-shadow: var(--box-shadow);

}

 .header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: var(--black);
}
    .header .logo i{
        color: var(--maroon);
    }


.header{
   background: var(--white);
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   box-shadow: var(--box-shadow);
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
   position: relative;
}


.header .flex .navbar a{
   font-size: 1.7rem;
        margin: 0 1rem;
        color: var(--black);
    
}

.header .flex .navbar a:hover{
   text-decoration:none;
   color:var(--maroon);
}

.header .flex .icons > *{
   height: 4.5rem;
        width: 4.5rem;
        line-height: 4.5rem;
        border-radius: .5rem;
        background: #eee;
        color:var(--black);
        font-size: 2rem;
        margin-right: .3rem;
        cursor: pointer;
        text-align: center;
}

.header .flex .icons > *:hover{
   background-color:var(--maroon);
   color:#fff;
}

.header .flex .icons a span,
.header .flex .icons a i{
   
   color:var(--light-color);
}

.header .flex .icons a:hover span,
.header .flex .icons a:hover i{
   background:var(--maroon);
   color:#fff;
}

.header .flex .icons a span{
   font-size: 2rem;
} 

#menu-btn{
   display: none;
}

.header .flex .profile{
   position: absolute;
   top:120%; right:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   width: 33rem;
   display: none;
   animation: fadeIn .2s linear;
}

.header .flex .profile.active{
   display: inline-block;
}

.header .flex .profile img{
   height: 15rem;
   width: 15rem;
   margin-bottom: 1rem;
   border-radius: 50%;
   object-fit: cover;
}

.header .flex .profile p{
   padding:.5rem 0;
   font-size: 2rem;
   color:var(--light-color);
}

.update-profile form{
   max-width: 70rem;
   margin: 0 auto;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.update-profile form .flex{
   display: flex;
   gap:1.5rem;
   justify-content: space-between;
}

.update-profile form img{
   height: 20rem;
   width: 20rem;
   margin-bottom: 1rem;
   border-radius: 50%;
   object-fit: cover;
}

.update-profile form .inputBox{
   text-align: left;
   width: 49%;
}

.update-profile form .inputBox span{
   display: block;
   padding-top: 1rem;
   font-size: 1.8rem;
   color:var(--light-color);
}

.update-profile form .inputBox .box{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   border:var(--border);
   border-radius: .5rem;
   margin:1rem 0;
   background-color: var(--light-bg);
}
.log-btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: ;
    text-align:center;
    transition:.5s;
}
.log-btn:hover{
    background: var(--maroon);
   
}

.log-btn p:hover{
color:#fff;
}



/* media queries  */


@media (max-width:991px){

   html{
      font-size: 55%;
   }
   
}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
   }

   .header .flex .navbar{
      border-top: var(--border);
      border-bottom: var(--border);
      background-color: var(--white);
      position: absolute;
      top:99%; left:0; right:0;
      transition: .2s linear;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .flex .navbar a{
      display: block;
      margin:2rem;   
   }

   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }

   .update-profile form .flex .inputBox{
      width: 100%;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

   .title{
      font-size: 3rem;
   }
   
} 
</style>
<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo"><i class="fas fa-shopping-basket"></i>GrocerySwap</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="shop.php">shop</a>
         <a href="orders.php">orders</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact</a>
      
         <a href="#" class="log-btn"><p>logout</p> </a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="search_page.php" class="fas fa-search"></a>
        
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>()</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>()</span></a>
      </div>

      <div class="profile">
        
         <img src="" alt="">
         <p><?echo $name; ?></p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
        
      </div>

   </div>

</header>