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
        foreach($posts as $post)
            {
        ?>
        <div class="posts col-lg-8 col-lg-push-1">
            <h3>
                <?php echo htmlspecialchars($post['post'][1]); ?>
            </h3>
                <em>le <?php echo $post['post'][3]; ?></em>
            <p>
            <?php
            echo nl2br(htmlspecialchars($post['post'][2]));
            ?>
            <br />
            <em><a href="index.php?action=readpost&amp;publicationId=<?php echo $post['post'][0] ?>" >Commentaires</a></em>
            </p>
        </div>
        <?php
            }
        ?>        
        
        <div class="col-lg-3">
            <?php include('view/meta.php') ?>    
        </div>
    </div>
</body>