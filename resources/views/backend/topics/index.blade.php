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
                    <td><a href="{{ route('admin::topics.show', [$topic->id]) }}">{{ $topic->title }}</a></td>
                    <td>
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--search-button">
                            <a href="{{ route('admin::topics.show', [$topic->id]) }}"><i class="material-icons">search</i></a>
                        </button>
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--edit-button">
                            <i class="material-icons">edit</i>
                        </button>
                    <form action="{{ route('admin::topics.delete', [$topic->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                         <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--delete-button">
                                <i class="material-icons">delete</i>
                         </button>
                    </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
