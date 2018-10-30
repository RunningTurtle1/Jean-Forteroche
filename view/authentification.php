<?php
    include('view/head.php');
?>
    <body>
        <form method="post" action="index.php?action=auth">
            <p><input type="text" name="user" id="user" /></p>
            <p><input type="password" name="password" id="password" /> </p>
            <p><input type="submit" value="me connecter" />
        </form>
    </body>
</html>

