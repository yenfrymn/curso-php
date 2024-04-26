<main>
    <!--<pre style="font-size: 8px; overflow: scroll; height: 350px;">
        <?php //var_dump($data); ?>
    </pre>-->
    <section>
        <img src="<?php echo $poster_url ;?>" width="250" alt="Poster de <?php echo $title ; ?>">
    </section>
    <hgroup>
        <h3><?php echo $title ; echo " - ".$until_message ;?> </h3>
        <p>Fecha de estreno <?php echo $release_date ; ?></p>
        <p>La siguiente película de Marvel es <?php echo $following_production ; ?></p>
    </hgroup>
</main>