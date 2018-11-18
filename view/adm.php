<?php
    include('view/head.php');
?>
<body>
    <ul class="nav">
        <li>
            <a href="index.php" >Retour à la page d'acceuil</a>
        </li>
        <li>
            <a href="index.php?action=adm" >Page d'administration</a>
        </li>
        <li>
            <a href="index.php?action=signout" >Me déconnecter </a>
        </li>
    </ul>
    <div class="container">    
        <div class="row">
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