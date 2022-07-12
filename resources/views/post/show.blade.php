@extends('layouts.main')
@section('content')
<div>
    <h1>{{ $post->title }}</h1>
    <div>{{ $post->content }}</div>
    <div>{{ $post->likes }}</div>
    <img src="{{ $post->image }}" alt="">

    <div>
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>
</div>
@endsection