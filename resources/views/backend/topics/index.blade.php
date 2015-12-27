@extends('backend._template.master')

@section('content')
    <h1>Topics <small> - List of topics</small></h1>
    <!-- Colored FAB button with ripple -->
    <button class="mdl-button mdl-js-button mdl-button--fab -align-right">
        <a href="{{ route('admin::topics.create') }}"><i class="material-icons">add</i></a>
    </button>
    <table class="mdl-data-table mdl-shadow--2dp mdl-cell mdl-cell--12-col">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th style="width: 145px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topics as $topic)
                <tr>
                    <td>{{ $topic->id }}</td>
                    <td>{{ $topic->title }}</td>
                    <td>
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--search-button">
                            <i class="material-icons">search</i>
                        </button>

                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--edit-button">
                            <i class="material-icons">edit</i>
                        </button>

                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--delete-button">
                            <a href="{{ route('admin::topics.create') }}"><i class="material-icons">delete</i></a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
