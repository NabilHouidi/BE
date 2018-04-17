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
        echo '<button type="submit" name="button" class="btn btn-outline-info" value="view_msg">See Messages</button>';
    } 
?>

</form>

<div id="title-container" style="width:100%"  >
        <h3 style="align:center; " > Messages</h3>
    </div>

    <div class="coll">
            <?php
                global $db;
                $stmt = $db->prepare("SELECT * FROM contact");
                $stmt->execute();
                $rows = $stmt->fetchAll();
                foreach ( $rows as $row ){
                    echo '<div class="row" >
                            <div class="portfolio-child-div" >
                                <h3> Name:  ' . $row["username"] . '</h3> 
                            </div>
                            <div class="portfolio-child-div" >
                                <p> Email:' . $row["email"] . ' </p>
                            </div>
                            <div class="portfolio-child-div" >
                                <p> ' . $row["message"] . '</p> 
                            </div>
                            
                        </div> ';
                }
                

            ?>
        
    </div>

