function Unroll()
{
	document.getElementByID("mod1").className = "exp-button1";
	document.getElementByID("mod2").className = "exp-button2";
	document.getElementByID("mod3").className = "exp-button3";
	document.getElementByID("mod4").className = "exp-button4";
}

$(document).ready(function ()
{
    $(".button").click(function ()
	{
		Unroll();
	});
});