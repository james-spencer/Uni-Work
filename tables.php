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
    $validated_multiplier = null;
    $validated_number_base = null;

    $arr_input_tainted = $_POST;
    $tainted_number_base = $arr_input_tainted['base'];
    $tainted_multiplier = $arr_input_tainted['multiplier'];

    $sanitised_number_base = filter_var($tainted_number_base, FILTER_SANITIZE_NUMBER_INT);
    $validated_number_base = filter_var($sanitised_number_base, FILTER_VALIDATE_INT,
        array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 1000)));
    $sanitised_multiplier = filter_var($tainted_multiplier, FILTER_SANITIZE_NUMBER_INT);
    $validated_multiplier = filter_var($sanitised_multiplier, FILTER_VALIDATE_INT,
        array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 500)));

    if ($validated_number_base == -1 || $validated_multiplier == -1)
    {
        $output_table = 'An invalid base or multiplier value was entered';
    }
    else
    {
    // for loops go here
        //process he output and store in an array
        for ($lcv = 1; $lcv <= $validated_number_base; $lcv++)
        {
            $arr_answers[$lcv] = $lcv * $validated_multiplier;
        }

        //now create the output table in HTML
        for ($lcv = 1; $lcv <= $validated_number_base; $lcv++)
        {
            $output_table .= '<tr>';
            $output_table .= '<td width="25" align="right">' . $lcv . '</td>';
            $output_table .= '<td width="20" align=center>x</td>';
            $output_table .= '<td width="25" align="right">' . $validated_multiplier . '</td>';
            $output_table .= '<td width="20" align=center>=</td>';
            $output_table .= '<td width="40" align="right">' . $arr_answers[$lcv] . '</td>';
            $output_table .= '</tr>';
        }
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
<table border ="2">
$output_table
</table>
</body>
</html>
HTMLOUTPUT;
    //output the result
    echo $output_page;

