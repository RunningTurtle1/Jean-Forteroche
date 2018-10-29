<header>
    <a href="index.php?action=adm">Page d'administration</a>
    <?php
        if(!isset($_SESSION['username']))
        {
    ?>
        <a href="index.php?action=authentification">Se connecter</a>
        <a href="index.php?action=newAccount"> Créer un compte </a>
    <?php
        }
        else
        {
    ?>
        <p>
            Bienvenue <?= $_SESSION['username'] ?>
            <a href="index.php?action=signout">Me déconnecter </a>
        </p>
    <?php   
        }
    ?>
</header>