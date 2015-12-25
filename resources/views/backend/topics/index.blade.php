@extends('backend._template.master')
@section('content')
        @foreach($topics as $topic)
                <h6>{{ $topic->title }}</h6>
                <table class="table table-striped">
                        <thead>
                                <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                </tr>
                        </thead>
                        <tbody>
                                <tr> <th>{{ $topic->id }}</th>
                                        <td>{{ $topic->title }}</td>
                                        <td>{{ $topic->body }}</td>
                                        <td>
                                           <button type="button" class="btn btn-primary">Edit</button>
                                           <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                </tr>
                        </tbody>
                </table>
        @endforeach
@endsection
