@extends ('admin')

@section ('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 user-main">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Users Prufiles</h4>
                        </div>
                        @foreach($users as $user)
                            @include('users.user')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection