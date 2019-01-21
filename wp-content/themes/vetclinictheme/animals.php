<?php 
/*
Template Name: Animals page
*/
?>
<?php get_header(); ?>

<?php 
while (have_posts()) {
 	the_post();
 	printf('<div class="Animals_desc"> 
 			<p>%s</p>
 			</div>', get_the_content());
} 
	
query_posts('post_type=Animals');
	while( have_posts() ){ 
		the_post();
		printf('<div class="animals_article"> 
					<a href="%s"><h1>%s</h1></a>
					<p>%s</p>
					<div class="animals_attributes">
					<p>Kind: %s</p>
					<p>Weight: %s g</p>
					<p>Height: %s cm</p>
					<p>Color: <div class="animal_color" style="background:%s; height:12px; width: 12px; float: none"></div></p>
					<p>Type: %s</p>
					<p>Sex: %s</p>
					</div>
				</div>',get_post_permalink(), get_the_title(), get_the_content(), get_field('kind'), get_field('weight'), get_field('height'), get_field('color'), get_field('type'), get_field('sex'));
	}
	echo '<div class="clear"></div>';
?>

<?php get_footer(); ?>
