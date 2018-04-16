<?php



// importer la BD
include_once './db.php';

/**
 * Classe principale d'admin
 */
class itg_admin {
    static $abs_path; //dossier racine du site
    var $username = ""; 

    var $password = "";
    var $remember ="";

    

    public function __construct(){
        session_start();
        
        self::$abs_path = dirname(dirname(__FILE__)); 
        if ($_POST){
            $this->username = $this->prepare_data($_POST["username"]);
            $this->password = $this->prepare_data($_POST["pass"]);
            //$this->remember = $this->prepare_data($_POST["remember"]);
        }
        }
        public function _login_action() {
        
            if(!isset($this->username) || $this->username == '' || !isset($this->password) || $this->password == '') {
                //données insuffisantes, retour vers login
                
                header ("location: ../views/contact.html");
            }
           
            //hasher mot de passe en SHA1 puis en MD5
            $this->password = md5(sha1($this->password));
            echo $this->_check_db($this->username, $this->password);
            die();
            // vérifier si la cobinaison existe dans la base
            if($this->_check_db($this->username, $this->password)){
                //ready to login
                
               // $_SESSION[ 'admin_login' ] = $this->username;
                /*if (isset($this->remember)){
                    //si "Se souvenir de moi" est activée, créer cookie
                    //effectuer un cookie valable 1 jour, cad 1*24*60*60 secondes
                    setcookie('username', $this->username, time() + 1*24*60*60);
                    setcookie('password', $this->password, time() + 1*24*60*60);
                } else {
                    // détruire les cookies prédéfinies
                    setcookie('username', '', time() - 1*24*60*60);
                    setcookie('password', '', time() - 1*24*60*60);
                }*/
                
                header("location: ../views/index.html");
            } else {
                header("location : ../views/pass.html");
            }
            die();
        }
         private function _check_db($username, $password){
        global $db;
        //obtient les données de la base
        $stmt = $db->prepare("SELECT * FROM admins WHERE username=:username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user_row=$stmt->fetch();
        echo $user_row;
        die();
        // compare les données entrées ave ceux de la base
        if( md5($user_row['password']) == $password  &&  isset($user_row) ){
            
            return true;
        }
        else
            return false;
    }
    private function prepare_data ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    }
    
