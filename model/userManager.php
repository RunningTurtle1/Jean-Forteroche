<?php
require_once('model/connexionManager.php');
class UserManager extends connexionManager
{
    public function connect ($username)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT * FROM users WHERE username = ?');
        $req->execute(array($username));
        $user = $req->fetch();
        return $user;
    }
}
?>