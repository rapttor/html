<?php
include_once __DIR__ . '/../src/Html.php';
$data = include_once __DIR__ . '/example.site.php';
echo \RapTToR\HTML::generateHTML(["column" => $data]);
?>
<style>
    <?php if (file_exists("./style.css")) echo file_get_contents("./style.css"); ?>
</style>