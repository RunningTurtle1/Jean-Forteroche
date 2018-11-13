<?php include('view/head.php');?>
<body>
    <div id="createaccount" class="col-lg-3">
    <form method="post" action="index.php?action=createaccount">
        <p> <label for="email"> Votre e-mail : <input type="email" id="email" name="email" /> </label> </p>
        <p> <label for="username">Votre pseudo : <input type="text" id="username" name="username" /> </label> </p>
        <p> <label for="password">Mot de passe : <input type="password" id="password" name="password" /> </label> </p>
        <p> <input type="submit" value="créer mon compte" /> </p>
    </form>
    </div>
</body>