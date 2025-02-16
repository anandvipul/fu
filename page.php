<?php

get_header();



// pageBanner( array(
// 	"title" => "Hello there this is the title",
// 	'subtitle' => "Hi, this is the subtitle",
// 	'photo' => "https://wallpapertag.com/wallpaper/full/b/1/3/631837-beautiful-scenery-wallpapers-2880x1800-htc.jpg"
// ) );
pageBanner();

?>



<div class="container container--narrow page-section">

	<?php
	$theParent = wp_get_post_parent_id( get_the_ID() );
	if ( $theParent ) {
		?>
		<div class="metabox metabox--position-up metabox--with-home-link">
			<p>
				<a class="metabox__blog-home-link" href="<?php echo get_permalink( $theParent ) ?>"><i class="fa fa-home"
						aria-hidden="true"></i> Back to <?php echo get_the_title( $theParent ); ?></a> <span
					class="metabox__main"><?php the_title(); ?></span>
			</p>
		</div>

		<?php
	}

	?>

	<?php
	$testArray = get_pages( array(
		"child_of" => get_the_ID()
	) );

	if ( $theParent or $testArray ) { ?>

		<div class="page-links">
			<h2 class="page-links__title"><a
					href="<?php echo get_permalink( $theParent ) ?>"><?php echo get_the_title( $theParent ); ?></a></h2>
			<ul class="min-list">

				<?php

				wp_list_pages( array( "title_li" => NULL,
					"child_of" => $theParent == 0 ? get_the_ID() : wp_get_post_parent_id( get_the_ID() ),
					"sort_column" => "menu_order"
				) );

				?>
				<!--  
				<li class="current_page_item"><a href="#">Our History</a></li>
					<li><a href="#">Our Goals</a></li>
-->
			</ul>
		</div>

	<?php } ?>

	<div class="generic-content">
		<?php the_content(); ?>
	</div>
</div>

<?php

get_footer();

?>