{"filter":false,"title":"app.blade.php","tooltip":"/monolist/resources/views/layouts/app.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Monolist</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","","        <link rel=\"stylesheet\" href=\"{{ secure_asset('css/style.css') }}\">","    </head>","    <body>","        @include('commons.navbar')","","        @yield('cover')","","        <div class=\"container\">","            @include('commons.error_messages')","            @yield('content')","        </div>","","        @include('commons.footer')","    </body>","</html>"],"id":1}],[{"start":{"row":28,"column":7},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":29,"column":0},"end":{"row":29,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1532072439800,"hash":"08790bc43267929104f6e61197382c5bf3a7221e"}