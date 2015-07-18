<?php
/*
 * strings2.php
 *
 * Simple PHP script to demonstrate how to structure your code to separate the processing
 * from the output, perform calculations and output the results
 */

    $arr_answers = array();
    $output_table = null;
    $output_page = null;
    $multiplier = 12;
    $number_base = 10;

    //process he output and store in an array
    for ($lcv = 1; $lcv <= $number_base; $lcv++)
    {
        $arr_answers[$lcv] = $lcv * $multiplier;
    }

    //now create the output table in HTML
    for ($lcv = 1; $lcv <= $number_base; $lcv++)
    {
        $output_table .= '<tr>';
        $output_table .= '<td width="25" align="right">' . $lcv . '</td>';
        $output_table .= '<td width="20" align=center>x</td>';
        $output_table .= '<td width="25" align="right">' . $multiplier . '</td>';
        $output_table .= '<td width="20" align=center>=</td>';
        $output_table .= '<td width="40" align="right">' . $arr_answers[$lcv] . '</td>';
        $output_table .= '</tr>';
    }

    //embed the output HTML table in the web page
    $output_page = <<< HTMLOUTPUT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="James Spencer" />
<title>Multiplication Table</title>
</head>
<body>
<h2>Multiplication Table</h2>
<table border ="10">
$output_table
</table>
</body>
</html>
HTMLOUTPUT;
    //output the result
    echo $output_page;

