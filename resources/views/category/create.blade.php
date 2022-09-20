@extends("layout.main")

@section("content")
    <h1>
        Create category
    </h1>
    <div class="row">
        <form action="{{route("category.store")}}" method="post" class="row g-3">
            @method("put")
            @csrf
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Category Name">
                </div>
                @error("name")
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
