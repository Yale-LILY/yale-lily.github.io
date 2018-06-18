<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>The ACL Anthology Network (All About NLP)</title>
    <script language="javascript" src="scripts/jquery-1.6.4.min.js"> </script>
    <script language="javascript" src="scripts/jquery-ui-1.8.16.custom.min.js"></script>
    <script language="javascript" src="scripts/jquery.dataTables.min.js"></script>
    <script language="javascript" src="scripts/autocomplete_html.js"></script>
	<script language="javascript" src="scripts/jquery.colorbox.js"></script>
    <script language="javascript" src="scripts/venues.js"></script>
    <link href="css/demo_table_jui.css" type="text/css" rel="stylesheet" />
    <link href="css/jquery-ui-1.8.16.custom.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/colorbox.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div id="head"><table id="head_table" cellpadding="0" cellspacing="0">
<tr><td id="top_menue"> 
	<div class="top_button"><a class="popup" title="About AAN" href="about.php">About</a></div>
	<div class="top_button"><a class="popup" title="Contact Us" href="contact.php">Contact Us</a></div>
	<div class="top_button"><a href="index.php">Home</a></div>

</td></tr>
<tr>
	<td id="title_area">
	<span id="site_name">ACL Anthology Network (All About NLP)</span> <span style="color:#CCC">(beta)</span><br />
    <span id="site_sub_title">The Association Of Computational Linguistics Anthology Network</span>
    </td>
</tr>
</table></div>
<div class="body_container">
<div id="menu"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br />
<ul>
   	<li><span><a href="index.php">Home</a></li>
   	<li><span><a href="venues.php">Venues</a></li>
	<li><span><a href="authors.php">Authors</a></span></li> 
<!---	<li><span><a href="organizations.php">Organizations</a></span></li>
	<li><span>Tools</span></li>
	<li><span><a href="rankings.php">Rankings</span></li> -->
	<li><span><a href="networks.php">Networks</span></a></li>
	<li><span><a href="topics.php">Topics (WIP)</span></a></li>
	<li><span><a href="updates.php">Updates</span></a></li>
	<li><span><a href="about.php">About</a></span></li>
	<li><span><a class="popup" title="Contact Us" href="contact.php">Contact Us</a></span></li>
</ul>
</body>
</html></div>   
<div id="container">
<div class="box" id="searchbox"> 
<B>THIS SITE HAS MOVED: As of August 2017, this project has been greatly expanded and moved <A HREF=http://tangra.cs.yale.edu/newaan>here</A> as part of the new <A HREF="http://lily.yale.edu">LILY</A> group at <A HREF=http://cpsc.yale.edu/>Yale</A>.</B><BR>

<center>
<small>
    <div style="width:95%">
        <form id="searchform" action="search.php" method="get">
            <input type="text" id="search" class="ui-widget" name="q" style="width:80%" />
            <input type="submit" value="Search" /> <br />
            All <input type="radio" id="searchall" name="searchfor" value="all" checked="checked" /> &nbsp &nbsp
            Paper Title<input type="radio" id="searchtitle" name="searchfor" value="titles" /> &nbsp &nbsp
            Paper Fulltext <input type="radio" id="searchfulltext" name="searchfor" value="fulltexts" />  &nbsp &nbsp
            institution <input type="radio" id="searchorganization" name="searchfor" value="Organization" /> &nbsp &nbsp
            Author <input type="radio" id="searchauthor" name="searchfor" value="authors" /> 
        </form>
    </div>
</small>
</center>
</div>

<div class="box" id="aansearch">
<h3>Search Using Google</h3>
<div id="cse-search-form" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.SHINY});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl(
      '015024048769455293103:dgszbwk8sks');

    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.enableSearchboxOnly("google_results.php");
    customSearchControl.draw('cse-search-form', options);
  }, true);
</script>
	
</div>

<div id="site_description" class="box"> 

<br>
<span style="font-size:x-large">W</span>elcome to the University of Michigan CLAIR Group's ACL Anthology Network (All About NLP) interface.


Here we have collected information regarding all of the papers included in the many ACL venues. From those papers, we have created several networks, including paper citation, author citation, and author collaboration. Click <a class="popup" title="About AAN" href="about.php">here</a> to learn more about the project.

The network is currently built using ACL papers. This includes all papers up to and including those published in 2014 which were successfully processed. Feel free to visit <a href="http://www.aclweb.org/anthology-new/">The ACL Anthology</a> to browse what is available.
<p></p>

</div>

<div id="download_release" class="box">

	
    	<div style="float:left">
        	<img height="30" src="images/download.png"/>
        </div>
        <div style="float:left; height:30px; margin-left:5px;"> 
       	  <a class="popup" title="Download AAN Dataset" href="download.php">Download AAN Current Release</a><br /><span style="font-size:9px; color:grey">Released Dec 2016</span>
        </div>
	<div style="clear:left; float:left; font-size:12px; margin-top:8px; width:55%">
        <ul style="list-style-type:circle"> 
            <li> More than 23k papers </li>
            <li> More than 350 venues </li>
            <li> More than 18k authors </li>
            <li> Citation Network </li>
            <!-- <li> Collaboration Network </li>-->
        </ul>
	</div>
    <div style="float:right">
    	<img width="120" src="images/aan_icon.png" />
    </div>
</div>

<div class="box" id="update">
	<h3>Latest Updates</h3>
	<ul>
        <li>December 2016</li>
            <b> After several years of dormancy, AAN updates are back with the 2014 release:</b> We have added 2070 new papers from 2014. The new paper are from: *SEM 2014, ACL 2014, COLING 2014, CoNLL 2014, EACL 2014, EMNLP 2014, INLG 2014, CL 2014, TACL 2014, and some workshops. Some papers 
            from EACL and EMNLP have not been fully annotated, to be fixed in an upcoming release.
        <li>December 2013</li>
                <b>2013 Release:</b> We have added 1,565 new papers to the anthology. The new papers are from the following venues: EMNLP 2013, ACL 2013, NAACL 2013, *SEM 2013, SIGDIAL 2013, CL Volume 39, TACL Volume 1 and all the ACL and NAACL workshops from 2013.
	</ul>
    <div style = "float:right"><a href="updates.php">History</a></div>
</div>

<div class="box" id="front_page_stats">

<img src="images/stats.jpg" style="float:left" /> <h3 style="float:left"> Statistics </h3>

<table width="95%" align="center">
<tr>
	<td>Number of papers</td><td>23766</td>
</tr>
<tr>
    <td>Number of authors</td><td>18862</td>
</tr>
<tr>
    <td>Number of venues</td><td>373</td>
</tr>
<tr>
    <td>Number of paper citations</td><td>124857</td>
</tr>
<tr>
    <td>Number of author collaborations</td><td>142,450</td>
</tr>
<tr>
    <td>Citation network diameter</td><td>22</td>
</tr>
<tr>
    <td>Collaboration network diameter</td><td>15</td>
</tr>
</table>
</div>

<div id="footer"><br /><center>

Copyright © <a href="http://www.umich.edu">University of Michigan</a> and the <a href="clair.si.umich.edu"> CLAIR </a> Group at the University of Michigan
<br>
<span style="font-size:small"></span>
</center></div>
</body>
</html>
