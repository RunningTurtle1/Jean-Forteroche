<?php
        if ($_GET['action'] == "editpost")
        {
    ?>
        <div class="editor">
            <form action="index.php?action=editedpost&amp;publicationId=<?php echo $post['publicationId'];?>" method="post">
                <p>
                    <label for="title"> Titre de l'article <br />
                        <input type="text" id="title" name="title"  value="<?php echo $post['publicationTitle']; ?>"/>
                    </label>
                </p>
                <p>
                    <label for="text"> L'article <br />
                        <textarea id="text" name="text">
                            <?php echo $post['publicationText']; ?>
                        </textarea>
                    </label>
                </p>
                <p><input type="submit" class="submit" id="titleSubmit" value="Modifier"></p>
            </form>
        </div>
    <?php
        }
        else
        {
    ?>
    <div class="editor">
        <form action="index.php?action=createpub" method="post">
            <p>
                <label for="title"> Titre de l'article <br />
                    <input type="text" id="title" name="title" />
                </label>
            </p>
            <p>
                <label for="text"> L'article
                    <textarea id="text" name="text" class="col-lg-6">
                    </textarea>
                </label>
            </p>
            <p> <input type="submit" class="submit" value="envoyer"/> </p>
        </form>   
    </div>
    <?php
        }
    ?>