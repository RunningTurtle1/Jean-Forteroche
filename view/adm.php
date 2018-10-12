<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Jean Rochefort, romancier</title>
</head>
<body>
    <a href="index.php">Retour à la page d'acceuil</a> <a href="index.php?action=signout">Me déconnecter </a>
    <?php
        if ($_GET['action'] == "editpost")
        {
    ?>
        <div>
            <form action="index.php?action=editedpost&amp;publicationId=<?php echo $post['publicationId'];?>" method="post">
                <p><input type="text" id="title" name="title"  value="<?php echo $post['publicationTitle']; ?>"/></p>
                <p>
                    <textarea id="text" name="text">
                        <?php echo $post['publicationText']; ?>
                    </textarea>
                </p>
                <p><input type="submit" value="Modifier"></p>
            </form>
        </div>
    <?php
        }
        else
        {
    ?>
    <div>
        <form action="index.php?action=createpub" method="post">
            <p>
                <input type="text" id="title" name="title" />
            </p>
            <p>
                <textarea id="text" name="text">
                </textarea>
            </p>
            <p> <input type="submit" value="envoyer"/> </p>
        </form>   
    </div>
    <?php
        }
    while ($data = $req->fetch())
        {
    ?>
    <div class="posts">
        <h3>
            <?php echo htmlspecialchars($data['publicationTitle']); ?>
            <em>le <?php echo $data['publicationDate']; ?></em>
        </h3>
        <a href="index.php?action=editpost&amp;publicationId=<?php echo $data['publicationId']?>"> Modifier l'article </a> <br />
        <a href="index.php?action=deletepost&amp;publicationId=<?php echo $data['publicationId'] ?>" > Supprimer cette publication </a> <br />
        <a href="index.php?action=readpost&amp;publicationId=<?php echo $data['publicationId'] ?>" target="_blank" > Lire l'article </a>
    </div>
    <?php
    }
    $req->closeCursor();
    ?>
</body>
</html>