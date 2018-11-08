<?php
    include('view/head.php');
?>
<body>
    <div id="ancre"> </div>
    <a href="#ancre" id="bouton"><span class="glyphicon glyphicon-circle-arrow-up"> </span></a>
    <header class="container col-lg-10">
        <h1>
            Billet simple pour l'alaska...
        </h1>
        <img src="public/route-alaska.jpg" alt="Une route en alaska" id="background" class="col-lg-10"/>
    </header>
    <div class="container">
    <div class="col-lg-3 meta col-lg-push-9">
            <?php include('view/meta.php') ?>    
        </div>
        <?php
        foreach($posts as $post)
            {
        ?>
        <div class="posts col-lg-8">
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
        
    </div>
<script src="public/js/script.js"></script>
</body>