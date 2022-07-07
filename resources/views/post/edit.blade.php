@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" value="{{ $post->image }}">
        </div>

        <div class="mb-3">
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                <option {{ $category->id === $post->category->id ? ' selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags">Tags</label>
            <select multiple name="tags[]" class="form-control" id="tags">
                @foreach($tags as $tag)
                <option @foreach($post->tags as $postTag)
                    {{ $tag->id === $postTag->id ? ' selected' : '' }}
                    @endforeach
                    value="{{ $tag->id }}">{{ $tag->title }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection