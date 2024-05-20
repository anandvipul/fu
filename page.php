<?php

while(have_posts()) {
    the_post(); ?>
    <h1>This is a page, Not a post.</h1>
<H1><?php  the_title(); ?></H1>
<?php the_content(); ?>

    <?php


}