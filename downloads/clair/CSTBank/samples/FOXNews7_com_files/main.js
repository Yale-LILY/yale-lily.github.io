var banner_num = 0;
var openId="none";
var doCheck = (document.all!=null);

if (doCheck == false) {
	versionNN = navigator.appVersion;
	if (versionNN.search(/5.0/i) == -1) {
		browser = "NN4";
	} else {
		browser = "NN6";
	}
} else {
	browser = "IE";
}

navimgNames = new Array(
"/images/left_nav/nav_on_business.gif",
"/images/left_nav/nav_on_contact.gif",
"/images/left_nav/nav_on_finder.gif",
"/images/left_nav/nav_on_foxfan.gif",
"/images/left_nav/nav_on_foxlife.gif",
"/images/left_nav/nav_on_international.gif",
"/images/left_nav/nav_on_sports.gif",
"/images/left_nav/nav_on_politics.gif",
"/images/left_nav/nav_on_schedule.gif",
"/images/left_nav/nav_on_shows.gif",
"/images/left_nav/nav_on_team.gif",
"/images/left_nav/nav_on_topstories.gif",
"/images/left_nav/nav_on_views.gif",
"/images/left_nav/nav_on_weather.gif"
)

loadNavImgs = new Array();

for(i=0; i < navimgNames.length; i++) {
  loadNavImgs[i] = new Image;
  loadNavImgs[i].src = navimgNames[i];
}

function rollOver(name) {
	document.images[name].src = "/images/left_nav/nav_on_"+name+".gif";
}

function rollOut(name) {
	document.images[name].src = "/images/left_nav/nav_off_"+name+".gif";
}

function getLayer(id) {        
   	if (browser == "IE")
   		return document.all[id];
   	else if (browser == "NN4")
		return document.layers[id];
	else
		return document.getElementById(id); 	
}

function showLayer(id) {        
   var get = getLayer(id)
   if (get != null)          
     	if (browser == "IE" || browser == "NN6")
         	get.style.visibility = "visible";
      	else if (browser == "NN4")
         	get.visibility = "show";
}     
  
function hideLayer(id) {
	var get = getLayer(id)        
	if (get != null)        
      if (browser == "IE" || browser == "NN6")
         get.style.visibility = "hidden";
      else
         get.visibility = "hide";
}

function drillDown(id,div) {
	if (div == 'yes') {
		idDiv = id+'Div';
		if (openId == 'none') {
			showLayer(idDiv);
			rollOver(id);
			openId = id;
			openIdDiv = idDiv;
		} else {
			hideLayer(openIdDiv);
			rollOut(openId);
			showLayer(idDiv);
			rollOver(id);
			openId = id;
			openIdDiv = idDiv;
		}
	} else {
		if (openId == 'none') {
			rollOver(id);
		} else {
			hideLayer(openIdDiv);
			rollOut(openId);
			rollOver(id);
			openId = 'none';
		}
	}
}

function divRollover(name) {
	openId = name;
	openIdDiv = name+"Div";
	showLayer(openIdDiv);
	rollOver(openId);
}

function divRollout(name) {
	hideLayer(name+'Div');
	rollOut(name);
	openId = 'none';
	openIdDiv = 'none';
}

function closeBut(name) {
	hideLayer(name+'Div');
	rollOut(name);
	openId = 'none';
	openIdDiv = 'none';
}

function pop(mypage, myname, w, h, scroll,menu) {
	var winl = (screen.width - w) / 2;
	var wint = (screen.height - h) / 2;
	winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable=no';
	if (menu=='yes')
		winprops += ',menubar=yes,toolbar=yes,locationbar=yes';
		
	win = window.open(mypage, myname, winprops);
	  if ((window.navigator.appName.indexOf("Microsoft")==0) &
	      (window.navigator.appVersion.substring(0,1)=="4"))
	  {
	    damnBrowser = 1;
	  }
	  else if ((window.navigator.appName.indexOf("Netscape")==0) &
	           (window.navigator.appVersion.substring(0,1)=="4"))
	  {
	    damnBrowser = 1;
	  }
	  else if (parseFloat(navigator.appVersion.substring(0,navigator.appVersion.indexOf("")))>=3.0)
	  {
	    if ((window.navigator.appName.indexOf("Microsoft")=="0") &
	        (window.navigator.userAgent.indexOf("Mac")>=0) & (parseFloat(navigator.appVersion.substring(0,navigator.appVersion.indexOf("")))<4.0))
	    { }
	    else
	    {
	      win.focus();
	    }
	}
}

function isBlank(testString) {
	for	(var i = 0; i < testString.length; i++) {
		var c = testString.charAt(i);
		if ( (c != ' ') && (c != '\\n') && (c != '\\t') && (c != '\\r') )
			return false;
	}
	return true;
}

function isAlphaNumeric(testString) {
	for (var i = 0; i < testString.length; i++) {
		var c = testString.charAt(i);
		if ( (c < '0') || ((c > '9') && (c < 'A')) || ((c > 'Z') && (c < 'a')) || (c > 'z'))
			return false;
	}
	return true;
}

function isStandardLogin(testString) {
	for(var i = 0; i < testString.length; i++) {
		var c = testString.charAt(i);
		if ( ((c < '0') || ((c > '9') && (c < 'A')) || ((c > 'Z') && (c < 'a')) || (c > 'z')) && (c != '_') && (c != '-') )
			return false;
	}
	return true;
}

function emailvalidation(entered, alertbox) {
	with (entered) {
		apos=value.indexOf("@"); 
		dotpos=value.lastIndexOf(".");
		lastpos=value.length-1;
		if (apos<1 || dotpos-apos<2 || lastpos-dotpos>3 || lastpos-dotpos<2) {
			if (alertbox) {
				alert(alertbox);
			} 
			return false;
		} else {
			return true;
		}
	}
}

function formvalidation(thisform) {
	with (thisform)	{
		if (emailvalidation(target_address,"Please enter a valid email address")==false) {
			target_address.focus(); 
			return false;
		};
		if (emailvalidation(user_address,"Please enter a valid email address")==false) {
			user_address.focus(); 
			return false;
		};
	}
}

function mapPop(imageUrl,title,w,h) {
	if (doCheck && navigator.platform == "MacPPC"){
		w = w - 16;
		h = h - 16;
	}
	var dimensions = "width="+w+",height="+h; 
	var winName = title.replace(/ /g,""); 
	var title = title+" -- FOXNews.com"; 
	var win = window.open("",winName,dimensions); 
	var d = win.document; 
	d.writeln("<html>"); 
	d.writeln("<head><title>"+title+"</title></head>"); 
	d.writeln("<body marginheight=0 marginwidth=0 topmargin=0 leftmargin=0 onLoad=window.focus();>"); 
	d.writeln("<img src="+imageUrl+" border=0>"); 
	d.writeln("</body>"); 
	d.writeln("</html>"); 
	d.close(); 
}

function emailFriend() {
	if (document.emailFriend.byline.value == "none") {
		document.emailFriend.byline.value = "FOXNews";
	}
	if (window.location == "http://www.foxnews.com/story/0,2933,18502,00.html" || window.location == "http://www.foxnews.com/story/0,2933,20055,00.html") {
		document.emailFriend.date.value = "";
	}
	document.emailFriend.url.value = window.location;
	document.emailFriend.submit();
}

function videoPlayer(vidName,headline){
	var vidUrl = "/video/get_cookie.htm?"+vidName+"&"+headline;
	pop(vidUrl,'vidPlayer',340,480,'no','no');
}
