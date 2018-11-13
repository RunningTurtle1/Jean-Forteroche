<section class="meta">
    <ul>
    
        <?php
            if(!isset($_SESSION['username']))
            {
        ?>
            <li>
                <a href="index.php?action=authentification">Se connecter</a>
            </li>
            <li>
                <a href="index.php?action=newAccount"> Créer un compte </a>
            </li>
        <?php
            }
            else
            {
        ?>
            <li>
                Bienvenue <?= $_SESSION['username'] ?>
            </li>
            <?php 
                if(isset($_SESSION['admin']))
                {
            ?>
                <li>
                <a href="index.php?action=adm">Page d'administration</a>
                </li>
            <?php
                }
            ?>
            <li>
                <a href="index.php?action=signout">Me déconnecter </a>
            </li>
        <?php   
            }
        ?>
    </ul>
</section>