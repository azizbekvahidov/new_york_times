@extends('layout.main')

@section('content')
    <h1>
        Update news
    </h1>
    <div class="row">
        <form action="{{ route('news.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="col-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" value="{{ $news->title }}" class="form-control" name="title" id="inputName" placeholder="News title">
                </div>
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tags</label>
                <div class="col-sm-10">

                    <select class="select2 form-control" multiple="multiple" name="tags[]">

                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}" {{ $news->tags->contains($tag->id) ? "selected" : "" }} >{{$tag->name}}</option>
                            @endforeach
                    </select>
                </div>
                @error('tags')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea name="content" id=""class="summernote">{{ $news->content }}" </textarea>
                </div>
                @error('content')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $news->author }}" name="author" id="inputName"
                        placeholder="Write Author name">
                </div>
                @error('author')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control" id="">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}" {{ ($item->id == $news->category_id) ? "selected" : "" }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-5">
                    <input type="file" name="image" class="form-control" />
                </div>
                <div class="col-sm-5">
                    <img src="{{ Storage::disk("public")->url($news->image) }}" width="100" alt="">
                </div>
                @error('image')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                // airMode: true
                height: 150,
            });
        });
    </script>
@endsection
