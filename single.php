<?php

while(have_posts()) {
    the_post(); ?>
<H1><?php  the_title(); ?></H1>
<?php the_content(); ?>

    <?php


}