<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>E-commerce Site</title>
    <link rel='stylesheet' href='assest/css/bootstrap.css' type='text/css'>
    <script src='assest/js/jQuery.js'></script>
    <style>
        .custom_login {
            height: 500px;
            padding-top: 100px;
        }
    </style>
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
    
</body>
</html>