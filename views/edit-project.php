<?php
    if (!isset($_SESSION)){
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



<div id="overlay" class="coll">
    <form action="../php/add_project.php" method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="Project-name">Titre Du Projet</label>
            <input type="text" class="form-control"  id="project-title" name="project-title">
        </div>
        <div class="input">
            <label for="Description">Décriver votre projet<br></label>
            <textarea class="form-control" value="project-description" id="project-desription" name="project-description" rows="20" cols="100"></textarea>
        </div>
        <div class="input">
            <input type="file" name="file">
        </div>
        <button type="submit" class="btn btn-outline-info">Enregistrer</button>
    </form>
</div>