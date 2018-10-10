<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Jean Rochefort, romancier</title>
</head>
<body>
    <div>
        <form action="../controller/createPub.php" method="post">
            <p><input type="text" id="title" name="title" /></p>
            <p><textarea id="text" name="text"> </textarea></p>
            <p> <input type="submit" value="envoyer"/> </p>
        </form>
    <div>
    <div>    
    </div>
    <?php
    while ($data = $req->fetch())
        {
    ?>
    <div class="posts">
        <h3>
            <?php echo htmlspecialchars($data['publicationTitle']); ?>
            <em>le <?php echo $data['publicationDate']; ?></em>
        </h3>
        <a href="../controller/deletePost.php?publicationId=<?php echo $data['publicationId'] ?>" > Supprimer cette publication </a>
    </div>
    <?php
    }
    $req->closeCursor();
    ?>
</body>
</html>