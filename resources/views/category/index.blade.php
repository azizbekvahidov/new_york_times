@extends("layout.main")

@section("content")
    <div>
        <a href="{{ route("category.create") }}" class="btn btn-success">create</a>
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
            @foreach($categoryList as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{ route("category.edit",$category->id) }}" class="btn btn-info">update</a>
                        {{-- <a href="{{ route("category.delete",$category->id) }}" class="btn btn-danger">delete</a> --}}
                        <form action="{{route("category.delete",$category->id)}}" method="POST" class="btn btn-danger">
                            @csrf
                            @method("delete")
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
