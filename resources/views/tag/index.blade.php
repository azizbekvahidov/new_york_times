@extends("layout.main")

@section("content")
    <div>
        <a href="{{ route("tag.create") }}" class="btn btn-success">create</a>
    </div>
    <div class="col-8">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($tagList as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                        <a href="{{ route("tag.edit",$tag->id) }}" class="btn btn-info">update</a>
                        <a href="{{ route("tag.delete",$tag->id) }}" class="btn btn-danger"
                            onclick="event.preventDefault();document.getElementById(
                             'delete-form-{{$tag->id}}').submit();">delete</a>
                    </td>
                    <form id="delete-form-{{$tag->id}}"
                        + action="{{route('tag.delete', $tag->id)}}"
                        method="post">
                      @csrf @method('DELETE')
                  </form>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
