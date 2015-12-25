<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Material Design Lite</title>
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
</head>
<body class="public-layout mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        @include('frontend._template.header')

        <main class="mdl-layout__content">
            <div class="page-content">
                @yield('content')
            </div>

            @include('frontend._template.footer')
        </main>
    </div>

    <script src="{{ url('assets/js/vendors.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
