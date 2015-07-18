<?php
/*
 * strings1.php
 *
 * Simple PHP script to demonstrate the us of HEREDOC and textareas features
 */

    $server = $_SERVER['HTTP_USER_AGENT'];
    $indent = "\n\t\t\t";

    $output_page = <<< HTMLOUTPUT

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="James Spencer" />
<title> Using Quotation marks and escape characters</title>
</head>
<body>
<h1>Strings in PHP</h1>
<h2>Using Quotation marks and escape characters</h2>
<p>Details from Browser:</p>
<p>$server<p>
<h2>Using a textarea</h2>
<textarea rows="3" cols="48">
"Utinam populus Romanus unam cervicem haberet!"
(Would that the Roman people had but one neck!)
$indent Caligula A.D 12-41
</textarea>
</body>
</html>
HTMLOUTPUT;
    //output the result
    echo $output_page;

