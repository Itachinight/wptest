<?php 
/*
Template Name: Services Single
*/
?>
<?php get_header(); ?>

<?php 
while (have_posts()) {
 	the_post();
 	printf('<div class="services_single"> 
 					<h1>%s</h1>
					<p>%s</p>
					<div class="services_single_attributes">
					<p>Price: %s UAH</p>
					<p>Category: %s</p>
					<p>Target Pets: %s</p>
					</div>
				</div>', get_the_title(), get_the_content(), get_field('service_price'), get_field('service_category'), get_field('target_pets')[0]);;
}
echo '<div class="clear"></div>';
?>

<?php get_footer(); ?>