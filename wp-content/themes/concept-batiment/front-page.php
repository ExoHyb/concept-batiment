
<?php

get_header();

$subtitle = get_field('subtitle', 'option');
$backgroundImage = get_field('background-image', 'option');
$primaryImage = get_field('first-image', 'option');

?>

<div id="main" role="main">
	<section class="container header-home">
		<div class="overlay"></div>
		<img class="image-gray" src="<?php echo $primaryImage['url']; ?>">
		<img id="heightimage" class="primary-image" src="<?php echo $backgroundImage['url']; ?>">
		<div class="wrapper-content">
			<h1 class="title"><?php the_title(); ?></h1>
			<h2 class="gradient-h2"><?php echo $subtitle; ?></h2>
		</div>
	</section>
	<section class="inspirations">
		<div class="container">
			<?php
			$the_query = new WP_Query( array('post_type' => 'inspiration', 'posts_per_page' => 10) );
			if ( $the_query->have_posts() ) {
				echo '<div class="wrapper-inspirations">';
					while ( $the_query->have_posts() ) : $the_query->the_post();
						echo '<div class="item-inspiration">';
							the_post_thumbnail();
							echo '<div class="wrapper-content">';
								 echo '<p class="title h3">'. get_the_title() .'</p>';
								 the_excerpt();
							echo '</div>';
						echo '</div>';
					endwhile;
				echo '<div>';
			}
			wp_reset_postdata();
			?>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="wrapper-about">
				<?php while (have_posts()) : the_post(); ?>
					<div class="wrapper-content">
						<p class="title h2 gradient-h2"><?php _e('About us', 'twoobl'); ?></p>
						<p class="title h1"><?php _e('We create things.', 'twoobl'); ?></p>
						<?php the_content(); ?>
					</div>
					<div class="wrapper-image">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<section class="clients">
		<div class="container">
			<?php
			$the_query = new WP_Query( array('post_type' => 'clients', 'posts_per_page' => -1) );
			if ( $the_query->have_posts() ) {
				echo '<p class="title h2 gradient-h2">' . __('Ils nous font confiance') . '</p>';
				echo '<div class="wrapper-clients">';
					while ( $the_query->have_posts() ) : $the_query->the_post();
						echo '<div class="item-client">';
							echo '<div class="wrapper-content">';
								 echo '<p class="title h1">'. get_the_title() .'</p>';
								 echo '<div class="saflex">';
									 echo '<p>' . strip_tags(get_the_content()) . '</p>';
									 echo '<div class="image-client">' . get_the_post_thumbnail() . '</div>';
								 echo '</div>';
							echo '</div>';
						echo '</div>';
					endwhile;
				echo '<div>';
			}
			wp_reset_postdata();
			?>
		</div>
	</section>
	<section class="prestations">
		<div class="container">
			<h2 class="title"><?php _e('Nos prestations', 'twoobl'); ?></h2>
			<div class="wrapper-prestations">
				<?php
				$the_query = new WP_Query( array('post_type' => 'page', 'posts_per_page' => -1));
				$urls = get_field('prestations', 'options');
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) : $the_query->the_post();
						if ($urls) {
							foreach ($urls as $url) {
								if ($url == get_permalink()) {
									echo '<article class="item-prestation">';
										echo '<a href="' . get_the_permalink() . '">';
											echo '<div class="wrapper-image">';
												the_post_thumbnail();
											echo '</div>';
											echo '<h2>' . get_the_title() . '</h2>';
											echo the_excerpt();
										echo '</a>';
									echo '</article>';
								}
							}
						}
					endwhile;
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
