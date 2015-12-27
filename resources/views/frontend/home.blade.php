@extends('frontend._template.master')

@section('content')
    @foreach ($topics as $topic)
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <i class="material-icons">play_circle_filled</i>
            </header>

            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card__supporting-text">
                    <a href="/admin/topics/{{ $topic->id }}"><h4>{{ $topic->title }}</h4></a> {{-- Added temporarily remove it later. --}}
                    {{ $topic->body }}
                </div>
                <div class="mdl-card__actions">
                    <a href="" class="mdl-button">Read the topic</a>
                </div>
            </div>
            <button data-upgraded=",MaterialButton,MaterialRipple" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
                <i class="material-icons">more_vert</i>
                <span class="mdl-button__ripple-container">
                    <span class="mdl-ripple"></span>
                </span>
            </button>
            <div class="mdl-menu__container is-upgraded">
                <div class="mdl-menu__outline mdl-menu--bottom-right"></div>
                <ul data-upgraded=",MaterialMenu" class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
                    <li tabindex="-1" class="mdl-menu__item">Lorem</li>
                    <li tabindex="-1" class="mdl-menu__item" disabled="">Ipsum</li>
                    <li tabindex="-1" class="mdl-menu__item">Dolor</li>
                </ul>
            </div>
        </section>
    @endforeach

@endsection

@section('scripts')
@endsection
