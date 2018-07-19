$(document).ready(function () {

    $("button").click(function ()
    {

        var outfield = document.getElementById("output"); //defined the output field to insert returned result into the apropriate place

        $.ajax
        ({
            url: "Home/GetPlayerInformation",

            data:
                {
                    PlayerNumber : $(".input").val()
                },

            success:
                function (result)
                {
                    result = JSON.parse(result);
                    outfield.innerHTML = (result.PlayerNumber + " - " + result.PlayerName); //parsed and formatted into an easy to read display within the result window
                }
        });
    });
});