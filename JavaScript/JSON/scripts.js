function createInquisition()
{
	return{
		"location" : "Skyhold",
		"organisation" : "Inquisition",
		"innercircle" : [
			{"firstName" : "Cassandra", "lastName" : "Pentaghast,", "occupation" : "Seeker"},
			{"firstName" : "Solas,", "lastName" : "", "occupation" : "Apostate"},
			{"firstName" : "Varric", "lastName" : "Tethras,", "occupation" : "Storyteller"},
			{"firstName" : "Iron Bull,", "lastName" : "", "occupation" : "Mercenary"},
			{"firstName" : "Blackwall,", "lastName" : "", "occupation" : "Grey Warden"},
			{"firstName" : "Vivienne,", "lastName" : "", "occupation" : "First Enchanter"},
			{"firstName" : "Cole,", "lastName" : "", "occupation" : "Spirit"},
			{"firstName" : "Dorian", "lastName" : "Pavus,", "occupation" : "Magister"},
			{"firstName" : "Sera,", "lastName" : "", "occupation" : "Troublemaker"},
			{"firstName" : "Cullen", "lastName" : "Rutherford,", "occupation" : "General"},
			{"firstName" : "Josephine", "lastName" : "Montilyet,", "occupation" : "Ambassador"},
			{"firstName" : "Leliana,", "lastName" : "", "occupation" : "Nightingale"}
		]
	};
}

function assembleInq(inq)
{
	alert(inq.location + " " + inq.organisation);
	
	for (var i=0; i<inq.innercircle.length; i++)
		{
			var member = inq.innercircle[i];
			var x = i + 1;
			document.body.innerHTML += "<br>" + x + ". " + member.firstName + " " + member.lastName + " " + member.occupation;
		}
}

$(document).ready(function()
{
	$(".button").click(function()
	{		
		var inq = createInquisition();
		assembleInq(inq);	
	});
});