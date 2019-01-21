<?php 
/*
Template Name: Medicines Single
*/
?>
<?php get_header(); ?>

<?php 
while (have_posts()) {
 	the_post();
 	printf('<div class="medicines_single"> 
 					<h1>%s</h1>
					<p>%s</p>
					<div class="medicines_single_attributes">
					<p>Price: %s UAH</p>
					<p>Dose: %s</p>
					<p>Form: %s</p>
					</div>
				</div>', get_the_title(), get_the_content(), get_field('price'), get_field('dose'), get_field('form'));
}
echo '<div class="clear"></div>';
?>

<?php get_footer(); ?>