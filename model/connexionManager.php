<?php
class connexionManager
{
    protected function dbconnect ()
    {
        try
        {
            require('model/accesscode.php'); 
            $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', $login, $password);
            return $db;
        } 
        catch(Exception $e) 
        { 
            die('Erreur : '.$e->getMessage()); 
        }
    }
}
?>