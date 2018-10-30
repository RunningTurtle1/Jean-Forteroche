<?php
    include('view/head.php');
?>
<body>
    <?php include('view/header.php') ?>    
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