<?php
if(count($errors)>0){
    ?>
<div class="errors">
    <?php foreach($errors as $er){?>
        <p class="error">
            <?php echo $er; ?>
        </p>
        <?php } ?>
</div>

<?php
}



?>