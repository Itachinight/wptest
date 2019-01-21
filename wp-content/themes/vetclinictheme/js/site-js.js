function show_blocks(handle) {
	jQuery(handle).show(400);
}
jQuery(document).ready(function(){
	jQuery(".buttons_animals_single .tab-button").click(function(){
		if(jQuery(this).hasClass('inactive')){
			if(jQuery(this).hasClass('inactive')) {
				jQuery(this).toggleClass('inactive').toggleClass('active');
			}
			var triggeredClass = jQuery(this).attr('data-button-trigger');
			if(jQuery('.' + triggeredClass).hasClass('active')) {
				jQuery('.' + triggeredClass).toggleClass('active').toggleClass('inactive');
			}
			jQuery('.' + jQuery(this).attr('data-class')).toggleClass('no-display');
			jQuery('.' + jQuery('.' + triggeredClass).attr('data-class')).toggleClass('no-display');
		}
	})
	jQuery('.position-testing').click(function(){
		jQuery(this).hide(400);
		setTimeout(show_blocks, 3000, this);
	})
})