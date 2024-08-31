<?php
include_once __DIR__ . '/../src/Html.php';
$data = include_once __DIR__ . '/example.site.php';
$html = \RapTToR\HTML::generateHTML(["column" => $data]);
if (file_exists("./style.css")) $html .= '<style>' . file_get_contents("./style.css") . '</style>';
file_put_contents("example.html", $html);
echo $html;
