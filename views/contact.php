<?php
  if(!isset($_SESSION)){
    session_start();
  }  
  include './template.php';
?>

   <form action="../php/nav.php" method="post" id="onglet">

<button type="submit" name="button" class="btn btn-outline-info" value="profil">profil</button>
<button type="submit" name="button" class="btn btn-outline-info" value="contact">contact</button>
<button type="submit" name="button" class="btn btn-outline-info" value="Education">Education</button>
<button type="submit" name="button" class="btn btn-outline-info" value="Technicals skills">Technicals skills</button>
<button type="submit" name="button" class="btn btn-outline-info" value="hoobies">hoobies</button>
<?php
    if(isset($_SESSION['admin_login'])){
        echo '<button type="submit" name="button" class="btn btn-outline-info" value="view_msg">See Messages</button>';
    } 
?>

</form>

</nav>

<div class="roww">
<div class="coll">
<h3>send me message</h3>
        <form name="contact_form" onsubmit="return validateForm()" method="post" action="../php/message_handler.php" >
            <input name="u_name" type="text" class="form-control" placeholder="Your name here"><br>

            <input name="email" class="form-control" placeholder="Email"><br>

            <textarea name="message" placeholder="Message" class="form-control" rows="5"></textarea><br>

            <input type="submit"  class="btn btn-outline-info"  value="SEND MESSAGE">
        </form>
   </div>
</div>


</body>
</html>
