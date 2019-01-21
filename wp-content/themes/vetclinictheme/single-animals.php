<?php 
/*
Template Name: Animals Single
*/
?>
<?php get_header(); ?>

<?php 
while (have_posts()) {
 	the_post();
	printf('<div class="animals_single_article"> 
				<h1>
					%s
				</h1>
				<div class="animals_single_image">
					%s
				</div>
				<div class="animals_single_decsrtiption">
					%s
				</div>
				<div class="clear"></div>
				<div class="buttons_animals_single">
					<div class="tab-button b1 active" data-class="animals_numeric_attributes" data-button-trigger="b2">Numeric</div>
					<div class="tab-button b2 inactive" data-class="animals_text_attributes" data-button-trigger="b1">Text</div>
				</div>
				<div class="clear"></div>
				<div class="animals_numeric_attributes">
					<table>
						<tr>
							<td>Weight</td>
							<td>Height</td>
							<td>Sex</td>
						</tr>
						<tr>
							<td>%s g</td>
							<td>%s cm</td>
							<td>%s</td>
						</tr>
					</table>	
				</div>
				<div class="animals_text_attributes no-display">
					<table>
						<tr>
							<td>Color</td>
							<td>Type</td>
							<td>Kind</td>
						</tr>
						<tr>
							<td><div class="animal_color" style="background:%s; height:10px; width: 20px; float: none"></div></td>
							<td>%s</td>
							<td>%s</td>
						</tr>
					</table>
				</div>
			</div>', get_the_title(), get_the_post_thumbnail(), get_the_content(), get_field('weight'), get_field('height'), get_field('sex'),get_field('color'),  get_field('kind'), get_field('type'));
	}
echo '<div class="clear"></div>';
?>
<div class="position-testing">
	<div class="absolute-position"></div>
</div>
<div class="fixed-position"></div>

<?php get_footer(); ?>
