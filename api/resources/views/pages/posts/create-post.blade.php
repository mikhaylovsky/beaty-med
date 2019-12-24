@extends ('admin')

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Create a Post</h1>
                    <form method="POST" action="/posts">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="title" class="form-control" id="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" class="form-control" cols="5" rows="5"></textarea>
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