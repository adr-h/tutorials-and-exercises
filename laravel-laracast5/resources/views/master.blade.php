<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            {{--@include("partials.flash")--}}
            @include("flash::message")

            @yield("content")
        </div>

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $("div.alert").not(".alert-important").delay(3000).slideUp(300);
            $("#flash-overlay-modal").modal();
        </script>

        @yield("footer")
    </body>
</html>
