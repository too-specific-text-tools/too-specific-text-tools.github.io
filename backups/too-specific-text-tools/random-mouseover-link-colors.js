var colors = ["White", "Yellow", "Fuchsia", "Red", "Silver", "Gray", "Olive", "Purple", "Maroon", "Aqua", "Lime", "Teal", "Green", "Blue", "Navy", "Black"];
var prevbg = null;
var prevcl = null;

function rancolorgen() {
    var rancolor = colors[Math.floor(Math.random() * colors.length)];
    return rancolor
}

$("a").not(".no_rancolors").mouseenter(function() {
    while (randbg == randcl || randbg == prevbg || randcl == prevcl) {
        var randcl = rancolorgen();
        var randbg = rancolorgen();
    }
    prevbg = randbg
    prevcl = randcl
    $(this).css("background-color", randbg);
    $(this).css("color", randcl);
});

$("a").mouseleave(function() {
    $(this).css("background-color", "");
    $(this).css("color", "");
});
