@extends ('auth')
@section ('content')

    <div class="col-sm-8">
        <h1>Sign In</h1>

        <form method="POST" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required></input>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required></input>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
        <div class="form-group">
            <a href="/register" class="btn btn-primary">Registration</a>
        </div>
        <div class="form-group">
            <a href="/reset" class="btn btn-primary">Forgot password?</a>
        </div>

        @include ('layouts.errors')

    </div>
@endsection