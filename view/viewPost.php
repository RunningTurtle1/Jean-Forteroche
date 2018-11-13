<?php
    include('view/head.php');
?>
<body>
    <div class="container viewPost">
        <a href="index.php">Retour à la page d'acceuil </a>
        <div class="row col-lg-3 col-lg-push-9">
            <?php include('view/meta.php') ?>
    </div>
        <div class="posts col-lg-9 col-lg-pull-3">
            <h3>
                <?= $post['publicationTitle']; ?>
                <em>le <?= $post['publicationDate']; ?></em>
            </h3>
            <p>
            <?= nl2br(htmlspecialchars($post['publicationText']));?>
            </p>
        </div>
        <h2> Commentaires </h2>
        <div class="deco"></div>
        <div class="comments">
            <?php
                foreach ($comments as $comment)
                {
            ?>
                    <div class="comment">
                        <?= htmlspecialchars($comment['comment'][1])?> <br />
                        <?= $comment['comment'][4] ?>
                        <?= $comment['comment'][2]?>
                        <a href="index.php?action=report&amp;commentId=<?= $comment['comment'][0]?>&amp;publicationId=<?= $_GET['publicationId']?>">Signaler</a>
                    </div>
            <?php
                }
            ?>
        </div>

        <div class="commentarea">
            <form action="index.php?action=addComment&amp;publicationId=<?= $_GET['publicationId']?>" method="post">
            <textarea type="textarea" id="comment" name="comment"> </textarea>
            <p> <input type="submit" value="envoyer"/> </p>
            </form>
        </div>
    </div>
</body>