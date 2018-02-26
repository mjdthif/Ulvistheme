<?php

    get_header();


    if (have_posts()):
        while (have_posts()) : the_post(); ?>

	<article class="post page" xmlns="http://www.w3.org/1999/html">
		<div class="containerM">


			<?php
                if (has_children() OR $post->post_parent > 0) {
                    ?>

				<nav class="site-nav ">
				
					<a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>" >
						<?php echo get_the_title(get_top_ancestor_id()); ?>
					</a>
					

					<ul>
		    			
						<?php

                            $args = array(
                                'child_of' => get_top_ancestor_id(),
                                'title_li' => ''
                            );

                            wp_list_pages($args); ?>
					</ul>

				</nav>
				<?php } ?>


				<h2>
					<?php the_title(); ?>
				</h2>
				<?php the_content(); ?>
		</div> 
		

		<?php endwhile;

    else:
        echo '<p> No content found  </p>';
    endif;
		
		
		  get_footer();
			
       ?>


