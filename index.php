<?php 
ob_start(); 
require_once('docs/index.html'); 
$out = ob_get_clean();
header('Content-type: text/html; charset=utf-8');
header('X-Content-Generator: github-templates');
echo($out);
exit;
