<?php 
/*
Template Name: Services page
*/
?>
<?php get_header(); ?>

<?php 
while (have_posts()) {
 	the_post();
 	printf('<div class="services_desc"> 
 			<p>%s</p>
 			</div>', get_the_content());
}

query_posts('post_type=Services');
	while( have_posts() ){ 
		the_post();
		printf('<div class="services_article"> 
					<a href="%s"><h1>%s</h1></a>
					<p>%s</p>
					<div class="services_attributes">
					<p>Price: %s UAH</p>
					<p>%s</p>
					<p>%s</p>
					</div>
				</div>',get_post_permalink(), get_the_title(), get_the_content(), get_field('service_price'), get_field('service_category'), get_field('target_pets')[0]);
	}
	echo '<div class="clear"></div>';
?>

<?php get_footer(); ?>