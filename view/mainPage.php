<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title> Jean Rochefort, romancier</title>
</head>
<body>
    <a href="index.php?action=adm">Page d'administration</a>
    <a href="index.php?action=newAccount"> Créer un compte </a>
    <?php
    while ($data = $req->fetch())
        {
    ?>
    <div class="posts">
        <h3>
            <?php echo htmlspecialchars($data['publicationTitle']); ?>
            <em>le <?php echo $data['publicationDate']; ?></em>
        </h3>
        <p>
        <?php
        echo nl2br(htmlspecialchars($data['publicationText']));
        ?>
        <br />
        <em><a href="index.php?action=readpost&amp;publicationId=<?php echo $data['publicationId'] ?>" >Commentaires</a></em>
        </p>
    </div>
    <?php
    }
    $req->closeCursor();
    ?>
</body>