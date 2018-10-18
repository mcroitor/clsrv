<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="../scripts/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <h3>Headers</h3>
        <div id="header"></div>
        <h3>Response</h3>
        <div id="result"></div>
        <script type="text/javascript">
            var _data = {'login': 'tester', 'password': 'tester', 'email': 'root@localhost'};
            var url = "http://localhost/clsrv/api/?q=user/create/";
            a = $.ajax({
                'url': url,
                'type': 'post',
                'data': _data,
                success: function(data, status, xhr) {
                    $("#header").html("<h3>" + xhr.status + "</h3>" + xhr.getAllResponseHeaders());
                    $("#result").html(xhr.responseText);
                },
                error: function (xhr, status) {
                    $("#header").html("<h3>" + xhr.status + "</h3>" + xhr.getAllResponseHeaders());
                    $("#result").html(xhr.responseText);
                }
            });
        </script>
    </body>
</html>
