<?php
    include_once "./db.php";
    if($_POST){
        $uname = prepare_data($_POST["u_name"]);
        $email = prepare_data($_POST["email"]);
        $message = prepare_data($_POST["message"]);

        global $db;
        $stmt = $db->prepare("INSERT INTO CONTACT (username, email, message) VALUES (?,?,?)");
        $stmt->bindParam(1,$uname);
        $stmt->bindParam(2,$email);
        $stmt->bindParam(3,$message);
        $stmt->execute();
        echo '<script>
                alert("thank you for contacting me");
                window.location.replace("../views/index.php");
            </script>';
        

    }
    function prepare_data ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>