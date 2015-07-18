<?php
/*
 * strings3.php
 *
 * Simple PHP script to demonstrate how to use foreach with strings
 */

    $output_table = null;
    $output_page = null;
    $arr_eastmids_counties = array('Derbyshire', 'Leicestershire', 'Lincolnshire',
                                   'Northamptonshire', 'Nottinghamshire', 'Rutland',
                                   'Warwickshire');

    /*foreach ($arr_eastmids_counties as $county_index => $county_name)
    {
        $output .= $county_index . ' - ' . $county_name . '<br />';
    }
*/
foreach ($arr_eastmids_counties as $county_index => $county_name)
{
    $output_table .= '<tr>';
    $output_table .= '<td width="25" align="center">' . $county_index . '</td>';
    $output_table .= '<td width="20" align=center>-</td>';
    $output_table .= '<td width="150" align="center">' . $county_name . '</td>';
    $output_table .= '</tr>';
}

    $output_page = <<< HTMLOUTPUT

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="James Spencer" />
<title>Counties of the East Midlands</title>
</head>
<body>
<h2>Counties of the East Midlands</h2>
<table border="2">
$output_table
</table>
</body>
</html>
HTMLOUTPUT;
    //output the result
    echo $output_page;

