var Main = {};

Main.Canvas = document.getElementById('myCanvas');
Main.Context = Main.Canvas.getContext('2d');
Main.InqImage = new Image();
Main.InqImage.src = "dorian.jpg";
Main.MousePressed = false;
Main.MX = 0;
Main.MY = 0;

Main.Image = function(x, y, w, h)
{
	this.X = x;
	this.Y = y;
	this.Width = w;
	this.Height = h;

	this.DrawAsImage = function(image)
	{
		Main.Context.drawImage(image, this.X, this.Y, this.Width, this.Height);
	}
	
	this.IsSelected = function()
	{
		if (!Main.MousePressed) return false;
		var withinXAxisCoordinates = Main.MX > this.X && Main.MX < (this.X + this.Width);
		var withinYAxisCoordinates = Main.MY > this.Y && Main.MY < (this.Y + this.Height);
		return withinXAxisCoordinates && withinYAxisCoordinates;
	}
}
	
Main.Images = [
	new Main.Image(Main.MX + 25, 75, 120, 150),
	new Main.Image(Main.MX + 155, 75, 120, 150),
	new Main.Image(Main.MX + 285, 75, 120, 150),
	new Main.Image(Main.MX + 415, 75, 120, 150),
	new Main.Image(Main.MX + 545, 75, 120, 150),
	new Main.Image(Main.MX + 675, 75, 120, 150),
	new Main.Image(Main.MX + 805, 75, 120, 150),
	new Main.Image(Main.MX + 935, 75, 120, 150),
	new Main.Image(Main.MX + 1065, 75, 120, 150)
]

Main.Big = [
	new Main.Image(Main.MX + 25, 75, 126, 157),
	new Main.Image(Main.MX + 155, 75, 126, 157),
	new Main.Image(Main.MX + 285, 75, 126, 157),
	new Main.Image(Main.MX + 415, 75, 126, 157),
	new Main.Image(Main.MX + 545, 75, 126, 157),
	new Main.Image(Main.MX + 675, 75, 126, 157),
	new Main.Image(Main.MX + 805, 75, 126, 157),
	new Main.Image(Main.MX + 935, 75, 126, 157),
	new Main.Image(Main.MX + 1065, 75, 126, 157)
]

Main.Canvas.onmousemove = function(event)
{
	if (event.offsetX)
	{
		mouseX = event.offsetX;
		mouseY = event.offsetY;
	}
	else if (event.layerX)
	{
		mouseX = event.layerX;
		mouseY = event.layerY;
	}

	Main.MX = mouseX;
	Main.MY = mouseY;
}

Main.MouseUp = function(mouseEvent)
{
	Main.MousePressed = false;
}

Main.MouseDown = function(mouseEvent)
{
	Main.MousePressed = true;
}

Main.Animate = function()
{
	Main.Context.clearRect(0, 0, Main.Canvas.width, Main.Canvas.height);

	for (var i=0; i<Main.Images.length; i++)
	{
		if (Main.isSelected = true)
		{
			Main.Images[i].DrawAsImage(Main.InqImage);
		}
		else if (Main.isSelected = false)
		{
			Main.Big[i].DrawAsImage(Main.InqImage);
		}
	}
		
	Main.Context.font = "30px Arial";
	Main.Context.fillText("X: " + Main.MX + "  Y: " + Main.MY, 200, 250);

	requestAnimFrame(function() { Main.Animate(); });
}

window.requestAnimFrame = (function(callback)
{
	return window.requestAnimationFrame
	|| window.webkitRequestAnimationFrame
	|| window.mozRequestAnimationFrame
	|| window.oRequestAnimationFrame
	|| window.msRequestAnimationFrame
	|| function(callback) { window.setTimeout(callback, 1000 / 60); };
})();

$(document).ready(function()
{
	Main.Animate();
	Main.Canvas.addEventListener('mouseup', function(mouseEvent) { Main.MouseUp(mouseEvent); });
	Main.Canvas.addEventListener('mousedown', function(mouseEvent) { Main.MouseDown(mouseEvent); });
});