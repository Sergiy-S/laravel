@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" value="{{ old('image') }}">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option {{ old('category_id') == $category->id ? ' selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tags">Tags</label>
                <select multiple name="tags[]" class="form-control" id="tags">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
