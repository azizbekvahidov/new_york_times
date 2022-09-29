@extends('layout.main')

@section('content')
    <form action="{{ route('tag.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="text" placeholder="name" name="name" value="{{ $tag->name }}"><br>
        <button type="submit" class="btn btn-info">update</button>
    </form>
@endsection
