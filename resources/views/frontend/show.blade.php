@extends('frontend._template.master')

@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--2-col"></div>
        <div class="mdl-cell mdl-cell--8-col">
            <h1>{{ $topic->title }}</h1>
            <hr>
            <p>
                {{ $topic->body }}
            </p>
            <br>
            <br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                <div class="mdl-layout-spacer"></div> <a href="{{ route('public::home') }}">Back</a>
            </button>
        </div>
        <div class="mdl-cell mdl-cell--2-col">

        </div>
    </div>
@endsection
@section('scripts')
@endsection
