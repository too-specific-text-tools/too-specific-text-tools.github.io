<?php

// Data =========================
$userVars = array(
    "full stop"          => array("char" => ".", "b_tags"      => array("Period")),
    "comma"              => array("char" => ",", "b_tags"      => array("Comma Separated", "Delimited", "CSV")),
    "semicolon"          => array("char" => ";", "b_tags"      => array("PHP")),
    "colon"              => array("char" => ":", "b_tags"      => array("")),
    "space"              => array("char" => " ", "b_tags"      => array("")),
    "non-breaking space" => array("char" => " ", "b_tags"      => array("No-Break Space", "NBSP", "&nbsp;", "Hard Space")),
    "tab"                => array("char" => "\t", "b_tags"     => array("Tab Delimited", "Separated")),
    "question mark"      => array("char" => "?", "b_tags"      => array("")),
    "exclamation mark"   => array("char" => "!", "b_tags"      => array("")),
    "hyphen"             => array("char" => "-", "b_tags"      => array("Dash", "Minus")),
    "en-dash"            => array("char" => "–", "b_tags"      => array("Dash")),
    "em-dash"            => array("char" => "—", "b_tags"      => array("Dash")),
    "underscore"         => array("char" => "_", "b_tags"      => array("")),
    "forward slash"      => array("char" => "/", "b_tags"      => array("Slash")),
    "backslash"          => array("char" => "\\", "b_tags"     => array("Backwards Slash")),
    "tilde"              => array("char" => "~", "b_tags"      => array("")),
    "line feed"          => array("char" => "\\n", "b_tags"    => array("New Line", "Line Feed", "UNIX", "Linux", "Return", "Enter", "Line Ending", "Line Feed", "LF")),
    "carriage return"    => array("char" => "\\r", "b_tags"    => array("Mac", "Return", "Enter", "Line Ending", "CR")),
    "newline"            => array("char" => "\\n\\r", "b_tags" => array("Windows", "WinDOS Return", "Enter", "Line Ending", "CRLF", "CR", "LF", "New Line")),
    "line break tag"     => array("char" => "<br>", "b_tags"   => array("<br>, BR tag")),
    "plus"               => array("char" => "+", "b_tags"      => array("")),
    "equals sign"        => array("char" => "=", "b_tags"      => array("Equals")),
    "shocked emoji"      => array("char" => "😮", "b_tags"     => array("Surprised", "Open Mouth")),
    "heart emoji"        => array("char" => "❤️", "b_tags"      => array("Love Heart", "Red Heart")),
);

// Page Types =========================

$linePos = array(
    "start-of-line" => array("pos" => "start", "regVar" => "/" . "\$" . "/" . "gm;" . "\n"),
    "end-of-line"   => array("pos" => "end",   "regVar" => "/" . "^" . "/" . "gm;" . "\n"),
);

// Index variables =========================
$indexArray = array();

foreach($linePos as $l_key => $l_value) {
    $indexArray[$l_key] = "";
}

$index_description = "text editing tools that do exactly the thing that you want";
$Index_description = ucfirst($index_description);
$i_name            = $linePos[$l_key]["regVar"];
$i_Name            = ucwords($i_name);

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
$d_tags = array("Text", "Copy", "Paste", "Clipboard", "Automatic", "Instant", "Instantly", "Web", "App", "Javascript", "Free", "Editing", "Regex", "Regular Expressions", "Programming", "Software", "Find", "Replace", "Find And Replace", "Website", "String", "Manipulation", "Form", "Client-Side", "One Click");
$e_tags = array("Microsoft Word", "Text Editor", "Windows", "Mac", "PC", "Mobile", "iPhone", "Android", "Vim", "Emacs", "Atom", "Notepad++", "Notep2d", "Eclipse");

// Metatags function =========================

function genMetatags() {

    global $Name;
    global $b_tags;
    global $c_tags;
    global $d_tags;
    global $e_tags;

    shuffle($b_tags);
    shuffle($c_tags);
    shuffle($d_tags);
    shuffle($e_tags);

    $a_slice = $a_tags = array($Name);
    $b_slice = $b_tags;
    $c_slice = array_slice($c_tags, 0, 6);
    $d_slice = array_slice($d_tags, 0, 4);
    $e_slice = array_slice($e_tags, 0, 2);

    $metalist = array_merge($a_slice,  $b_slice,  $c_slice,  $d_slice,  $e_slice);
    shuffle($metalist);

    $GLOBALS['metastring'] = "\"" . implode(", ", $metalist) . "\"";

}

// Snippets =========================
$brandName = "Too Specific Text Tools";
$domain = "https://too-specific-text-tools.github.io";

$declarations = <<<DECLARATIONS
<!doctype html>
<html lang="en">
DECLARATIONS;

$gtags = <<<GTAGS
<!-- Global site tag (gtag.js) - Google Analytics -->
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
<link rel="stylesheet" href="$domain/tools.css" type="text/css">
STYLES;

$logo = <<<LOGO
<h1><a href="$domain">Too Specific <span class="logo-subheading">Text Tools</span></a></h1>
LOGO;

$home_link = <<<HOME
<a href="$domain">&#171; Home</a>
HOME;

$copyright = <<<COPYRIGHT
<!-- Benjamin Glitsos $copy_date -->
COPYRIGHT;

// Loops =========================

foreach($userVars as $u_key => $u_value) {
    foreach($linePos as $l_key => $l_value) {

        $name   = $u_key;
        $char   = $userVars[$u_key]["char"];
        $b_tags = $userVars[$u_key]["b_tags"];

        $Name        = ucwords($name);
        $names       = $name . "s";
        $NameChar    = $Name . " (" . htmlspecialchars($char) . ")";
        if (preg_match('/^[aeiou]/i', $NameChar)) {$NameChar = "n " . $NameChar;}

        $pageNameDir = "add/" . $l_key . "/all/" . str_replace( " ", "-", $name) . ".html";

        // Regex =========================
        $regPos  = $linePos[$l_key]["regVar"];
        $regChar = "\"" . $char . "\"" .";";

        // Page Metatags =========================

        genMetatags();

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
<meta name="description" content="Adds one or more $names at the $i_name of each line of text">
$meta
<meta name="keywords" content=$metastring>
$styles
<script type="text/javascript">
var regPos  = $regPos
var regChar = $regChar
</script>
<script src="$domain/add/end-of-line/all/add-to-end.js"></script>
<title>Add A $NameChar To The $i_Name Of Each Line Automatically Online - $brandName</title>
</head>
<body>
<div class="centered-body">
$logo
<h2>Add A $NameChar To The $i_Name Of Each Line</h2>
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

        // Make Index lists =========================

        $indexArray[$l_key] .= "<li><a href=\"$domain/" . $pageNameDir .  "\">" . $Name . " (" . htmlspecialchars($char) . ")" . "</a></li>" . "\n";

    }
}

// Index Metatags =========================

genMetatags();

// Index =========================
$indexString = <<<INDEX
$declarations
<head>
$gtags
<meta name="description" content=$Index_description>
$meta
<meta name="keywords" content=$metastring>
$styles
<link rel="stylesheet" href="$domain/index.css" type="text/css">
<title>$brandName</title>
</head>
<body>
<div class="centered-body">
$logo
<h2>Online $index_description</h2>
<ul>
<li>Add<ul>
<li>To the start of lines<ul>
<li>All lines<ul>
{$indexArray["start-of-line"]}
</ul></li>
</ul></li>
<li>To the end of lines<ul>
<li>All lines<ul>
{$indexArray["end-of-line"]}
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
