<?php
  if(!isset($_SESSION)){
    session_start();
  }  

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cv</title>
  <link rel="stylesheet" href="../stylesheets/style.css">
  <link rel="stylesheet" href="../stylesheets/bootstrap.min.css"  type="text/css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="../stylesheets/bootstrap.min.js" ></script>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand mb-0 h1">welcome</span>
   <div style="float: right; margin-right: 3%;" style="border: 2px solid black;">
    <form action="../php/nav.php" method="post" id="onglet">

    <button type="submit" name="button" class="btn btn-outline-info" value="login">login</button>
    </form>
   </div>
</nav>

<form action="../php/nav.php" method="post" id="onglet">

    <button type="submit" name="button" class="btn btn-outline-info" value="profil">profil</button>
    <button type="submit" name="button" class="btn btn-outline-info" value="contact">contact</button>
    <button type="submit" name="button" class="btn btn-outline-info" value="Education">Education</button>
    <button type="submit" name="button" class="btn btn-outline-info" value="Technicals skills">Technicals skills</button>
    <button type="submit" name="button" class="btn btn-outline-info" value="hoobies">hoobies</button>

</form>

<div class="row">
<div class="col">
    <h3>Profile</h3>
       <p>Personal Details</p>
    <div>
      <img class="image" src="../stylesheets/professional.jpg">
    </div>
    <p>Name: Foulen ben Foulen </p>
    <br>
    <p>Date of Birth:01/01/2001</p>
    <br>
    <p>Adresse: New york, Manhaten, NY 283487, US</p>
    <br>
    <p>(251) 546-9442</p>
    <br>
    <br>
    <div style="background-color: rgba(190,190,190,0.5);margin: 2%;
                border-radius: 25px;
                color: black;padding: 3%;">
    <a href="#">Email: foulen.b.foulen@ensi.tn
    </a>
    </div>
    <br>
    <br>
    <div style="background-color: rgba(190,190,190,0.5);margin: 2%;
                border-radius: 25px;
                color: black;padding: 3%;">
    <a href="#">website: www.falten.com
    </a>
    </div>
    <br>
    <br>

</div>

   <div style="margin-top: 1%">
   <div class="col" style="margin-left: 1.5%">
   <h3>Personal Viewpoints</h3>
   <fieldset class="field">
        <legend></legend>
        Objectives: <br> 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
          Proin eget justo nec elit hendrerit sodales.
           Vestibulum eu lacinia est, in volutpat nulla.
      </fieldset>
</div>
<div class="col">
<h3>Education</h3>
      <fieldset class="field">
        <legend></legend>
        2001 &nbsp;&nbsp; Tri-State Area Elementary school <br>
        2012 &nbsp;&nbsp; High School Diploma <br>
        2030 &nbsp;&nbsp; Lorem Ipsum dolor sit amet <br>

      </fieldset>
</div>
      <div class="col">
      <h3>Technicals skills</h3>
            <fieldset class="field">
        <legend></legend>
        <p style="font-size: 24px;">HTML &nbsp;&nbsp; * * * *</p>
        <p style="font-size: 24px;">CSS &nbsp;&nbsp; * * * </p>
        <p style="font-size: 24px;">C &nbsp;&nbsp; * * </p>
      </fieldset>
</div>
<div class="col">
<h3>Personal skills</h3>      
      <fieldset class="field">
        <legend></legend>
        <ul>
          <li> Helpful</li>
          <li> Positive Attitude</li>
          
        </ul>
      </fieldset>
</div> 
<div class="col"> 
<h3>Languages</h3>
      <fieldset class="field">
        <legend></legend>
        <p style="font-size: 24px;">French &nbsp;&nbsp;&nbsp; * * *</p>
        <p style="font-size: 24px;">English &nbsp;&nbsp; * * * *</p>
      </fieldset>
</div>
<div class="col">
<h3>Hobbies</h3>
      <br>
      <br>
      <fieldset class=field>
        <legend></legend>
        <ul>
          <li>Sleeping</li>
          <li>Binging</li>
        </ul>
      </fieldset>
</div>

   </div>
  </div>
  <?php
    if ( isset($_SESSION)){
      print_r($_SESSION);
    }
    ?>
   </body>  
  
</html>

