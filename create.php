<?php

$content_directory = __DIR__ . '/content/';

$files_and_folders_array = [

    [
        "folder" => $widgetname_underscored,
        "file" => $widget_file,
        "content" => "widget.php",
    ],
    [
        "folder" => $tpl_folder,
        "file" => $tpl_file,
        "content" => "tpl.html",
    ],
    [
        "folder" => $css_folder,
        "file" => $css_file,
        "content" => "style.css",
    ],
    [
        "folder" => $js_folder,
        "file" => $js_file,
        "content" => "script.js",
    ],

];

foreach ($files_and_folders_array as $item) {
    mkdir($item['folder'], 777);
    $file = fopen($item['file'], "w");
    $content = file_get_contents($content_directory . $item['content']);
    foreach ($replacements as $key => $replacement) {
        $pattern = "/{" . $key . "}/";
        $content = preg_replace($pattern, $replacement, $content);
    }
    fwrite($file, $content);

    fclose($file);
}
