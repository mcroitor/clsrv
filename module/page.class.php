<?php

class page {

    var $template;
    var $config;
    var $conn;

    function __construct(db $conn) {
        $this->conn = $conn;
        $this->config = [];
        $theme = isset($this->config["theme"]) ? $this->config["theme"] : "default";
        $this->template = file_get_contents(ROOTPATH . "./themes/{$theme}/index.tpl.php");
    }

    function html() {
        $data = [
            "<!-- page-title -->" => "",
            "<!-- page-scripts -->" => _script("jquery-3.2.1.min", "./scripts/"),
            "<!-- page-styles -->" => "",
            "<!-- page-header -->" => "Page title",
            "<!-- page-nav -->" => "",
            "<!-- page-main -->" => "Welcome!",
            "<!-- page-aside -->" => "",
            "<!-- page-footer -->" => ""
        ];
        return fill_template($this->template, $data);
    }

}
