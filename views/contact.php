<?php
  if(!isset($_SESSION)){
    session_start();
  }  

?>
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
  <link rel="stylesheet" href="../stylesheets/style.css">
  <link rel="stylesheet" href="../stylesheets/bootstrap.min.css"  type="text/css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="../stylesheets/bootstrap.min.js" ></script>
  <script src="../stylesheets/form.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand mb-0 h1">welcome</span>
   <div style="float: right;" style="border: 2px solid black;">
       <form action="../php/nav.php" method="post">
           <button type="submit" name="button" class="btn btn-outline-info" value="index" >retour</button>
       </form>
   </div>

</nav>

<div class="roww">
<div class="coll">
<h3>send me message</h3>
        <form name="contact_form" onsubmit="return validateForm()" method="post" action="/insert" >
            <input name="u_name" type="text" class="form-control" placeholder="Your name here"><br>

            <input name="email" class="form-control" placeholder="Email"><br>

            <textarea name="message" placeholder="Message" class="form-control" rows="5"></textarea><br>

            <input type="submit"  class="btn btn-outline-info"  value="SEND MESSAGE">
        </form>
   </div>
</div>


</body>
</html>
