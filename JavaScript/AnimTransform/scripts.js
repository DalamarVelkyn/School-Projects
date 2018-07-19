$(document).ready(function ()
{
	$(".body").click(function ()
	{
		$(".body2").css("transform", "matrix(1, 0, 0, 1, 0, 0)")
		$(".body").css("animation-name", "expand")
		$(".body").css("animation-duration", "5s")
		$(".body").css("animation-timing-function", "linear")
		$(".para").css("display", "none")
	
		setTimeout(expand, 5000);
		
		function expand()
		{
			$(".body").css("animation-name", "")
			$(".body").css("display", "none")
			$(".body2").css("display", "block")
			$(".closer").css("display", "block")
			$(".roller").css("display", "block")
			$(".middle").css("display", "block")
		};
	});
	
	$(".roller").click(function ()
	{
		$(".one").css("animation-name", "move1")
		$(".two").css("animation-name", "move2")
		$(".three").css("animation-name", "move3")
		$(".four").css("animation-name", "move4")
		$(".roller").css("animation-duration", "10s")
		$(".roller").css("animation-iteration-count", "infinite")
	});
	
	$(".closer").click(function ()
	{
		$(".body2").css("transform", "matrix(1, 0.5, 0.1, 1, 50, 120)")
		
		setTimeout(react, 10000);
		
		function react()
		{
			$(".body2").css("animation-name", "contract")
			$(".body2").css("animation-duration", "5s")
			$(".body2").css("animation-timing-function", "linear")
			$(".closer").css("display", "none")
			$(".roller").css("display", "none")
			$(".middle").css("display", "none")
		}
		
		setTimeout(contract, 15000);
		
		function contract()
		{
			$(".body2").css("animation-name", "")
			$(".body2").css("display", "none")
			$(".body").css("display", "block")
			$(".para").css("display", "block")
		};
	});		
});