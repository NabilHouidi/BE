<?php
     include './template.php';
     include_once '../php/db.php';
     ?>

    <form action="../php/nav.php" method="post" id="onglet">

        <button type="submit" name="button" class="btn btn-outline-info" value="profil">profil</button>
        <button type="submit" name="button" class="btn btn-outline-info" value="contact">contact</button>
        <button type="submit" name="button" class="btn btn-outline-info" value="Education">Education</button>
        <button type="submit" name="button" class="btn btn-outline-info" value="Technicals skills">Technicals skills</button>
        <button type="submit" name="button" class="btn btn-outline-info" value="hoobies">hoobies</button>
        <?php
            if(isset($_SESSION['admin_login'])){
                echo '<button type="submit" name="button" class="btn btn-outline-info" value="add_art">Add a Project </button>';
            } 
        ?>

    </form>
    
    <div id="title-container" style="width:100%"  >
        <h3 style="align:center; " >My Projects</h3>
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
