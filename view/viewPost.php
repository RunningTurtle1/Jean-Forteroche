<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title> Jean Rochefort, romancier</title>
</head>
<body>
    <a href="index.php">Retour à la page d'acceuil </a>
    <div class="posts">
        <h3>
            <?= $post['publicationTitle']; ?>
            <em>le <?= $post['publicationDate']; ?></em>
        </h3>
        <p>
        <?= nl2br(htmlspecialchars($post['publicationText']));?>
        </p>
    </div>

    <div class="comments">
        <?php
            while ($comment = $comments->fetch())
            {
        ?>
                <div class="comment">
                    <?= htmlspecialchars($comment['textContent'])?>
                    <?= $comment['commentDate']?>
                </div>
        <?php
            }
            $comments->closeCursor();
        ?>
    </div>

    <div class="comment">
        <form action="index.php?action=addComment&amp;publicationId=<?= $_GET['publicationId']?>" method="post">
           <textarea type="textarea" id="comment" name="comment"> </textarea>
           <p> <input type="submit" value="envoyer"/> </p>
        </form>
    </div>
</body>