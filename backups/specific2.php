<?php

// Data =========================
$uservars = array(
    "full stop" => array("name" => "full stop", "char" => ".", "b_tags" => array("Period")),
    "comma" => array("name" => "comma", "char" => ",", "b_tags" => array("Comma Separated", "Delimited")),
    "semicolon" => array("name" => "semicolon", "char" => ";", "b_tags" => array("PHP")),
    "colon" => array("name" => "colon", "char" => ":", "b_tags" => array("")),
    "space" => array("name" => "space", "char" => " ", "b_tags" => array("")),
    "non-breaking space" => array("name" => "non-breaking space", "char" => " ", "b_tags" => array("No-Break Space, NBSP, &nbsp;, hard space")),
    "tab" => array("name" => "tab", "char" => "\t", "b_tags" => array("")),
    "question mark" => array("name" => "question mark", "char" => "?", "b_tags" => array("")),
    "exclamation mark" => array("name" => "exclamation mark", "char" => "!", "b_tags" => array("")),
    "hyphen" => array("name" => "hyphen", "char" => "-", "b_tags" => array("Dash, Minus")),
    "en-dash" => array("name" => "en-dash", "char" => "–", "b_tags" => array("Dash")),
    "em-dash" => array("name" => "em-dash", "char" => "—", "b_tags" => array("Dash")),
    "underscore" => array("name" => "underscore", "char" => "_", "b_tags" => array("")),
    "forward slash" => array("name" => "forward slash", "char" => "/", "b_tags" => array("Slash")),
    "backslash" => array("name" => "backslash", "char" => "\\", "b_tags" => array("Backwards Slash")),
    "tilde" => array("name" => "tilde", "char" => "~", "b_tags" => array("")),
    "line feed" => array("name" => "line feed", "char" => "\\n", "b_tags" => array("New Line, Line Feed, UNIX, Linux, Return, Enter, Line Ending, Line Feed, LF")),
    "carriage return" => array("name" => "carriage return", "char" => "\\r", "b_tags" => array("Mac, Return, Enter, Line Ending, CR")),
    "newline" => array("name" => "newline", "char" => "\\n\\r", "b_tags" => array("Windows, WinDOS Return, Enter, Line Ending, CRLF, CR, LF, New Line")),
    "line break tag" => array("name" => "line break tag", "char" => "<br>", "b_tags" => array("<br>, BR tag")),
    "plus" => array("name" => "plus", "char" => "+", "b_tags" => array("")),
    "equals sign" => array("name" => "equals sign", "char" => "=", "b_tags" => array("equals")),
    "shocked emoji" => array("name" => "shocked emoji", "char" => "😮", "b_tags" => array("Surprised, Open Mouth")),
    "heart emoji" => array("name" => "heart emoji", "char" => "❤️", "b_tags" => array("Love Heart, Red Heart")),
);

// Normalise line endings to UNIX format =========================
define('CR', "\r");          // Carriage Return: Mac
define('LF', "\n");          // Line Feed: Unix
define('CRLF', "\r\n");      // Carriage Return and Line Feed: Windows
define('BR', '<br>' . LF);   // HTML Break

function normalise($s) {
    $s = str_replace(CRLF, LF, $s);
    $s = str_replace(CR, LF, $s);
    $s = preg_replace("/\n{2,}/", LF . LF, $s); // Collapse consecutive blank lines
    return $s;
}
// Dongers =========================
$dongers = array("ԅ༼ ◕ ڡ ◕ ༽ง", "\\(◕ ◡ ◕\\)");
$donger = $dongers[array_rand($dongers)];

// Copyright =========================
$copy_date = html_entity_decode("&copy;", ENT_COMPAT, 'UTF-8') . " " . date("Y");

// Metatags =========================
$c_tags = array("Add", "Insert", "Append", "End Of Line", "Each Line", "Every Line", "Online", "Automatically", "Tool", "Browser");
$d_tags = array("Text", "Copy", "Paste", "Clipboard", "Automatic", "Instant", "Instantly", "Web", "App", "Javascript", "Free", "Editing", "Regex", "Regular Expressions", "Programming", "Software", "Find", "Replace", "Find And Replace", "Website", "String", "Manipulation", "Form", "Client-Side");
$e_tags = array("Microsoft Word", "Text Editor", "Windows", "Mac", "PC", "Mobile", "iPhone", "Android", "Vim", "Emacs", "Atom", "Notepad++", "Notep2d", "Eclipse");

// Snippets =========================
$brandName = "Too Specific Text Tools";

$declarations = <<<DECLARATIONS
<!doctype html>
<html lang="en">
DECLARATIONS;

$gtags = <<<GTAGS
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88375382-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-88375382-4');
</script>
GTAGS;

$meta = <<<META
<meta charset="utf-8">
<meta name="author" content="Benjamin Glitsos">
<meta name="viewport" content="width=device-width,initial-scale=1">
META;

$styles = <<<STYLES
<link rel="stylesheet" href="https://too-specific-text-tools.github.io/tools.css" type="text/css">
STYLES;

