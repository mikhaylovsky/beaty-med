@extends ('admin')

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Posts</h4>
                        </div>
                        <div class="card-body">
                            <h2 class="blog-post-title">
                                {{$post->title}}
                            </h2>

                            <p class="blog-post-meta">
                                <!-- Carbon library -->
                                {{$post->user->name}}

                                {{$post->created_at->toFormattedDateString()}}
                            </p>

                            <p>
                                {{$post->body}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection