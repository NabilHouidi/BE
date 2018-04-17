<?php
    if (!isset($_SESSION)){
        session_start();
        if(!isset($_SESSION['admin_login'])){
            echo'<script>
                    alert("you must be logged in");
                    window.location.replace("../views/pass.php");
                </script> ';
        }
    }
    include './template.php';
?>
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