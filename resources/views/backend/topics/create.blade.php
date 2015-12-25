@extends('backend._template.master')
@section('content')
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
        <div class="mdl-layout__drawer">
            <span class="mdl-layout__title">Material Design Lite</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="#">Hello</a>
                <a class="mdl-navigation__link" href="#">World.</a>
                <a class="mdl-navigation__link" href="#">How</a>
                <a class="mdl-navigation__link" href="#">Are</a>
                <a class="mdl-navigation__link" href="#">You?</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div>Content</div>
        </main>
    </div>
@endsection
