$(function(){
	regHover();
	navHover();
	navCurrent();
});

function regHover(){
	$("a")
		.mouseenter(function(){
			addHover($(this));
		})
	.mouseleave(function(){
		removeHover($(this));
	});

}

function navHover(){
	$("div.navlink")
		.mouseenter(function(){
			var $this = $(this);
			addHover($this);
			altText($this);
		})
	.mouseleave(function(){
		var $this = $(this);
		removeHover($this);
		altText($this);
	});
}


function altText(jQ){
	jQ = jQ.children();
	var text = jQ.text();

	switch (text)
	{
		case "Contact":
			jQ.text("Call me beep me if you wanna reach me");
			break;
		case "Call me beep me if you wanna reach me":
			jQ.text("Contact");
			break;
		case "Doc":
			jQ.text("What's up, doc?");
			break;
		case "What's up, doc?":
			jQ.text("Doc");
			break;
		case "Kevin Granger":
			jQ.text("About Me");
			break;
		case "About Me":
			jQ.text("Kevin Granger");
			break;
		case "PHPlaything":
			jQ.text("RIT Only!");
			break;
		case "RIT Only!":
			jQ.text("PHPlaything");
			break;
	}

}

function addHover(jQ){ jQ.addClass("hover"); }

function removeHover(jQ){ jQ.removeClass("hover"); }

function navCurrent(){

	var page = $("title").text().split(":")[1];

	if (page === undefined)
	{
		page = "home";
	}
	else
	{
		page = page.trim().toLowerCase();
	}

	switch (page)
	{
		case "about me":
			homeSweetHome("navAbout");
			break;

		case "contact":
			homeSweetHome("navContact");
			break;

		case "phplaything":
		case "phplaythings":
		case "counter":
			homeSweetHome("navPhp");
			break;
		case "portfolio":
			homeSweetHome("navPort");
			break;
		case "documentation":
			homeSweetHome("navDoc");
			break;
		case "home":
			removeHomeLink();
		default:
			// I dunno lol.
	}

	function homeSweetHome(currentID){
		var $nav = $("#" + currentID);

		$nav.addClass("navCurrent");
	}

	function removeHomeLink(){
		$("#navHome").parent().remove();
	}
}
