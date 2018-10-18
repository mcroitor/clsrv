<?php

class page {

    var $page_tpl;
    var $config;
    var $conn;

    function __construct($conn) {
        $this->conn = $conn;
        $this->config = [];
        $theme = isset($this->config["theme"]) ? $this->config["theme"] : "default";
        $this->page_tpl = file_get_contents("./themes/{$theme}/index.tpl.php");
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
        return fill_template($this->page_tpl, $data);
    }

}
