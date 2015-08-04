@extends('layouts.master')

@section('content')
    <table class="table">
        <caption>Optional table caption.</caption>
        <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>

                    <td> {{ link_to_route('posts.edit', "Edit", ['id' => $post->id ], []) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
