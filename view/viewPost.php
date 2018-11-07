<?php
    include('view/head.php');
?>
<body>
    <a href="index.php">Retour à la page d'acceuil </a>
<?php include('view/meta.php') ?>
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

    <div class="comment">
        <form action="index.php?action=addComment&amp;publicationId=<?= $_GET['publicationId']?>" method="post">
           <textarea type="textarea" id="comment" name="comment"> </textarea>
           <p> <input type="submit" value="envoyer"/> </p>
        </form>
    </div>
</body>