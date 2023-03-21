<?php	get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="name">
		<!--page Main Name--> <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
	</div>
	<?php the_content('<br /><br />Continue Reading &raquo;'); ?>
<?php endwhile; ?>

<?php else : ?>
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>


<?php get_footer(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
