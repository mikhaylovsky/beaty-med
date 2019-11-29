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
                            @foreach($categories as $category)
                                <ul>
                                    <li>
                                        <a href="/category/{{$category->id}}">
                                            {{$category->name}}
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="blog-post-title">

                                </h2>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection