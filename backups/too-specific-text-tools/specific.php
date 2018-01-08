<?php
# User Variables:
$name = "full stop";
$char = ".";
$b_tags = array("Period");

# Program Variables:
$Name = ucwords($name);
$names = $name . "s";
$Namechar = $Name . " (" . $char . ")";
$filename = str_replace(' ', '-', $name) . ".html";
ob_start();

?>
<!doctype html>
<html lang="en">
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88375382-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-88375382-4');
        </script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4712700669982453",
                enable_page_level_ads: true
            });
        </script><meta charset="utf-8">
        <meta name="description" content=<?php echo "\"Adds one or more $names at the end of each line of text\"" ?>>
        <meta name="keywords" content=<?php

        $a_tags = array("$Name");
        $b_tags = $b_tags;
        $c_tags = array("Add", "Insert", "Append", "End Of Line", "Each Line", "Every Line", "Online", "Automatically", "Tool");
        $d_tags = array("Text", "Copy", "Paste", "Clipboard", "Automatic", "Instant", "Instantly", "Web", "App", "Javascript", "Free", "Editing", "Regex", "Regular Expressions", "Programming", "Software", "Find", "Replace", "Find And Replace", "Website", "String", "Manipulation", "Form");
        $e_tags = array("Microsoft Word", "Text Editor", "Windows", "Mac", "PC", "Mobile", "iPhone", "Android", "Vim", "Emacs", "Atom", "Notepad++", "Notep2d", "Eclipse");
        echo "\"";

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

        $metalist = array_merge($a_slice,  $b_slice,  $c_slice,  $d_slice,  $e_slice);
        shuffle($metalist);

        $metastring = implode(", ", $metalist);
        echo $metastring;

        echo "\"";
        ?>>
        <meta name="author" content="Benjamin Glitsos">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://too-specific-text-tools.github.io/tools.css" type="text/css">
        <script type="text/javascript">
            var regEnd = <?php echo "/" . "\$" . "/" . "gm;" . "\n" ?>
            var regChar = <?php echo "\"" . $char . "\"" .";" . "\n" ?>
        </script>
        <script src="https://too-specific-text-tools.github.io/add/end-of-line/all/add-to-end.js"></script>
        <title>Add A <?php echo "$Namechar" ?> To The End Of Each Line Automatically Online</title>
    </head>
    <body>
        <div class="centered-body">
            <h1><a href="https://too-specific-text-tools.github.io">Too Specific <span class="logo-subheading">Text Tools</span></a></h1>
            <h2>Add A <?php echo "$Namechar" ?> To The End Of Each Line</h2>
            <form onsubmit="Do()">
                <div class="textarea-overflow-fix"><textarea id="ioArea"></textarea></div>
                <button type="submit" id="DoIt">do it</button>
            </form>
            <div id="copied-popup" class="invisible">Copied to clipboard &nbsp;<?php
            $dongers = array("ԅ༼ ◕ ڡ ◕ ༽ง", "s( ^ ‿ ^)-b", "( ͡° ͜ʖ ͡°)", "໒( • ͜ʖ • )७", "ʕ ﹒ ᴥ ﹒ ʔ", "\\(◕ ◡ ◕\\)");
            echo $dongers[array_rand($dongers)];
?> </div>
            <!-- ads -->
            <a href="https://too-specific-text-tools.github.io">« Home</a>
        </div>
    </body>
</html>

<!-- Benjamin Glitsos <?php echo html_entity_decode("&copy;", ENT_COMPAT, 'UTF-8') . " " . date("Y"); ?> -->
<?php

$htmlStr = ob_get_contents();
ob_end_clean();
file_put_contents($filename, $htmlStr);
?>
