<?php
    include('view/head.php');
?>
<body>
    <header class="container">
        <div>
            <h1>
                Billet simple pour l'alaska...
            </h1>
        </div>
    </header>
    <div class="container">
        <?php
        while ($data = $req->fetch())
            {
        ?>
        <div class="posts col-lg-8 col-lg-push-1">
            <h3>
                <?php echo htmlspecialchars($data['publicationTitle']); ?>
            </h3>
                <em>le <?php echo $data['publicationDate']; ?></em>
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
        
        <div class="col-lg-3">
            <?php include('view/meta.php') ?>    
        </div>
    </div>
    <?php
    }
    $req->closeCursor();
    ?>
</body>