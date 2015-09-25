function reaction_buttons_increment_button_ajax(post_id, button){
		var already_voted_text = '';
		var only_one_vote = false;
		var show_after_votes = true;
		var use_as_counter = true;
		var use_percentages = false;
		var buttons = [0,1,2,3,4];

		if(!use_as_counter && jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + button).hasClass('voted')){
			return;
		}

		if(!use_as_counter){
			// remove the href attribute before sending the request to make
			// sure no one votes more than once by clicking ten times fast
			if(only_one_vote){
				// remove all the onclicks from the posts and replace it by the
				// alert not to vote twice if set
				if(already_voted_text){
					jQuery("#reaction_buttons_post" + post_id + " .reaction_button").attr('onclick', 'javascript:alert(\'' + already_voted_text + '\');');
				}
				else{
					jQuery("#reaction_buttons_post" + post_id + " .reaction_button").removeAttr('onclick');
				}
			}
			else{
				// remove/replace only on the clicked button
				if(already_voted_text){
					jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + button).attr('onclick', 'javascript:alert(\'' + already_voted_text + '\');');
				}
				else{
					jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + button).removeAttr('onclick');
				}
			}
		}
		jQuery.ajax({
				type: "post",url: "http://greennews.ng/wp-admin/admin-ajax.php", dataType: 'json',
					data: { action: 'reaction_buttons_increment_button_php', post_id: post_id, button: button, _ajax_nonce: 'acafb08cf6' },
					success: function(data){
						if(use_percentages){
							var i;
							var b;
							for(i = 0; i < buttons.length; ++i){
								b = buttons[i];
								jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + b + " .count_number").html(data['percentage'][b]);
							}
						}
                        else if(show_after_votes){
							var i;
							var b;
							for(i = 0; i < buttons.length; ++i){
								b = buttons[i];
								jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + b + " .count_number").html(data['counts'][b]);
							}
						}
						else{
							jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + button + " .count_number").html(data['count']);
						}
						if(only_one_vote){
							jQuery("#reaction_buttons_post" + post_id + " .reaction_button").addClass('voted');
						}
						else{
							jQuery("#reaction_buttons_post" + post_id + " .reaction_button_" + button).addClass('voted');
						}
                        if(show_after_votes){
							jQuery("#reaction_buttons_post" + post_id + " .reaction_button .braces").removeAttr('style');
						}
					}
			});
		}
