<div style="height:280px;  padding: 5px 5px 5px 5px">
    <div id="desc">
    <p><span style="font-size:x-large">T</span>his demonstration presents <span style="color:lightblue">Discussion Analyzer</span>, a system for mining subgroups from online discussions. <span style="color:lightblue">Discussion Analyzer</span> is a system for analyzing threaded discussions and identifying the attitude of discussants towards one another and towards the discussion topic. The system uses attitude predictions to detect the split of discussants into subgroups of opposing views. 
</p>

<p> The system uses an unsupervised approach based on rule-based sentiment analysis and unsupervised clustering techniques. The system is open source and is freely available for download. </p>

<p>The system is designed for detecting subgroups in online discussions, but it can be used in different other applications such as: word polarity identification, attitude target identification, multiple viewpoint summarization, and estimate how disputed a discussion topic is.</p>
<p>
</div>
<!--<img id="introimg"  src="images/intro_icon.png" width="350px;" align="middle" /> -->

<div>
<h1> Start Here</h1>

<script language="javascript" type="text/javascript">
function startUpload(){
	$("#upload_area").css("display", "none");
	$("#upload_progress").css("display", "block");
}

function stopUpload(success){
	$('#upload_progress').css('display','none');
	if (success == 1){
		$('#upload_sucess').css('display','block');
	}else{
		$('#upload_failure').css('display','block');
	}
}
</script>

<div id="upload_area">

<h4> Upload a dicussion thread to analyze</h4>

<form action="http://clair.eecs.umich.edu/SubgroupDetector/upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();">
<input name="thread_file" type="file" style="width:170px" /> <input type="submit" value="Upload" />
</form>


<br /> <br  />

<h4>Or click <span style="color:white; text-decoration:underline; cursor:pointer" id="load_example">click here</span> to load an example thread.</h4>


</div>
<br />


<div id="upload_sucess" style="display:none">
	Thread Uploaded Sucessfully. <br />
    <a id="process_thread" href="intro.php#top" onclick="$('#upload_sucess').css('display','none');" style="color:lightgreen;"><h2>Process Thread Now</h2></a>
    or <br />
    <a href="index.php">Start Over</a> <br />
   
</div>

<div id="upload_failure" style="display:none">
	Failed to upload thread. <br />
	<a href="intro.php#top" onclick="$('#upload_failure').css('display','none'); $('#upload_area').css('display', 'block');">Start Over</a>
</div>

<div id="upload_progress" style="display:none">
	<img src="images/ajax-loader_1.gif" /><br />
    <span id = "msg">  </span>
</div>

<div id="processing_success" style="display:none">
	<h2 style="color:lightblue">Processing Done</h2>
    Navigate through the tabs to see the results of analysis <br />
    or <a id="start_over" href="index.php">Start Over</a>
</div>

<div id="processing_fail" style="display:none">
	<h2 style="color:lightblue">Processing Failed</h2>
    <a href="intro.php#top" onclick="$('#upload_failure').css('display','none'); $('#processing_fail').css('display','none'); $('#upload_area').css('display', 'block');">Start Over</a>
</div>

<iframe id="upload_target" name="upload_target" src="intro.php#" style="width:0;height:0;border:0px solid #fff;"></iframe>

</div>

<p>
  <script language="javascript" type="text/javascript">
$(document).ready(function()
{
	$('#process_thread').click(function(e) {
		$.ajax({
			  type: "POST",
			  url: "process_thread.php",
			  beforeSend: function(){
				  $("#msg").html("<br />Please be patient, processing may take few minutes");
				  $("#upload_progress").css("display","block");	
			  },
			  success: function(msg){
				  $("#upload_progress").css("display","none");
				  if(msg == "1"){
					  $("#processing_success").css("display","block");  
					  $("#tabs").tabs( "option", "disabled", [] );
				  }else{
					  $("#processing_fail").css("display","block");  
					  alert(msg);
				  }
			  }
		});
	});
	
	$('#load_example').click(function(e) {
		startUpload();
		$.ajax({
			  type: "POST",
			  url: "load_example.php",
			  success: function(msg){
				  stopUpload(1);
			  }
		});
	});
});
  </script>
  
  </p>
<p>&nbsp;</p>
<p>Examples: <a href="Examples/It_is_easier_to_maintain_good_relationships_in_social_networking_sites_such_as_Facebook.xml">example1</a> <a href="Examples/Rebuplicans_vs_Dems_on_tax_cuts.xml">example2</a> <a href="Examples/Should_health_care_be_free_in_the_U_S_A.xml">example3</a> <a href="Examples/Should_Puerto_Rico_become_a_State.xml">example4</a> <a href="Examples/Should_tobacco_be_banned.xml">example5</a></p>
</div>