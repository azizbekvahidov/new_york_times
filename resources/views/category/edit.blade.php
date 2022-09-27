@extends('layout.main')

@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="text" placeholder="name" name="name" value="{{ $category->name }}"><br>
        <button type="submit" class="btn btn-info">update</button>
    </form>
@endsection
