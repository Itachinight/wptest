<?php 
/*
Template Name: Medicines page
*/
?>
<?php get_header(); ?>

<?php 
while (have_posts()) {
 	the_post();
 	printf('<div class="medicine_desc"> 
 			<p>%s</p>
 			</div>', get_the_content());
} 
	
query_posts('post_type=Medicines');
	while( have_posts() ){ 
		the_post();
		printf('<div class="medicines_article"> 
					<a href="%s"><h1>%s</h1></a>
					<p>%s</p>
					<div class="medicines_attributes">
					<p>Price: %s UAH</p>
					<p>Dose: %s</p>
					<p>Form: %s</p>
					</div>
				</div>',get_post_permalink(), get_the_title(), get_the_content(), get_field('price'), get_field('dose'), get_field('form'));
	}
	echo '<div class="clear"></div>';
?>

<?php get_footer(); ?>
