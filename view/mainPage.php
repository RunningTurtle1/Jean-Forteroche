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
        <div class="row">    
            <div class="col-lg-3 col-lg-push-9">
                    <?php include('view/meta.php') ?>    
            </div>
            <?php
            foreach($posts as $post)
                {
            ?>
            <div class="posts col-lg-8">
                <h3 class="title">
                    <a href="index.php?action=readpost&amp;publicationId=<?php echo $post['post'][0] ?>" ><?php echo htmlspecialchars($post['post'][1]); ?></a>
                </h3>
                <em>le <?php echo $post['post'][3]; ?></em>
                <div class="line"></div>
                <p>
                <?php
                echo nl2br(htmlspecialchars(substr($post['post'][2], 0, 500)));
                ?>[...]
                <br />
                <em><a href="index.php?action=readpost&amp;publicationId=<?php echo $post['post'][0] ?>" >Commentaires</a></em>
                </p>
            </div>
            <?php
                }
            ?>
            <div class="page col-lg-8">
                <?php
                    for($i = 1; $i <= $nbPage; $i++)
                    {
                        echo '<a href=\'index.php?cPage=' . $i  . '\'> ' . $i . '</a>';
                    }
                ?> 
            </div>
        </div>
        
    </div>
<script src="public/js/script.js"></script>
</body>