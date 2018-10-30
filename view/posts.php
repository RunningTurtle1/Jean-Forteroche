<?php
        if ($_GET['action'] == "editpost")
        {
    ?>
        <div>
            <form action="index.php?action=editedpost&amp;publicationId=<?php echo $post['publicationId'];?>" method="post">
                <p><input type="text" id="title" name="title"  value="<?php echo $post['publicationTitle']; ?>"/></p>
                <p>
                    <textarea id="text" name="text">
                        <?php echo $post['publicationText']; ?>
                    </textarea>
                </p>
                <p><input type="submit" value="Modifier"></p>
            </form>
        </div>
    <?php
        }
        else
        {
    ?>
    <div>
        <form action="index.php?action=createpub" method="post">
            <p>
                <input type="text" id="title" name="title" />
            </p>
            <p>
                <textarea id="text" name="text">
                </textarea>
            </p>
            <p> <input type="submit" value="envoyer"/> </p>
        </form>   
    </div>
    <?php
        }
    ?>