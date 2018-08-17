<?php

$widgetname = $_POST['widgetname'];
$description = isset($_POST['description']) ? $_POST['description'] : '';
$widgetname_lower = strtolower($widgetname);
$widgetname_underscored = preg_replace('/\s+/', '_', $widgetname_lower);
$widgetname_hyphened = preg_replace('/\s+/', '-', $widgetname_lower);
$widgetname = ucwords($widgetname_lower);
$widgetclass = preg_replace('/\s+/', '_', $widgetname);

$css_folder = $widgetname_underscored . '/' . 'css';
$js_folder = $widgetname_underscored . '/' . 'js';
$tpl_folder = $widgetname_underscored . '/' . 'tpl';

$css_file = $css_folder . '/'.$widgetname_hyphened.'.css';
$js_file = $js_folder . '/'.$widgetname_hyphened.'.js';
$tpl_file = $tpl_folder . '/template.php';
$widget_file = $widgetname_underscored . '/' . $widgetname_underscored . '.php';

$replacements = [
    "author" => "Alaksandar Jesus Gene",

    "author_uri" => "alaksandarjesus@yahoo.co.in",

    "email" => "alaksandarjesus@yahoo.co.in",

    "widgetname" => $widgetname,

    "widgetclass" => $widgetclass,

    "description" => $description,

    "widgetname_underscored" => $widgetname_underscored,

    "widgetname_hyphened" => $widgetname_hyphened

];
