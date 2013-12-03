
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=Content-type content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7, IE=9">
    <meta name="description" content="12.11.13">
     <meta name="keywords" content="The Survivor, 2299">
	 
<title>2299</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/assets/js/bbe160d01998eaa70d6b42091f1a10bd66.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/6326c898e08243230d8e2bce25db212dbd.css">

<script type='text/JavaScript'>
function cookieCheck() {
	var getcookies = document.cookie;
	var checkCookie = getcookies.indexOf("age_check=");

	if (checkCookie != -1) {
		var start = checkCookie + 19;
		var end = getcookies.indexOf(";",start);
		if (end==-1) end = getcookies.length;
		var userAge = getcookies.substring(start,end);
		userAge = unescape(userAge);
		var age = new Date(userAge);

		//age check, if false, redirect


		if (ageVerify(age)){
			var referrer = readCookie('age_check_referrer');

			if(referrer !== null) {
				eraseCookie('age_check_referrer');
				location.replace(referrer);
			} else {
				location.replace("country.html");
			}
		} else {
			location.replace("noentry.html");
		}
	}
}


function ageVerify(age) {
	var ageCheckDate = new Date();
	var ageCheckYear = ageCheckDate.getFullYear()-17;
	ageCheckDate.setHours(0); ageCheckDate.setMinutes(0); ageCheckDate.setSeconds(0);
	ageCheckDate.setFullYear(ageCheckYear);
	if (age < ageCheckDate) {
		return true;
	} else {
		return false;
	}
}

cookieCheck();

var cookieExpireDate = new Date();
var year = cookieExpireDate.getYear();
year = (year < 1900) ? year + 1900 : year;
cookieExpireDate.setYear(year + 17);

function my_setCookie(nam, val, expire, domain, path) {
	var cookie_str = "";
	cookie_str += nam + "=" + escape(val);
	cookie_str += "; expires=" + expire.toGMTString();
	document.cookie = cookie_str;
};
function setCookie() {
	var user_age = new Date();
	user_age.setMonth(document.agevalidate.agemon.options[document.agevalidate.agemon.selectedIndex].value-1);
	user_age.setDate(document.agevalidate.ageday.options[document.agevalidate.ageday.selectedIndex].value);
	user_age.setFullYear(document.agevalidate.ageyr.options[document.agevalidate.ageyr.selectedIndex].value);
	my_setCookie("age_check", user_age.toUTCString() , cookieExpireDate, ".thesurvivor2299.com", "/");
}

function checkDate() {
	var age = new Date();
	age.setMonth(document.agevalidate.agemon.options[document.agevalidate.agemon.selectedIndex].value-1);
	age.setDate(document.agevalidate.ageday.options[document.agevalidate.ageday.selectedIndex].value);
	age.setYear(document.agevalidate.ageyr.options[document.agevalidate.ageyr.selectedIndex].value);

	if ((document.agevalidate.ageday.options[document.agevalidate.ageday.selectedIndex].value != 0) && (document.agevalidate.agemon.options[document.agevalidate.agemon.selectedIndex].value !=0) && (document.agevalidate.ageyr.options[document.agevalidate.ageyr.selectedIndex].value != 0)) {
		setCookie();
		if (ageVerify(age)){
			var referrer = readCookie('age_check_referrer');

			if(referrer !== null) {
				eraseCookie('age_check_referrer');
				location.replace(referrer);
			} else {
				location.replace("country.html");
			}
		} else {
			location.replace("noentry.html");
		}
	}
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

function SliderLaunch(id) {

}

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16888428-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
            $(document).ready(function(){
                $(".vid-count").kkcountdown({
                	dayText		: ' ',
                	daysText 	: ' ',
                    hoursText	: ':',
                    minutesText	: ':',
                    secondsText	: '',
                    displayZeroDays : false,
                    callback	: function() {
                    <!--- 	$("vid-count").SliderLaunch(); -->
                    },
                    addClass	: ''
                });
            });
        </script>

</head>
<body style="background-color: black;">


<div id="content">
<span style="font-size: 40px; font-family: 'Monofonto';">KVNGR REV ALPHA PPS VT  PIZ UHMYLPVOQ CM XHWMZP. NBJB SPI'F BYQS QT D'Y BYFGEOB FI VQDYL MAQ. -NGQHT 5120-</span>
<br>
<span style="font-size: 40px; font-family: 'Monofonto';">Nuclear winter has come</span>



<div id="top"></div>
<div id="vid-count"> <span class="vid-count" data-seconds="734411"></span></div>
<div id="footer"><div class="vt-counterfooter"><img src="/assets/static/dccb3cd66b8405cf10e6a937eb8b23bfa9.png"></div></div>
</div>
<audio src="/radio/TI-529c94d1b9e57.mp3" autoplay loop>



<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 977315428;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "DXB3CITvxQcQ5MyC0gM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>


</body>
</html>
