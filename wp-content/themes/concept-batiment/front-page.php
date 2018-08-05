
<?php

get_header();

$subtitle = get_field('subtitle', 'option');
$backgroundImage = get_field('background-image', 'option');
$primaryImage = get_field('first-image', 'option');

?>

<div id="main" role="main">
	<section class="header-home">
		<div class="overlay"></div>
		<img class="image-gray" src="<?php echo $primaryImage['url']; ?>">
		<img id="heightimage" class="primary-image" src="<?php echo $backgroundImage['url']; ?>">
		<div class="wrapper-content">
			<h1 class="title"><?php the_title(); ?></h1>
			<h2 class="gradient-h2"><?php echo $subtitle; ?></h2>
		</div>
	</section>
	<?php while (have_posts()) : the_post(); ?>
		<div class="entry-content clearfix">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</div>

<?php
get_footer();
