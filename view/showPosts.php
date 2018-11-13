<div class="posts adm col-lg-12">  
    <h2> Les articles </h2>
    <div class="deco"> </div>
    <?php
        
        foreach ($posts as $post)
        {
    ?>
        <div class="post col-lg-6">
            <h3>
                <?php echo htmlspecialchars($post['post'][1]); ?>
                <em>le <?php echo $post['post'][3]; ?></em>
            </h3>
            <a href="index.php?action=editpost&amp;publicationId=<?php echo $post['post'][0]?>"> Modifier l'article </a> <br />
            <a href="index.php?action=deletepost&amp;publicationId=<?php echo $post['post'][0] ?>" > Supprimer cette publication </a> <br />
            <a href="index.php?action=readpost&amp;publicationId=<?php echo $post['post'][0] ?>" target="_blank" > Lire l'article </a>
        </div>
    <?php
        }
    ?>
</div>