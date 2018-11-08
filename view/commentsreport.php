<div class="container comments adm">
    <h2>Commentaires signalés</h2>
    <div class="deco"></div>
    <?php
        foreach($comments as $comment)
        {
    ?>
        <div> 
            <p>
                "<?=$comment['comment'][0]?>" par <?=$comment['comment'][1]?> <br />
                Signalé <?=$comment['count']?> fois        
            </p>
            <p>
                <a href="index.php?action=deletecomment&amp;commentId=<?=$comment['comment'][2]?>">Supprimer le commentaire</a>
            </p>
            <p>
                <a href="index.php?action=unreportcomment&amp;commentId=<?=$comment['comment'][2]?>">Retirer le signalement</a>
            </p>
        </div>
    <?php
        }
    ?>
</div>