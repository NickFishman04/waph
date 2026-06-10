<?php

$input = $_REQUEST['input'];

$input = preg_replace('/<\/?script[^>]*>/i', '', $input);
$input = str_ireplace('alert', '', $input);

if (stripos($input, 'alert') !== false) {
    echo json_encode(["error" => "No 'alert' is allowed!"]);
    exit;
}

echo $input;

?>
