window.onload = function Load() //On load of the page, all static elements get removed and replaced by dynamic ones.
{
	var newdiv = document.createElement('div');
	var footer = document.getElementsByClassName("footer")[0];
	var porcupine = document.getElementsByClassName("porcupine-image")[0];
	var imageText = CreateDiv("Click here to learn more!", "bold");
	var field = CreateDiv("Enter your email to receive more information about Libertarianism:", "bold");
	porcupine.appendChild(imageText);
	footer.appendChild(field);
	
	newdiv.innerHTML = "<input type='text' value='Enter e-mail' onchange='TextInputChanged(this)'/>";
    footer.appendChild(newdiv);
	
	var mascot = document.getElementsByClassName("mascot-with-text")[0];
	mascot.parentNode.removeChild(mascot);	
	
	var oldtext = document.getElementsByClassName("noscript")[0];
	oldtext.parentNode.removeChild(oldtext);
}

function CreateDiv(text, className)
{
    var newDiv = document.createElement("div");    
    newDiv.className = className;
    newDiv.innerHTML = text;
    return newDiv;
}

var dynamicObject = {};
dynamicObject.Incoming = "Check your inbox soon and learn more!";

function ToggleMascot()
{
	var toggleOff = document.getElementsByClassName("porcupine-image");
	var toggleOn = document.getElementsByClassName("mascot-image");
	var porcupineText = document.getElementsByClassName("porcupine-text");
	
	var newText;
	
	if (toggleOff.length > 0)
	{
		newText = "The now-famous Democratic donkey was first associated with Democrat Andrew Jackson's 1828 presidential campaign. His opponents called him a jackass (a donkey), and Jackson decided to use the image of the strong-willed animal on his campaign posters. Later, cartoonist Thomas Nast used the Democratic donkey in newspaper cartoons and made the symbol famous. Nast invented another famous symbol; the Republican elephant. In a cartoon that appeared in Harper's Weekly in 1874, Nast drew a donkey clothed in lion's skin, scaring away all the animals at the zoo. One of those animals, the elephant, was labeled 'The Republican Vote.' That's all it took for the elephant to become associated with the Republican Party.";
		toggleOff[0].className = "mascot-image";
	}
	else if (toggleOn.length > 0)
	{
		newText = "Every political party in the United States has their mascot animal, and so does the Libertarian party. Libertarians have chosen a porcupine as their mascot and not without a good reason. Just like a porcupine, Libertarians want to leave you alone, and themselves be left alone. But, when faced with a threat, they will show their quills.";
		toggleOn[0].className = "porcupine-image";
	}
	
	porcupineText[0].innerHTML = newText;
	
};

var alertUpdateDataFunction = function(field, input, message)
{
	message.innerHTML = dynamicObject.Incoming;
	field.removeChild(input);
};

function TextInputChanged(input)
{
	var field = document.getElementsByClassName("field")[0];
	var message = document.getElementsByClassName("footer")[0];
	alertUpdateDataFunction(field, input, message);
};