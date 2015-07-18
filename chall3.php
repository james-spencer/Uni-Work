<?php
//Declare the variables
$arr_nos = array();
$validated_min_num = null;
$validated_max_num = null;
$validated_how_many = null;
$output_table = null;
//Take input from the HTML form
$arr_input_tainted = $_POST;
$tainted_min_num = $arr_input_tainted['min_num'];
$tainted_max_num = $arr_input_tainted['max_num'];
$tainted_how_many = $arr_input_tainted['how_many'];
//Sanitise and Validate the inputs
$sanitised_min_num = filter_var($tainted_min_num, FILTER_SANITIZE_NUMBER_INT);
$validated_min_num = filter_var($sanitised_min_num, FILTER_VALIDATE_INT,
    array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 1000)));
$sanitised_max_num = filter_var($tainted_max_num, FILTER_SANITIZE_NUMBER_INT);
$validated_max_num = filter_var($sanitised_max_num, FILTER_VALIDATE_INT,
    array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 1000)));
$sanitised_how_many = filter_var($tainted_how_many, FILTER_SANITIZE_NUMBER_INT);
$validated_how_many = filter_var($sanitised_how_many, FILTER_VALIDATE_INT,
    array("options"=>array("default"=>-1, "min_range => 0", "max_range" => 50)));

if ($validated_min_num == -1 || $validated_max_num == -1 || $validated_how_many == -1)
{
    $output_table = 'An invalid number was entered';
}
else {
    // for loops go here
    //process he output and store in an array
    for ($lcv = 1; $lcv <= $validated_how_many; $lcv++)
    {
        $arr_nos[$lcv] = generate_random_number($validated_min_num, $validated_max_num);
    }

    //now create the output table in HTML
    for ($lcv = 1; $lcv <= $validated_how_many; $lcv++)
    {
        $output_table .= '<tr>';
        $output_table .= '<td width="25" align="center">' . $lcv . '</td>';
        $output_table .= '<td width="20" align=center>-</td>';
        $output_table .= '<td width="25" align="right">' . $arr_nos[$lcv] . '</td>';
        $output_table .= '</tr>';
    }
}
    $output_page = null;
    // function to generate a random number between passed limits
    function generate_random_number($p_min, $p_max) // formal parameters
    {
        $m_rand_num = rand($p_min, $p_max);
        return $m_rand_num;
    }

   // $random_number_one = generate_random_number($validated_min_num, $validated_max_num); // actual parameters
   // $random_number_two = generate_random_number($validated_min_num, $validated_max_num); // actual parameters

$output_page = <<< HTMLOUTPUT
<!DOCTYPE html PUBLIC "//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta httpequiv="ContentType" content="text/html; charset=utf8"/>
<meta name="Author" content="James Spencer" />
<title>Function example</title>
</head>
<body>
<h2>Function example</h2>
<table border="2">
$output_table
<p></p>
</body>
</html>
HTMLOUTPUT;
// output the result
echo $output_page;