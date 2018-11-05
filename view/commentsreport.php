<div class="container">
<?php
    var_dump($comments);
    foreach($comments as $comment)
    {
?>
    <div> 
        <p>
            <?=$comment['comment']['0']?> par <?=$comment['comment'][1]?> <br />
            Signalé <?=$comment['count']?> fois        
        </p>
        
    </div>
<?php
    }
?>
</div>