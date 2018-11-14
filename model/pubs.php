<?php
require_once("model/connexionManager.php");
class PublicationManager extends connexionManager
{     
    public function showPosts ($cPage)
    {
        $db = $this->dbconnect();
        
        $req =$db->query('SELECT COUNT(publicationId) as nbArt FROM publication'); 
        $data = $req->fetch();
        $nbArt = $data['nbArt'];
        $perPage = 3;
        $nbPage = ceil($nbArt / $perPage);
        $var = (($cPage - 1) * $perPage);
        $req = $db->prepare('SELECT * FROM publication ORDER BY publicationId DESC LIMIT :cPage , :perPage ');
        $req->bindValue(':cPage', $var, PDO::PARAM_INT);
        $req->bindValue(':perPage', $perPage, PDO::PARAM_INT);
        $req->execute();
        $posts = [];
        while ($data = $req->fetch())
        {
            $posts[] = ['post'=>$data];
        }
        $req->closeCursor();
        return $posts;
    }

    public function nbPages ()
    {
        $db = $this->dbconnect();
        
        $req =$db->query('SELECT COUNT(publicationId) as nbArt FROM publication'); 
        $data = $req->fetch();
        $nbArt = $data['nbArt'];
        $perPage = 3;
        $nbPage = ceil($nbArt / $perPage);
        return $nbPage;
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
    
    public function editPost ($publicationId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('UPDATE publication SET publicationTitle = ?, publicationText = ? WHERE publicationId = ?');
        $req->execute(array($_POST['title'], $_POST['text'], $publicationId));
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
        $comments = $req->execute(array($_GET['publicationId']));
        $comments = [];
        while ($data = $req->fetch())
        {
            $comments[] = ['comment'=>$data];
        }
        $req->closeCursor();
        return $comments;
    }
}
?>