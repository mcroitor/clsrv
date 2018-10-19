<?php
/**
 * Function creates html-code reference to CSS.
 * @param string $style_name The name of style file/ Extension may be ommited.
 * @param string $path The path to style file.
 * @return string Html reference created.
 */
function _style(string $style_name, string $path) {
    $stylename = str_replace(".css", "", $style_name);
    return "<link rel='stylesheet' href='{$path}{$stylename}.css' />";
}

/**
 * Function creates html-code reference to script.
 * @param string $script_name The name of script file. Extension may be ommited.
 * @param string $path The path to script file.
 * @param string $type The type of script. Implicit is Javascript
 * @return string Html reference created.
 */
function _script(string $script_name, string $path, $type = 'javascript') {
    $scriptname = str_replace(".js", "", $script_name);
    return "<script type='text/{$type}' src='{$path}{$scriptname}.js'></script>";
}

/**
 * Function creates an html reference.
 * @param string $link Name of reference.
 * @param string $url Reference to page.
 * @param string $style CSS style of reference.
 * @return string Html reference created.
 */
function _link($link, $url = "#", $style = 'link') {
    return "<a href='$url' class='$style'>$link</a>";
}

/**
 * Fill template with data indicated in param $data
 * @param string $template
 * @param array $data An associative array, each pair is pattern => value
 * @return string
 */
function fill_template($template, array $data, $modifier = "**") {
    $html = $template;
    foreach ($data as $pattern => $value) {
        $p = str_replace("**", $pattern, $modifier);
        $html = str_replace($p, $value, $html);
    }
    return $html;
}
