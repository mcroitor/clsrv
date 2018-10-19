<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <title><!-- page-title --></title>
        <!-- page-scripts -->
        <!-- page-styles -->
        <script>
            function load_content() {
                $("main").load("./api/?q=article/get/1");
            }
        </script>
    </head>
    <body onload="load_content();">
        <header><!-- page-header --></header>
        <nav><!-- page-nav --></nav>
        <main><!-- page-main --></main>
        <aside><!-- page-aside --></aside>
        <footer><!-- page-footer --></footer>
    </body>
</html>