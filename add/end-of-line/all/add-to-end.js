function Do() {
    var io = document.getElementById("ioArea");
    // Regex:
    io.value = io.value.replace(regEnd, regChar);
    // Copy to clipboard:
    io.select();
    document.execCommand("Copy");
    // Clear selection:
    if ( document.selection ) {
        document.selection.empty();
    } else if ( window.getSelection ) {
        window.getSelection().removeAllRanges();
    }
    // Display 'copied' popup:
    document.getElementById("copied-popup").classList.remove('invisible');
    document.getElementById("copied-popup").classList.add('fade-in');
    // Append another 'do it'
    document.getElementById('DoIt').innerHTML += " do it";
    // Prevent from clearing after submit:
    event.preventDefault();
    // Prevent page reload on some browsers:
    return false;
}

// Benjamin Glitsos © 2018
