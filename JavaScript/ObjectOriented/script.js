var Main = {};
//constructor for the object
Main.Dossier = function(firstName, lastName, occupation)
{
	this.FirstName = firstName;
	this.LastName = lastName;
	this.Occupation = occupation;
}
//a couple prototypes
Main.Dossier.prototype.SetFirstName = function(fname)
	{
		this.FirstName = fname;
	}
	
Main.Dossier.prototype.SetLastName = function(lname)
	{
		this.LastName = lname;
	}
	
Main.Dossier.prototype.SetOccupation = function(job)
	{
		this.Occupation = job;
	}
//creating a few entries with the constructor
Main.Garrus = new Main.Dossier("Garrus", "Vakarian", "n/a");
Main.Mordin = new Main.Dossier("Mordin", "Solus", "n/a");
Main.TaliZorah = new Main.Dossier("TaliZorah", "vas Normandy", "Engineer");
Main.Thane = new Main.Dossier("n/a", "n/a", "n/a");
//modifying the entries
Main.Garrus.SetOccupation("Vigilante");
Main.Mordin.SetOccupation("Scientist");
Main.Thane.SetFirstName("Thane");
Main.Thane.SetLastName("Krios");
Main.Thane.SetOccupation("Assassin");
//creation function prototype
Main.Dossier.prototype.GetData = function()
{
	return this.FirstName + " " + this.LastName + ", " + this.Occupation;
}
//script to reveal the text added to practice jQuery a bit
$(document).ready(function ()
{
	$(".normandy").click(function ()
	{
		document.body.innerHTML += "<br/>"; //quick and dirty way to add an extra space between image and text
		document.body.innerHTML += Main.Garrus.GetData();
		document.body.innerHTML += "<br/>";
		document.body.innerHTML += Main.TaliZorah.GetData();
		document.body.innerHTML += "<br/>";
		document.body.innerHTML += Main.Mordin.GetData();
		document.body.innerHTML += "<br/>";
		document.body.innerHTML += Main.Thane.GetData();
	});
});