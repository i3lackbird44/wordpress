<h1>Hello Custom theme</h1>
<?php
get_header();

echo get_stylesheet_directory_uri().'/style/css/style.css'."<br>";
echo bloginfo('stylesheet_url').'/style/css/style.css';
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
?>
	<article class="post">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<?php the_content() ?>
	</article>
<?php 
	endwhile;
else :
	echo '<p>There are no posts!</p>';
endif;

get_footer();
?>