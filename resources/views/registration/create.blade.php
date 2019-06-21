@extends ('auth')
@section ('content')

    <div class="col-sm-8">
        <h1>Register</h1>

        <form method="POST" action="/register">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required></input>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                       class="form-control" required></input>
            </div>

            <div class="form-group">
                <label for="password">Password Confirmation</label>
                <input type="password" name="password" id="password" class="form-control" required></input>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
        <div class="form-group">
            <a href="/login" class="btn btn-primary">Sign In</a>
        </div>
    </div>

@endsection