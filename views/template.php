<?php
    if(!isset($_SESSION)){
        session_start();
      }  
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>My Personal Website</title>
      <link rel="stylesheet" href="../stylesheets/style.css">
      <link rel="stylesheet" href="../stylesheets/bootstrap.min.css"  type="text/css">
    
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="../stylesheets/bootstrap.min.js" ></script>
      <script src="../stylesheets/form.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">WELCOME</span>
       <div style="float: right;" style="border: 2px solid black;">
           <form action="../php/nav.php" method="post">
               <button type="submit" name="button" class="btn btn-outline-info" value="index" >Home</button>
               <?php
                        if(isset($_SESSION['admin_login'])){
                            echo '<button type="submit" name="button" class="btn btn-outline-info" value="logout">logout</button>';
                        } else {
                            echo '<button type="submit" name="button" class="btn btn-outline-info" value="login">login</button>';
                        }
            ?>
           </form>
       </div>
    
    </nav>

   