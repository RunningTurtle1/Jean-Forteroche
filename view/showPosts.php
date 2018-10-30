<?php
    while ($data = $req->fetch())
    {
?>
    <div class="posts col-sm-6">
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