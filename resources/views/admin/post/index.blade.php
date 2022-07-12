@extends('layouts.admin')

@section('content')
    <div>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-success mb-3">Create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Likes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->likes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
