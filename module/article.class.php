<?php

include_once '../core/interfaces/mcapi.interface.php';

/**
 * _manage articles_
 * create:
 *      article::create
 */
class article implements mcapi {

    var $nr_articles;
    var $conn;
    var $template;

    function __construct(db $conn) {
        $this->conn = $conn;
        $this->nr_articles = 20; // $config["nr_articles"];
        $this->config = [];
        $theme = isset($this->config["theme"]) ? $this->config["theme"] : "default";
        $this->template = file_get_contents(ROOTPATH . "./themes/{$theme}/article.tpl.php");
    }

    function get($param) {
        if (empty($param)) {
            // return more articles!!!
            $articles = $this->conn->do_query(
                    "SELECT * FROM article_tbl LIMIT {$this->nr_articles}"
            );
            // do something!
        } else {
            // return specified article
            $id = (int) $param;
            $article = $this->conn->do_query(
                    "SELECT * FROM article_tbl WHERE article_id={$id} LIMIT 1"
            );
            if (empty($article)) {
               header("HTTP/1.0 404 {$httpcode[404]}");
            }
            return json_encode($article[0]);
        }
    }

    function create($param) {
        // later
    }

    function update($param) {
        // later
    }

    function delete($param) {
        // later
    }

}
