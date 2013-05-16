/* Populate Contact Information:
 * 
 * Scripted so scrapers shant spam.
 *
 * Inspired by Nate Buchar: http://natebuchar.me/
 */


$(document).ready(function(){
	call();
	me();
	maybe();
});

function call(){ 
	var ar = "516", three = "537", four = "8070";
	var text = "(" + ar + ") " + three + "-" + four;
	var link = "tel:" + ar + three + four;
	var $phoneLinks = $("div.phone > a");
	var $phoneText = $("div.phone > a > p");

	$phoneLinks.attr({
		href: link;
		      title: "Call Kevin Granger.";
	});
	$phoneText.text(text);
}

function me(){
	var k = "kmg", e = "2728", v = "@", i = "rit", n = ".edu";
	var text = k + e + v + i + n;
	var link = "mailto:" + text;
	var $mailLinks = $("div.email > a");
	var $mailText = $("div.email > a > p");

	$mailLinks.attr({
		href: link;
		      title: "email Kevin Granger.";
	});
	$mailText.text(text);
}

function maybe(){
	var h = "http://", f = "face", b = "book", tw = "twit", tr = "ter", c = ".com", fid = "kevin.granger", twh = "RIT_Kevin";
	var facepod = h + f + b + c + "/" + fid;
	var youTwit = h + tw + tr + c + "/" + twh;
	var $faceLinks = $("div.face > a");
	var $faceText = $("div.face > a > p");
	var $twitLinks = $("div.twit > a");
	var $twitText = $("div.twit > a > p");

	$faceLinks.attr({
		href: facepod;
		      title: "Kevin Granger's " + f + b;
	});
	$faceText.text(facepod);
	$twitLinks.attr({
		href: youTwit;
		      title: "Kevin Granger's " + tw + tr;
	});
	$twitText.text(twh);
}
