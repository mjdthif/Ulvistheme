<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<!-- Site-header -->
	<header class="site-header">
				
			
		<?php
            $attachment_id = 64; // attachment ID

                $image_attributes = wp_get_attachment_image_src( $attachment_id, 'full' ); // returns an array
                if( $image_attributes ) {
                    ?>

			<?php } ?>

		<div id="logo-container" class="group">
			<a href="<?php echo home_url(); ?>">
			<span>U</span>LVIS 
			</a>
		</div>

		
			<!-- Site-Navigation -->

			<div class="nav-container">
				<nav class="site-nav group">
<!--					<a class="burger-menu"></a>-->
				<?php
					
					
                    $args = array('theme_location' => 'main_menu');
                ?>
					<?php wp_nav_menu($args); ?>
				</nav>
			</div>

	</header>
