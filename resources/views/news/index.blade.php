@extends("layout.main")

@section("content")
    <div>
        <a href="{{ route("news.create") }}" class="btn btn-success">create</a>
    </div>
    <div class="col-8">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($newsList as $news)
                <tr>
                    <td>{{$news->id}}</td>
                    <td>{{$news->title}}</td>
                    <td>{{$news->author}}</td>
                    <td><img src="{{ Storage::disk("public")->url($news->image) }}" width="100" alt=""></td>
                    <td>
                        <a href="{{ route("news.edit",$news->id) }}" class="btn btn-info">update</a>
                        <a href="{{ route("news.delete",$news->id) }}" class="btn btn-danger"
                            onclick="event.preventDefault();document.getElementById(
                             'delete-form-{{$news->id}}').submit();">delete</a>
                    </td>
                    <form id="delete-form-{{$news->id}}"
                        + action="{{route('news.delete', $news->id)}}"
                        method="post">
                      @csrf @method('DELETE')
                  </form>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
