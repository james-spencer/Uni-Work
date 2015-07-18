<?php
//Declare the variables
$validated_firstnum = null;
$validated_secondnum = null;
//Take input from the HTML form
$arr_input_tainted = $_POST;
$tainted_firstnum = $arr_input_tainted['firstnum'];
$tainted_secondnum = $arr_input_tainted['secondnum'];
//Sanitise and Validate the inputs
$sanitised_firstnum = filter_var($tainted_firstnum, FILTER_SANITIZE_NUMBER_INT);
$validated_firstnum = filter_var($sanitised_firstnum, FILTER_VALIDATE_INT,
    array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 1000)));
$sanitised_secondnum = filter_var($tainted_secondnum, FILTER_SANITIZE_NUMBER_INT);
$validated_secondnum = filter_var($sanitised_secondnum, FILTER_VALIDATE_INT,
    array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 1000)));
//Calculate the sum of the inputs
$sum = $validated_firstnum + $validated_secondnum;
//See which input is larger
if ($validated_firstnum < $validated_secondnum)
{
    $str_out = 'is less than';
}
else
{
    $str_out = 'is greater than';
}
//Begin the HTML output
$output_page = <<< HTMLOUTPUT
<!DOCTYPE html PUBLIC "//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta httpequiv="ContentType" content="text/html; charset=utf8"/>
<meta name="Author" content="James Spencer" />
<title>Using Scalar Variables</title>
</head>
<body>
<h2>Using Scalar Variables</h2>
<p>Using scalar variables in a PHP program</p>
<p>First number is $validated_firstnum</p>
<p>Second number is $validated_secondnum</p>
<p>Summing them gives $sum</p>
<p>$validated_firstnum $str_out $validated_secondnum</p>
</body>
</html>
HTMLOUTPUT;
// output the result
echo $output_page;
