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
                        @foreach($posts as $post)
                            <div class="blog-post">
                                <h2 class="blog-post-title">
                                    <a href="/posts/{{$post->id}}">
                                        {{$post->title}}
                                    </a>
                                </h2>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection