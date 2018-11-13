<?php
    include('view/head.php');
?>
<body>
    <a href="index.php">Retour à la page d'acceuil</a> <a href="index.php?action=signout">Me déconnecter </a>
    <div class="container">    
        <h2 id="editorTitle"> Nouvel article </h2>
        <div class="deco"></div>
        <div id="button"><button id="showeditor">Ecrire un nouvel article</button></div>
        <div class="row" id="textEditor">
            <?php include('view/posts.php') ?>
            <?php if(!($_GET['action'] == 'editpost'))
            {
            ?>
        </div>
        <div class="row">
            <?php include('view/showPosts.php')?>
        </div>
        <div class="row">
            <?php include('view/commentsreport.php') ?>
        </div>
            <?php
            }
            ?>
    </div>
    <script src="public/js/adm.js"></script>
</body>
</html>