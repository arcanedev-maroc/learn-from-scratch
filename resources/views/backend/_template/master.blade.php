<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Material Design Lite</title>
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
</head>
<body class="backend-layout">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        @include('backend._template.header')

        @include('backend._template.sidebar')

        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid demo-content">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="{{ url('assets/js/vendors.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
