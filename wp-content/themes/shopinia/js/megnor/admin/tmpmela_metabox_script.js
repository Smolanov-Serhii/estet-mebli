jQuery(document).ready( function() {				 
	var tmpmela_boxes = new Object();
	// new!
	var tmpmela_nonces = new Object();
	function dt_find_boxes() {
		jQuery('.metabox-holder .postbox').each(function(){
			var this_id = jQuery(this).attr('id');
			if(this_id.match(/tm/i)){
				tmpmela_boxes[this_id] = '#'+this_id;
				//new!
				if( typeof (nonce_field = jQuery(this).find('input[type="hidden"][name*="nonce_"]').attr('id')) != 'undefined' ) {
					tmpmela_nonces[this_id] = '#'+nonce_field;
				}
			}
		});
	}
	// new!
	dt_find_boxes();
	function tmpmela_toggle_boxes() {
		var metaBoxes = arguments,
			$wpMetaBoxesSwitcher = jQuery('#adv-settings');
		if( typeof arguments[0] == 'object' ) {
			metaBoxes = arguments[0];
		}
		for(var key in tmpmela_boxes) {
			$wpMetaBoxesSwitcher.find(tmpmela_boxes[key] + '-hide').prop('checked', '');
			jQuery(tmpmela_boxes[key]).hide();
			//new!
			if( 'dt_blocked_nonce' != jQuery(tmpmela_nonces[key]).attr('class') ) {
				jQuery(tmpmela_nonces[key]).attr('name', 'blocked_'+jQuery(tmpmela_nonces[key]).attr('name'));
				jQuery(tmpmela_nonces[key]).attr('class', 'dt_blocked_nonce');
			}
		}
		for(var i=0;i<metaBoxes.length;i++) {
			$wpMetaBoxesSwitcher.find(metaBoxes[i] + '-hide').prop('checked', true);
			jQuery(metaBoxes[i]).show();
			// new!
			var nonce_key = metaBoxes[i].slice(1);
			if( 'dt_blocked_nonce' == jQuery(tmpmela_nonces[nonce_key]).attr('class') ) {
				var new_name = jQuery(tmpmela_nonces[nonce_key]).attr('name').replace("blocked_", "");
				jQuery(tmpmela_nonces[nonce_key]).attr('name', new_name);
				jQuery(tmpmela_nonces[nonce_key]).attr('class', '');
			}
		}
	}
	jQuery("#page_template").change(function() {
		var templateName = jQuery(this).val(),activeMetaBoxes = new Array();	
		for( var metabox in tmMetaboxes ) {
			// choose to show or not to show
			if ( !tmMetaboxes[metabox].length || tmMetaboxes[metabox].indexOf(templateName) > -1 ) { activeMetaBoxes.push('#'+metabox); }
		}
		if ( activeMetaBoxes.length ) {
			tmpmela_toggle_boxes(activeMetaBoxes);
		} else {
			tmpmela_toggle_boxes();
		}
		jQuery(this).trigger('tmBoxesToggled');
	});
	jQuery("#page_template").trigger('change');
});