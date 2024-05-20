<?php

get_header(  );
?>

<?php



while(have_posts()) {
    the_post(); ?>
<H1><a href="<?php the_permalink(  ); ?>"><?php  the_title(); ?></a></H1>
<?php the_content(); ?>
<hr>
    <?php


}

?>


<?php


get_footer();

?>