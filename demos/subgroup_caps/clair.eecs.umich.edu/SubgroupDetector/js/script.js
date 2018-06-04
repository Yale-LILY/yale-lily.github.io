$(document).ready(function()
{    
	/*$('#tag_pol').click(function(e) {
		alert("Hello");
		$.ajax({
			  type: "POST",
			  url: "tag_polarity.php",
			  context: $('#polarity_out_txt'),
			  data: "txt=" + $('#polarity_input_txt').val(),
			  success: function(msg){
				$(this).html(msg);
			  }
		});
	});
	*/
	
	
	$('#tabs').tabs({
			ajaxOptions: {
				error: function( xhr, status, index, anchor ) {
					$( anchor.hash ).html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. ");
				}
			},
			cache: true,
			disabled: [1, 2, 3, 4, 5],
			load: function (e, ui) {
			    $(ui.panel).find(".tab-loading").remove();
   			},
		    select: function (e, ui) {
				var $panel = $(ui.panel);
				if ($panel.is(":empty")) {
					$panel.append("<div class='tab-loading'>Loading...</div>")
				}
			}	
	});
	
	$('#tabs').bind('tabsshow', function(event, ui) {
		// Objects available in the function context:
		ui.tab     // anchor element of the selected (clicked) tab
		ui.panel   // element, that contains the selected/clicked tab contents
		ui.index   // zero-based index of the selected (clicked) tab
		
	});
});