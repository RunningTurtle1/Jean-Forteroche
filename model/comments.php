<?php
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

    function showComments ()
    {
        $db = dbconnect();
        $req = $db->prepare('SELECT * FROM comments WHERE publicationId = ?');
        $comments = $req->execute(array($_GET['publicationId']));
        return $comments;
    }
    
    function addComment ()
    {
        $db = dbconnect();
        $req = $db->prepare('INSERT INTO comments(textContent, commentDate, publicationId) VALUES (?, NOW(), ?)');
        $comment = $req->execute(array($_POST['comment'], $_GET['publicationId']));
        return $comment;
    }
?>