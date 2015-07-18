<?php
//Declare the variables
$string = 'This is a string';
$integer = 159;
$float = 3.141592654;
$boolean = false;
$nothing = null;
//check for the value of the boolean variable
if ($boolean)
{
    $boolean_value = true;
}
else
{
    $boolean_value = false;
}
//Invert the boolean value
$inverted_boolean = !$boolean_value;
//Start the HTML page
$output_page = <<< HTMLOUTPUT
<!DOCTYPE html PUBLIC "//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta httpequiv="ContentType" content="text/html; charset=utf8"/>
<meta name="Author" content="James Spencer" />
<title>Data Types</title>
</head>
<body>
<h2>Data Types</h2>
<p>String: $string</p>
<p>Integer: $integer</p>
<p>Floatingpoint value: $float</p>
<p>Boolean value is: $boolean_value</p>
<p>Inverted Boolean value is: $inverted_boolean</p>
<p>Null: $nothing nothing here!</p>
</body>
</html>
HTMLOUTPUT;
// output the result
echo $output_page;