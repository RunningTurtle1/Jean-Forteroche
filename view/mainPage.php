<?php
    include('view/head.php');
?>
<body>
    <div class="container">
        <?php include('view/header.php') ?>    
    </div>
    <?php
    while ($data = $req->fetch())
        {
    ?>
    <div class="posts container">
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