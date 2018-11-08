<?php
    include('view/head.php');
?>
    <body>
        <div id="authentification" class="col-lg-3">
            <form method="post" action="index.php?action=auth">
                <p>    
                    <label for="user">Nom d'utilisateur <br/>
                        <input type="text" name="user" id="user" />
                    </label>
                </p>
                <p>
                    <label for="password">Mot de passe <br/>
                        <input type="password" name="password" id="password" /> 
                    </label>
                </p>
                <p><input type="submit" value="Me connecter" class="submit"/>
            </form>
        </div>
    </body>
</html>

