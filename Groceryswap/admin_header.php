
<style>
   @import url('css/component.css');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@100;300;400;500&display=swap');

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
  

.header .flex .logo span{
   color: rgb(199, 5, 119);
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







.header .flex .navbar a:hover{
   text-decoration: none;
   color:rgb(199, 5, 119);

}
.log-btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    cursor: pointer;
    background:rgb(255, 217, 231);
    text-align:center;
    transition:.5s;
}
.log-btn:hover{
    background: rgb(199, 5, 119);
   
}
.log-btn a{
   text-decoration:none;
}
.log-btn p:hover{
 
color:#fff;
} 


</style>
<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">messages</a>
         <a href="admin_login.php" class="log-btn"><p>logout</p> </a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         
         <img src="" alt="">
         <p></p>
         <a href="admin_update_profile.php" class="btn">update profile</a>
         <a href="admin_login.php" class="delete-btn">logout</a>
         </div>
      </div>

   </div>

</header>