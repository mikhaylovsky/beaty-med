@extends ('admin')

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Create a Category</h1>
                    <form method="POST" action="/categories">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="body">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="5" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        @include ('layouts.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection