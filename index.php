<?php
$html = file_get_contents(__DIR__ . '/home.html');

$html = str_replace('{$year}', date('Y'), $html);

echo $html;