$logo = <<<LOGO
<h1><a href="https://too-specific-text-tools.github.io">Too Specific <span class="logo-subheading">Text Tools</span></a></h1>
LOGO;

$home_link = <<<HOME
<a href="https://too-specific-text-tools.github.io">&#171; Home</a>
HOME;

$copyright = <<<COPYRIGHT
<!-- Benjamin Glitsos $copy_date -->
COPYRIGHT;

// Page Loop =========================

foreach($uservars as $x => $x_value) {

$name   = $uservars[$x]["name"];
$char   = $uservars[$x]["char"];
$b_tags = $uservars[$x]["b_tags"];

$Name        = ucwords($name);
$names       = $name . "s";
$NameChar    = $Name . " (" . htmlspecialchars($char) . ")";
$pageNameDir = "add/end-of-line/all/" . str_replace( " ", "-", $name) . ".html";

// Regex =========================
$regEnd  = "/" . "\$" . "/" . "gm;" . "\n";
$regChar = "\"" . $char . "\"" .";" . "\n";

// Page Metatags =========================

$a_tags = array("$Name");
$b_tags = $b_tags;

shuffle($a_tags);
shuffle($b_tags);
shuffle($c_tags);
shuffle($d_tags);
shuffle($e_tags);

$a_slice = $a_tags;
$b_slice = $b_tags;
$c_slice = array_slice($c_tags, 0, 6);
$d_slice = array_slice($d_tags, 0, 4);
$e_slice = array_slice($e_tags, 0, 2);

$metalist       = array_merge($a_slice,  $b_slice,  $c_slice,  $d_slice,  $e_slice);
$index_metalist = array_merge($a_slice,  $c_slice,  $d_slice,  $e_slice);
shuffle($metalist);
shuffle($index_metalist);

$metastring = "\"" . implode(", ", $metalist) . "\"";
$index_metastring = "\"" . implode(", ", $index_metalist) . "\"";

// Page =========================
$pageString = <<<PAGE
$declarations
    <head>
        $gtags
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5491238978029001",
                enable_page_level_ads: true
            });
        </script>
        <meta name="description" content="Adds one or more $names at the end of each line of text">
        $meta
        <meta name="keywords" content=$metastring>
        $styles
        <script type="text/javascript">
            var regEnd  = $regEnd
            var regChar = $regChar
        </script>
        <script src="https://too-specific-text-tools.github.io/add/end-of-line/all/add-to-end.js"></script>
        <title>Add A $NameChar To The End Of Each Line Automatically Online - $brandName</title>
    </head>
    <body>
        <div class="centered-body">
            $logo
            <h2>Add A $NameChar To The End Of Each Line</h2>
            <form onsubmit="Do()">
                <div class="textarea-overflow-fix"><textarea id="ioArea"></textarea></div>
                <button type="submit" id="DoIt">do it</button>
            </form>
            <div id="copied-popup" class="invisible">Copied to clipboard &nbsp;$donger </div>
            <!-- ads -->
            $home_link
        </div>
    </body>
</html>

$copyright
PAGE;

// Make Page =========================

file_put_contents($pageNameDir, normalise($pageString));

};

// Index variables =========================
$index_description = "text editing tools that do exactly the thing that you want";
$Index_description = ucfirst($index_description);

$indexList = "";
foreach($uservars as $x => $x_value) {
    $indexList .= "<li><a href=\"https://too-specific-text-tools.github.io/add/end-of-line/all/" . str_replace( " ", "-", $uservars[$x]["name"]) . ".html\">" . ucwords($uservars[$x]["name"]) . " (" . htmlspecialchars($uservars[$x]["char"]) . ")" . "</a></li>" . "\n" . str_repeat(' ', 40);
};
$indexList = rtrim($indexList);

// Index Metatags =========================

shuffle($a_tags);
shuffle($c_tags);
shuffle($d_tags);
shuffle($e_tags);

$a_slice = $a_tags;
$c_slice = array_slice($c_tags, 0, 6);
$d_slice = array_slice($d_tags, 0, 4);
$e_slice = array_slice($e_tags, 0, 2);

$index_metalist = array_merge($a_slice,  $c_slice,  $d_slice,  $e_slice);
shuffle($index_metalist);

$index_metastring = "\"" . implode(", ", $index_metalist) . "\"";

// Index =========================
$indexString = <<<INDEX
$declarations
    <head>
        $gtags
        <meta name="description" content=$Index_description>
        $meta
        <meta name="keywords" content=$index_metastring>
        $styles
        <link rel="stylesheet" href="https://too-specific-text-tools.github.io/index.css" type="text/css">
        <title>$brandName</title>
        </head>
        <body>
            <div class="centered-body">
                $logo
                <h2>Online $index_description</h2>
                <ul>
                    <li>Add<ul>
                            <li>To the end of lines<ul>
                                    <li>All lines<ul>
                                        $indexList
                                    </ul></li>
                            </ul></li>
                    </ul></li>
                </ul>
            </div>
        </div>
    </body>
</html>

$copyright
INDEX;

// Make Index =========================

file_put_contents("index.html", normalise($indexString));

?>
