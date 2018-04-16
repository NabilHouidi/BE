

<?php
/**
* The db.php file which initiates a connection to the database
* and gives a global $db variable for access

* @uses PDO
*/
/** edit your configuration */

$dbuser = "root";
$dbname = "BE";
$dbpassword = "root";
$dbhost = 'localhost';
$dbport = '8889';
 
/** Stop editing from here, else you know what you are doing */

global $db;

try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname; port=$dbport", $dbuser, $dbpassword);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully \n"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $username = "nabil";
    //$stmt = $db->prepare("SELECT * FROM admins WHERE username=:username");
    $stmt = $db->prepare("SELECT * FROM ADMINS");
    //$stmt->bindParam(':username', $username);
    $stmt->execute();
    $user_row=$stmt->fetch();
    echo $user_row;
