Try: <span class="link" id="att_ex1"> Example Set 1 </span> | <span class="link" id="att_ex2"> Example Set 2 </span> | <span class="link" id="att_ex3"> Example Set 3 </span>
<div style="height:370px; margin-top:20px">
	<center>
        <div class="box shadow" id="att_input"> 
			Enter 1 to 5 sentences that contain a second person pronoun
            <br /> <br /><br />
            1- <input class = "att_input" type="text" id="s1" value="I like your excellent ideas.">
            	<br /><br /><br />
            2- <input class = "att_input" type="text" id="s2" value="Stop spreading lies, idiot.">
            	<br /><br /><br />
            3- <input class = "att_input" type="text" id="s3" value="Okay, I will discuss this with you later.">
            	<br /><br /><br />
            4- <input class = "att_input" type="text" id="s4" value="This indicates that you are supporting racism.">
            	<br /><br /><br />
            5- <input class = "att_input" type="text" id="s5" value="You are a great friend of mine.">
        </div>
        <div id="att_button"> 
            <img id="identify_att" class="link" src="images/arrow.png" width="150" align="middle" />
            <br />
            <span class="light_desc">Classify Attitude</span>
        </div>
        
        <div class="box shadow" id="att_output"> 
			output
            <br /> <br />
            <div id="att_output_area">
            
            </div>
        </div>
    </center>
</div>

<script language="javascript" type="text/javascript">
$(document).ready(function()
{    
	$('#identify_att').click(function(e) {
		$.ajax({
			  type: "POST",
			  url: "identify_attitude.php",
			  context: $('#att_output_area'),
			  data: "s1=" + $('#s1').val() + "&s2="+$('#s2').val() + "&s3="+$('#s3').val()+
			  "&s4="+$('#s4').val() + "&s5="+$('#s5').val(),
			  beforeSend: function(){
					$(this).html("<div style='margin-top:145px'><center><img src='images/ajax-loader.gif' align='middle'><br>Processing</center></div>");
			  },
			  success: function(msg){
				$(this).html(msg);
			  }
		});
	});
	
	
	$('#att_ex1').click(function(e) {
		$('#s1').val("I like your excellent ideas.");
		$('#s2').val("Stop spreading lies, idiot.");
		$('#s3').val("Okay, I will discuss this with you later.");
		$('#s4').val("This indicates that you are supporting racism.");
		$('#s5').val("You are a great friend of mine.");
	});
	
	$('#att_ex2').click(function(e) {
		$('#s1').val("How are you doing in this good day?");
		$('#s2').val("I agree with you.");
		$('#s3').val("I will touch base with you on this issue next week.");
		$('#s4').val("Indeed, you seem to be of the idiotic belief that, in a sense, everybody should agree with you.");
		$('#s5').val("You are nothing more than an ignorant asshole.");
	});

	$('#att_ex3').click(function(e) {
		$('#s1').val("congrats you stupid.");
		$('#s2').val("If you write more like this one, all you're gonna get are flippant responses from assholes like me :PS.");
		$('#s3').val("This also explains why you are a bigot.");
		$('#s4').val("oh lawnman i really truly think you are a wonderful human being.");
		$('#s5').val("But your conclusion is fantastic, and absolutly how I feel!");
	});
});
</script>
