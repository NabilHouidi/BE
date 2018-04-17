<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include_once "./db.php";
    
    if (!isset($_SESSION)){
        session_start();
        if (!isset($_SESSION['admin_login'])){
            header("location: ../views/pass.php");
        }
       
    }
    
    
    if (isset($_POST)){
        $project_title = $_POST['project-title'];
        $project_description = $_POST['project-description'];
        $project_image = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName =  $_FILES['file']['tmp_name'];
        $fileSize =  $_FILES['file']['size'];
        $fileError =  $_FILES['file']['error'];
        $fileType =  $_FILES['file']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = ['jpg', 'jpeg', 'png' ];
        if(in_array($fileActualExt, $allowed)){
            if ($fileError === 0){
                if ($fileSize < 300000000){
                    $fileNameNew = uniqid('', true) . '.' . $fileActualExt;
                    $fileDestination = '../uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $path = '../uploads/' . $fileNameNew;
                    insert_into_db($project_title,$project_description, $path);
                    header('location: ../views/portfolio.php');
                    
                
                }
                else {
                    echo "write JS pop error here( file too big )";
                }
            } 
            else{
                echo "write JS pop error here ( upload error )";
            }
        } 
        else{
            echo "write JS pop error here (ext not allowed)";
        }



    }
    else {
        echo "write JS pop error here ( post is not set )";
        }
    
    function insert_into_db($title, $description, $image_path){
        $title = prepare_data($title);
        $description = prepare_data($description);
        $image_path = prepare_data($image_path);

        global $db;
        $stmt = $db->prepare("INSERT INTO PROJECTS (Title, Content, img) VALUES (?,?,?)");

        $stmt->bindParam(1,$title);
        $stmt->bindParam(2,$description);
        $stmt->bindParam(3,$image_path);
        $stmt->execute();

    }
    function prepare_data ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
   

?>

