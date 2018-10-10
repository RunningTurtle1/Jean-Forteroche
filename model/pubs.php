<?php
require_once("model/connexionManager.php");
class PublicationManager extends connexionManager
{     
    public function getPosts ()
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT * FROM publication');
        return $req;
    }
    
    public function getPost ($publicationId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT * FROM publication WHERE publicationId = ?');
        $req->execute(array($publicationId));
        $post = $req->fetch();
        return $post;
    }

    public function deletePost ($publicationId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('DELETE FROM publication WHERE publicationId = ?');
        $req->execute(array($publicationId));
    }
    
    public function addPub ()
    {
        $db = $this->dbconnect();
        $req = $db->prepare('INSERT INTO publication(publicationTitle, publicationText, publicationDate) VALUE (?, ?, NOW())');
        $req->execute(array($_POST['title'], $_POST['text']));
    }

    public function getComments ($publicationId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT * FROM comments WHERE publicationId = ?');
        $req->execute(array($publicationId));
        return $req;
    }
}
?>