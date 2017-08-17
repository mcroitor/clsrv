<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="../scripts/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <h3>Headers</h3>
        <div id="#header"></div>
        <h3>Response</h3>
        <div id="result"></div>
        <script type="text/javascript">
            var _data = {'login': 'tester', 'password': 'tester', 'email': 'i@love.you'};
            var url = "http://localhost/clsrv/api/?q=user/create/";
            a = $.ajax({
                'url': url,
                'type': 'post',
                'data': _data,
                statusCode: {
                    200: function (data) {
                        console.log(a.getAllResponseHeaders());
                        $("#result").html(data);
                        $("#header").html(a.getAllResponseHeaders());
                    },
                    403: function (data) {
                        //console.log(a.getAllResponseHeaders());
                        $("#result").html(data);
                        $("#header").html(a.getAllResponseHeaders());
                    }
                }
            });
        </script>
    </body>
</html>
