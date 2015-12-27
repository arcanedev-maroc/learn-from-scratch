@extends('backend._template.master')
@section('content')
    <div class="mdl-grid">
    {!! Form::open(['route' => 'admin::topics.store', 'method' => 'post']) !!}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('title', 'Title', ['class' => 'mdl-textfield__label']) !!}
            {!! Form::text('title', '', ['class' => 'mdl-textfield__input']) !!}
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
            {!! Form::label('body', 'Body', ['class' => 'mdl-textfield__label']) !!}
            {!! Form::text('body', '', ['class' => 'mdl-textfield__input']) !!}
        </div>
        <br>
        {!! Form::submit('Submit', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored']) !!}
    {!! Form::close() !!}
    </div>
@endsection
