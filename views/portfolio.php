<?php
  if(!isset($_SESSION)){
    session_start();
  } 
  include_once '../php/db.php ';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>cv</title>
    <link rel="stylesheet" href="../stylesheets/style.css">
    <link rel="stylesheet" href="../stylesheets/bootstrap.min.css" type="text/css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="../stylesheets/bootstrap.min.js"></script>
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
        <?php
            if(isset($_SESSION['admin_login'])){
                echo '<button type="submit" name="button" class="btn btn-outline-info" value="add_art">ADD_ART</button>';
            } 
        ?>

    </form>
    
    <div id="title-container" class="" >
        <h1 >My Projects</h1>
    </div>

    <div class="coll">
            <?php
                global $db;
                $stmt = $db->prepare("SELECT * FROM PROJECTS");
                $stmt->execute();
                $rows = $stmt->fetchAll();
                foreach ( $rows as $row ){
                    echo '<div class="row" >
                            <div class="portfolio-child-div" >
                                <h3>' . $row["Title"] . '</h3> 
                            </div>
                            <div class="portfolio-child-div" >
                                <img src="' . $row["img"] . '" alt="Preview" class="project-image"> 
                            </div>
                            <div class="portfolio-child-div" >
                                <p> ' . $row["Content"] . '</p> 
                            </div>
                        </div> ';
                }

            ?>
        
    </div>
    
</body>