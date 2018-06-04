Try: <span class="link" id="pol_ex1"> Example 1 </span> | <span class="link" id="pol_ex2"> Example 2 </span> | <span class="link" id="pol_ex3"> Example 3 </span>
<div style="height:420px; margin-top:20px">
	<center>
        <div class="box shadow" id="polarity_input"> 
            Enter Text Here
            <br /><br />
            <form>
            <textarea id="polarity_input_txt" style="width:90%; height:300px; padding:5px 5px 5px 5px">D1: The new immigration law is good. Illegal immigration is bad.

D2: I totally disagree with you. The new immigration law is blatant racism and quite unconstitutional.

D1: You are an idiot. Stop spreading lies.</textarea>
            </form>
        </div>
        
        <div id="polarity_button"> 
            <img id="tag_pol" class="link" src="images/arrow.png" width="150" align="middle" />
            <br />
            <span class="light_desc">Tag Polarized Words</span>
        </div>
        
        <div class="box shadow" id="polarity_output"> 
        	Output
	        <br />
            <br />
            <div id="polarity_out_txt">
          <!--         D1: Arizona immigration law is <span class="positive">good</span>. Illegal immigration is <span class="negative">bad</span>. <br/>
                <br />
                D2: I totally <span class="negative">disagree</span> with you. Arizona immigration law is <span class="negative">blatant</span> <span class="negative">racism</span> and quite unconstitutional.<br/>
                <br />
                D1: You are an <span class="negative">idiot</span>. Stop spreading <span class="negative">lies</span>. -->
            </div>
        </div>
    </center>
</div>

<script language="javascript" type="text/javascript">
$(document).ready(function()
{    
	$('#tag_pol').click(function(e) {
		$.ajax({
			  type: "POST",
			  url: "tag_polarity.php",
			  context: $('#polarity_out_txt'),
			  data: "txt=" + $('#polarity_input_txt').val(),
			  beforeSend: function(){
					$(this).html("<div style='margin-top:150px'><center><img src='images/ajax-loader.gif' align='middle'><br>Processing</center></div>");
			  },
			  success: function(msg){
				$(this).html(msg);
			  }
		});
	});
	

	$('#pol_ex1').click(function(e) {
		$('#polarity_input_txt').val("D1: The new immigration law is good. Illegal immigration is bad.\n\nD2: I totally disagree with you. The new immigration law is blatant racism and quite unconstitutional.\n\nD1: No matter what you say, I still believe that this law is an excellent one that is perfectly tailored for our security.\n\nD2: You are an idiot. Stop spreading hatred and supporting racists.");
	});
	$('#pol_ex2').click(function(e) {
		$('#polarity_input_txt').val("D1: You are great!. I like your brilliant ideas.\n\nD2: Thanks, that's nice of you.\n\nD1: You are welcome my dear friend.");
	});
	
	$('#pol_ex3').click(function(e) {
		$('#polarity_input_txt').val("Apples are nice computers with an exceptional interface. Vista will close the gap on the interface some but Apple still has the prettiest, most pleasing interface.\n\nI think Macs are evidentially superior due to its good taste and simplicity. They are very easy to use, use quality pieces, have a modern look in the outside and in the inside, thanks to Mac OS. Besides, Apple is considered to have one of the best support services available, not only due to their guaranty extension service, but also because they will not hesitate in repairing or replacing damaged goods.");
	});
	
	$('#pol_ex1').click();
});
</script>
