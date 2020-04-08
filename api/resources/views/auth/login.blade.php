@extends('layouts.auth')
@section('form')
    <form class="form" method="post" action="{{ route('login.attempt') }}">
        {{ csrf_field() }}
        <div class="card card-login">
            <div class="card-header card-header-rose text-center">
                <h4 class="card-title">{{ __('Login') }}</h4>
            </div>
            <div class="card-body">
                <p class="card-description text-center">
                    <a href="{{ route('login.reset') }}">{{ __('Forgot password?') }}</a>
                </p>
                <div class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">email</i>
                            </span>
                        </div>
                        <input type="email" class="form-control" placeholder="{{ __('Email') }}" name="email"
                               value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input type="password" class="form-control" placeholder="{{ __('Password') }}" name="password"
                               required>
                    </div>
                </div>
            </div>
            <div class="card-footer justify-content-center">
                <button class="btn btn-rose btn-link btn-lg">{{ __('Lets Go') }}</button>
            </div>
        </div>
    </form>
@endsection
