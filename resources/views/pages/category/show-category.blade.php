@extends ('admin')

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Categories</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="blog-post-title">
                                {{$category->name}}
                            </h2>
                            <p> {{$category->description}}</p>
                            <p class="blog-post-meta">
                                {{$category->created_at->toFormattedDateString()}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection