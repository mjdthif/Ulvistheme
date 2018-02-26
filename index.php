 


<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>

	<article class="post">
	<div class="containerM">
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title() ?>
			</a>
		</h2>
		<?php the_content() ?>
		<?php comments_template();?>
	</div>
	</article>

	<?php endwhile;

else:
    echo '<p> Ingen post hittas </p>';

endif;

get_footer();

?>

