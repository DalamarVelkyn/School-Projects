var LastPiece = {}
var CurrentPiece = {};

function SelectPiece() 
    /*after far too much time spent on this code I figured I am far too deep to get myself out and simplify it.
    This function works as follows: A piece once selected can be moved to an empty space, and it becomes deselected. 
    Furthermore, if the piece is moved onto a piece of another color, it is not deselected and can continue being moved
    to complete a chain. If a piece of the same color is selected, the new piece is now selected. If the same piece is 
    selected, the highlight disappears and nothing else happens, but unfortunately the same piece remains selected.
    At this point I believe this code meets all requirements (even if in a very messy fashion):
    1. If empty cell is clicked, nothing happens.
    2. If occupied cell is clicked, it is highlighted in orange.
    3. If a cell is selected, the next clicked cell receives the original piece, and the original is removed.
    4. If the same cell is selected again, the highlight goes away.
    5. If a piece is moved to a cell with another piece, that piece is destroyed, unless it is a piece of same color.*/
{
    var current = $(CurrentPiece);
    var last = $(LastPiece);

    if (current.attr("class") == "cell" && last.attr("class") == "cell piece red")
    {
        last.removeClass("cell piece red");
        last.addClass("cell");
        last.css("border", "1px solid black");
        current.addClass("cell piece red");
        last = this;
    }
    if (current.attr("class") == "cell" && last.attr("class") == "cell piece black")
    {
        last.removeClass("cell piece black");
        last.addClass("cell");
        last.css("border", "1px solid black");
        current.addClass("cell piece black");
        last = this;
    }
    if (current.attr("class") == "cell piece red" && last.attr("class") == "cell piece black")
    {
        last.removeClass("cell piece black");
        last.addClass("cell");
        last.css("border", "1px solid black");
        current.removeClass("cell piece red");
        current.addClass("cell piece black");
    }
    if (current.attr("class") == "cell piece black" && last.attr("class") == "cell piece red")
    {
        last.removeClass("cell piece red");
        last.addClass("cell");
        last.css("border", "1px solid black");
        current.removeClass("cell piece black");
        current.addClass("cell piece red");
    }
    if (current.attr("class") == "cell piece red" || current.attr("class") == "cell piece black")
    {
        current.css("border", "1px solid orange");
    }

    current.css("border", "1px solid orange");
    last.css("border", "1px solid black");
}

$(document).ready(function ()
{
    var cells = $(".cell");
    var colorCount = 0;

    for (var i = 0; i < cells.length; i++)
    {
        var cell = $(cells[i]);
        var isDark = colorCount % 2 == 0;
        var isNextRow = (i + 1) % 8 == 0;
        colorCount += isNextRow ? 2 : 1;
        cell.css("background-color", isDark ? "navy" : "white");
    }

    $(".cell").click(function ()
    {
        CurrentPiece = this;
        SelectPiece();
        LastPiece = this;
    });
});