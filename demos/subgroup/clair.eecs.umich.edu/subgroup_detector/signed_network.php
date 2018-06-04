<b>Try:</b> <span class="link" id="ex1"> Example 1 </span> | 
                 <span class="link" id="ex2"> Example 2 </span> | 
                 <span class="link" id="ex3"> Example 3 </span> |
                 <span class="link" id="ex4"> Example 4 </span>
        	<br />
<div style="height:520px; margin-top:5px">
	<div class="box" id="sn_input">
        Enter the URL of a discussion thread from <a href="http://www.createdebate.com" target="_blank">createdebate.com</a><br />
    	<div style="line-height:25px; margin-top:10px;">
        	
            URL: <input class="url_input" type="text" id="url" value=""> 
            T<sub>s</sub> <input size="1" type="text" id="N" value="1"> 
            N<sub>p</sub> <input size="1" type="text" id="T" value="1"> 
        	<img id="go" class="link" style="height:25px; vertical-align:middle;" src="images/ButtonR.png">
        </div>
    </div>
    <div class="box shadow" id="sn_view"> 
               Visualization
                <div id="sn_view_output"></div>
    </div>
    <div class="box shadow" id="sn_panel"> 
				Evidence
                <div id="sn_panel_output"></div>
                
    </div>
</div>

<script language="javascript" type="text/javascript">
$(document).ready(function()
{    
	$('#go').click(function(e) {
		$.ajax({
			  type: "POST",
			  url: "extract_sn.php",
			  context: $('#sn_panel_output'),
			  data: "url=" + $('#url').val() + "&T=" + $('#T').val() + "&N=" + $('#N').val(),
			  beforeSend: function(){
				  	$('#sn_view_output').html();
					$(this).html("<div style='margin-top:165px'><center><img src='images/ajax-loader.gif' align='middle'><br>Processing<br><br><span style='color:darkgrey'>Please be patient. <br>Processing may take several minutes</span></center></center></div>");
			  },
			  success: function(msg){
				$(this).html(msg);
				$.ajax({
					  type: "POST",
					  url: "visualize_sn.php",
					  context: $('#sn_view_output'),
					  data: "url=" + $('#url').val() + "&T=" + $('#T').val() + "&N=" + $('#N').val(),
					  beforeSend: function(){
							$(this).html("<div style='margin-top:165px'><center><img src='images/ajax-loader.gif' align='middle'><br>Processing</center></div>");
					  },
					  success: function(msg){
						$(this).html(msg);
					  }
				});
			  }
		});
	});
	$('#ex1').click(function(e) {
                $('#url').val("http://www.createdebate.com/debate/show/Is_abortion_killing_an_innocent_life");
        });

        $('#ex3').click(function(e) {
                $('#url').val("http://www.createdebate.com/debate/show/The_Constitution_says_promote_for_the_general_welfare_not_provide_welfare");
        });
        $('#ex4').click(function(e) {
                $('#url').val("http://www.createdebate.com/debate/show/Remove_In_God_We_Trust_from_pledge_and_U_S_Currency");
        });
        $('#ex2').click(function(e) {
                $('#url').val("http://www.createdebate.com/debate/show/Obama_Wins_Nobel_Peace_Prize_Do_you_think_he_deserved_to_win");
	});	
});
</script>


</div>
