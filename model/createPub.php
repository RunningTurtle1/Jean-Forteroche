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
function addPub ()
{
    $db = dbconnect();
    $req = $db->prepare('INSERT INTO publication(publicationTitle, publicationText, publicationDate) VALUE (?, ?, NOW())');
    $req->execute(array($_POST['title'], $_POST['text']));
}
?>