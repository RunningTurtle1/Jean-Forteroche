<?php
     
     
    function getPosts ()
    {
        $db = dbconnect();
        $req = $db->query('SELECT * FROM publication');
        return $req;
    }
    
    function getPost ($publicationId)
    {
        $db = dbconnect();
        $req = $db->prepare('SELECT * FROM publication WHERE publicationId = ?');
        $req->execute(array($publicationId));
        $post = $req->fetch();
        return $post;
    }
    
    function getComments ($publicationId)
    {
        $db = dbconnect();
        $req = $db->prepare('SELECT * FROM comments WHERE publicationId = ?');
        $req->execute(array($publicationId));
        return $req;
    }
    
    function dbconnect ()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
            return $db;
        } 
        catch(Exception $e) 
        { 
            die('Erreur : '.$e->getMessage()); 
        }
    }
?>