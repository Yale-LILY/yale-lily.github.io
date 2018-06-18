<b>Try:</b> <span class="link" id="ex1"> Example 1 </span> | 
                 <span class="link" id="ex2"> Example 2 </span> | 
                 <span class="link" id="ex3"> Example 3 </span> |
                 <span class="link" id="ex4"> Example 4 </span>
        	<br />
<div style="height:550px; margin-top:5px">
	<div class="box" id="sg_input">
        Enter the URL of a discussion thread from <a href="http://www.createdebate.com" target="_blank">createdebate.com</a> <br />
    	<div style="line-height:25px; margin-top:10px;">
            URL: <input class="url_input" type="text" id="url1" value=" "> 
            N<sub>s</sub><input size="1" type="text" id="N1" value="1"> 
            N<sub>p</sub> <input size="1" type="text" id="T1" value="1"> 
        	<img id="go2" class="link" style="height:25px; vertical-align:middle;" src="images/ButtonR.png">
        </div>
        <div id="alg_options">
        	Partitioning Algorithm:  &nbsp;
            <span class="option_box">
            	<input type="radio" name="alg" value="FEC" id="fec_rb"> 
                <label for="fec_rb">FEC  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                	L <input size="2" type="text" id="L" value="5">
                </label>
            </span>
            &nbsp; &nbsp; &nbsp; &nbsp; or &nbsp; &nbsp; &nbsp; &nbsp; 
            <span class="option_box">
            	<input type="radio" name="alg" value="DM" id="dm_rb" checked> 
                <label for="dm_rb">DM  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                	K <input size="2" type="text" id="K" value="-1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Mode: <input type="radio" name="dm_mode" value="0" id="opt_rb"><label for="opt_rb">Optimal</label>
                          <input type="radio" name="dm_mode" value="1" id="approx_rb" checked><label for="approx_rb">Approximate</label>
                </label>
            </span>
        </div>
    </div>
    <div class="box shadow" id="sn_view"> 
               Visualization
                <div id="sg_view_output"></div>
    </div>
    <div class="box shadow" id="sn_panel"> 
				Subgroups
                <div id="sg_panel_output"></div>
    </div>
</div>

<p>&nbsp; </p>
<p>&nbsp; </p>


</div>
<script language="javascript" type="text/javascript">
$(document).ready(function()
{    
	$('#go2').click(function(e) {
		$.ajax({
			  type: "POST",
			  url: "get_subgroups.php",
			  context: $('#sg_panel_output'),
			  data: "url=" + $('#url1').val() + "&T=" + $('#T1').val() + "&N=" + $('#N1').val() + "&alg=" + $('input[name=alg]:radio').val() + "&L=" + $('#L').val() + "&K=" + $('#K').val() + "&mode=" + $('input[name=dm_mode]:radio').val(),
			  beforeSend: function(){
					$(this).html("<div style='margin-top:165px'><center><img src='images/ajax-loader.gif' align='middle'><br>Processing<br><br><span style='color:darkgrey'>Please be patient. <br>Processing may take several minutes<span></center></div>");
			  },
			  success: function(msg){
				$(this).html(msg);
				$.ajax({
					  type: "POST",
					  url: "visualize_sn_sg.php",
					  context: $('#sg_view_output'),
					  data: "url=" + $('#url1').val() + "&T=" + $('#T1').val() + "&N=" + $('#N1').val(),
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
		$('#url1').val("http://www.createdebate.com/debate/show/Is_abortion_killing_an_innocent_life");
	});
	
	$('#ex3').click(function(e) {
		$('#url1').val("http://www.createdebate.com/debate/show/The_Constitution_says_promote_for_the_general_welfare_not_provide_welfare");
	});
	$('#ex4').click(function(e) {
		$('#url1').val("http://www.createdebate.com/debate/show/Remove_In_God_We_Trust_from_pledge_and_U_S_Currency");
	});
	$('#ex2').click(function(e) {
		$('#url1').val("http://www.createdebate.com/debate/show/Obama_Wins_Nobel_Peace_Prize_Do_you_think_he_deserved_to_win");
	});
});
  </script>
